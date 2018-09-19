<?php

namespace Models;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Facades\DB;

class Doctors extends Model
{
    protected $table = 'doctors';
    protected $primaryKey = 'id';
    
    /*const CREATED_AT = 'created';
    const UPDATED_AT = 'updated';*/

    protected $fillable = [
        'name',
        'email',
        'first_name',
        'last_name',
        'country_code',
        'mobile_number',
        'street',
        'city',
        'state',
        'country',
        'post_code',
        'gender',
        'dob',
        'qualifications',
        'specifications',
        'image',
        'status',
        'created_at',     
        'updated_at'
    ];
    /**
     * [This method is for scope for default keys] 
     * @return Boolean
     */
    public function locations(){
        return $this->hasOne('\Models\Country','id','country');
    }

    public static function add($data){
        if(!empty($data)){
            return self::insertGetId($data);
        }else{
            return false;
        }   
    }       

    public static function findByEmail($email,$keys = []){
        $table_user = DB::table((new static)->getTable());

        if(!empty($keys)){
            $table_user->select($keys);
        }

        return json_decode(
            json_encode(
                $table_user->where(
                    array(
                        'email' => $email,
                    )
                )->whereNotIn('status',['trashed'])->first()
            ),
            true
        );
    }

    public static function change($userID,$data){
        $isUpdated = false;
        $table_doctor = DB::table('doctors');
        if(!empty($data)){
            $table_doctor->where('id','=',$userID);
            $isUpdated = $table_doctor->update($data); 
        }
                
        return (bool)$isUpdated;
    }

    public static function list($fetch='array',$user_id=NULL,$where='',$order='id-desc'){
                
        $table_doctor = self::select(['*'])
        ->with([
            'locations' => function($q){
                $q->select('id','name');
            }
        ])
        ->where('status','!=','trashed');
        if($where){
            $table_doctor->whereRaw($where);
        }
         if($user_id){
            $table_doctor->where('id',$user_id);
        }
        //$userlist['userCount'] = !empty($table_user->count())?$table_user->count():0;
        
        if(!empty($order)){
            $order = explode('-', $order);
            $table_doctor->orderBy($order[0],$order[1]);
        }
        if($fetch === 'array'){
            $doctorlist = $table_doctor->get();
            return json_decode(json_encode($doctorlist ), true );
        }else if($fetch === 'obj'){
            return $table_doctor->limit($limit)->get();                
        }else if($fetch === 'single'){
            return $table_doctor->get()->first();
        }else{
            return $table_doctor->limit($limit)->get();
        }
    }

    public static function datalist($fetch='array',$where=NULL,$keys=[]){
                
        $table_doctor = self::select($keys);
        if(!empty($where)){
            $table_doctor->whereRaw($where);
        }
        if($fetch === 'array'){
            $list = $table_doctor->get();
            return json_decode(json_encode($list ), true );
        }
    }

}
