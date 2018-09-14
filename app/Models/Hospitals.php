<?php

namespace Models;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Facades\DB;

class Hospitals extends Model
{
    protected $table = 'hospitals';
    protected $primaryKey = 'id';
    
    /*const CREATED_AT = 'created';
    const UPDATED_AT = 'updated';*/

    protected $fillable = [
        'name',
        'country_code',
        'mobile_number',
        'street',
        'city',
        'state',
        'country',
        'post_code',
        'description',
        'image',
        'status',
        'created_at',     
        'updated_at'
    ];
    /**
     * [This method is for scope for default keys] 
     * @return Boolean
     */

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
        $table_hospital = DB::table('hospitals');
        if(!empty($data)){
            $table_hospital->where('id','=',$userID);
            $isUpdated = $table_hospital->update($data); 
        }
                
        return (bool)$isUpdated;
    }

    public static function list($fetch='array',$user_id=NULL,$where='',$order='id-desc'){
                
        $table_hospital = self::select(['*'])
        ->where('status','!=','trashed');
        if($where){
            $table_hospital->whereRaw($where);
        }
         if($user_id){
            $table_hospital->where('id',$user_id);
        }
        //$userlist['userCount'] = !empty($table_user->count())?$table_user->count():0;
        
        if(!empty($order)){
            $order = explode('-', $order);
            $table_hospital->orderBy($order[0],$order[1]);
        }
        if($fetch === 'array'){
            $hospitallist = $table_hospital->get();
            return json_decode(json_encode($hospitallist ), true );
        }else if($fetch === 'obj'){
            return $table_hospital->limit($limit)->get();                
        }else if($fetch === 'single'){
            return $table_hospital->get()->first();
        }else{
            return $table_hospital->limit($limit)->get();
        }
    }
     public static function datalist($fetch='array',$where=NULL,$keys=[]){
                
        $table_hospital = self::select($keys);
        if(!empty($where)){
            $table_hospital->whereRaw($where);
        }
        if($fetch === 'array'){
            $list = $table_hospital->get();
            return json_decode(json_encode($list ), true );
        }
    }

}
