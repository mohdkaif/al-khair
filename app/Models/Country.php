<?php

namespace Models;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Facades\DB;

class Country extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'country';
    /*const CREATED_AT = 'created';
    const UPDATED_AT = 'updated';*/

    protected $fillable = [
        'id',
        'code',
        'name',
    ];

  public static function list($fetch='array',$where=NULL,$keys=[]){
        $table_country = self::select($keys);
        if(!empty($where)){
            $table_country->whereRaw($where);
        }
        if($fetch === 'array'){
            $list = $table_country->get();
            return json_decode(json_encode($list ), true );
        }
    }

    

}
