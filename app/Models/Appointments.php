<?php

namespace Models;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Facades\DB;

class Appointments extends Model
{
    protected $table = 'appointments';
    protected $primaryKey = 'id';
    
    /*const CREATED_AT = 'created';
    const UPDATED_AT = 'updated';*/

    protected $fillable = [
        'name',
        'email',
        'phone',
        'appointment_date',
        'description',
        'requirement',
        'type',
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
        $table_doctor = DB::table('appointments');
        if(!empty($data)){
            $table_doctor->where('id','=',$userID);
            $isUpdated = $table_doctor->update($data); 
        }
                
        return (bool)$isUpdated;
    }

    public static function list($fetch='array',$user_id=NULL,$where='',$order='id-desc',$sortbydate=false){
                
        $table_doctor = self::select(['*']);
        if($where){
            $table_doctor->whereRaw($where);
        }
         if($user_id){
            $table_doctor->where('id',$user_id);
        }
        if(!empty($order)){
            $order = explode('-', $order);
            $table_doctor->orderBy($order[0],$order[1]);
        }
        if($sortbydate){
            $sorted = $table_doctor->orderBy('appointment_date','DESC');
        }
        if($fetch === 'array'){
            $doctorlist = $table_doctor->get();
            return json_decode(json_encode($doctorlist ), true );
        }else if($fetch === 'obj'){
            return $table_doctor->limit($limit)->get();                
        }else if($fetch === 'single'){
            return $table_doctor->get()->first();
        }else if($fetch === 'count'){
            return $table_doctor->get()->count();
        }else{
            return $table_doctor->limit($limit)->get();
        }
    }

}
