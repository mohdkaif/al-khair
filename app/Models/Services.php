<?php

namespace Models;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Facades\DB;

class Services extends Model
{
    protected $table = 'services';
    protected $primaryKey = 'id';
    
    /*const CREATED_AT = 'created';
    const UPDATED_AT = 'updated';*/

    protected $fillable = [
        'title',
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


    public static function change($userID,$data){
        $isUpdated = false;
        $table_services = DB::table('services');
        if(!empty($data)){
            $table_services->where('id','=',$userID);
            $isUpdated = $table_services->update($data); 
        }
                
        return (bool)$isUpdated;
    }

    public static function list($fetch='array',$user_id=NULL,$where='',$order='id-desc'){
                
        $table_services = self::select(['*'])
        ->where('status','!=','trashed');
        if($where){
            $table_services->whereRaw($where);
        }
         if($user_id){
            $table_services->where('id',$user_id);
        }
        //$userlist['userCount'] = !empty($table_user->count())?$table_user->count():0;
        
        if(!empty($order)){
            $order = explode('-', $order);
            $table_services->orderBy($order[0],$order[1]);
        }
        if($fetch === 'array'){
            $doctorlist = $table_services->get();
            return json_decode(json_encode($doctorlist ), true );
        }else if($fetch === 'obj'){
            return $table_services->limit($limit)->get();                
        }else if($fetch === 'single'){
            return $table_services->get()->first();
        }else{
            return $table_services->limit($limit)->get();
        }
    }

     public static function datalist($fetch='array',$where=NULL,$keys=[]){
                
        $table_services = self::select($keys);
        if(!empty($where)){
            $table_services->whereRaw($where);
        }
        if($fetch === 'array'){
            $list = $table_services->get();
            return json_decode(json_encode($list ), true );
        }
    }


}
