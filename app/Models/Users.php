<?php

namespace Models;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Facades\DB;

class Users extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    
    /*const CREATED_AT = 'created';
    const UPDATED_AT = 'updated';*/

    protected $fillable = [
        'type',
        'name',
        'first_name',
        'last_name',
        'email',
        'gender',
        'password',
        'status',
        'created_at',     
        'updated_at'
    ];

    protected $hidden = [
        'password', 'remember_token',
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
        $table_users = DB::table('users');
        if(!empty($data)){
            $table_users->where('id','=',$userID);
            $isUpdated = $table_users->update($data); 
        }
                
        return (bool)$isUpdated;
    }

    public static function list($fetch='array',$user_id=NULL,$where='',$order='id-desc'){
                
        $table_user = self::select(['*'])->where('status','!=','trashed');
        if($where){
            $table_user->whereRaw($where);
        }
        if(!empty($user_id)){
            $table_user->where(['id' => $user_id]);
        }

        //$userlist['userCount'] = !empty($table_user->count())?$table_user->count():0;
        
        if(!empty($order)){
            $order = explode('-', $order);
            $table_user->orderBy($order[0],$order[1]);
        }
        if($fetch === 'array'){
            $userlist = $table_user->get();
            return json_decode(json_encode($userlist ), true );
        }else if($fetch === 'obj'){
            return $table_user->limit($limit)->get();                
        }else if($fetch === 'single'){
            return $table_user->get()->first();
        }else{
            return $table_user->limit($limit)->get();
        }
    }

}
