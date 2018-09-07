<?php

namespace Models;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Facades\DB;

class Country extends Model
{
    protected $primaryKey = 'id';
    
    /*const CREATED_AT = 'created';
    const UPDATED_AT = 'updated';*/

    protected $fillable = [
        'code',
        'name',
    ];

  public static function search($fetch='array'){
                
        $table_country = self::select(['*']);
        if($fetch === 'array'){
            $list = $table_country->get();
            return json_decode(json_encode($list ), true );
        }
    }

    

}
