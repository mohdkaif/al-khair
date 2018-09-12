<?php

namespace Models;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Facades\DB;

class Search extends Model
{
    
    
    /*const CREATED_AT = 'created';
    const UPDATED_AT = 'updated';*/

   
    /**
     * [This method is for scope for default keys] 
     * @return Boolean
     */
   
    public static function list($search){

       $doctors = \DB::table('doctors')
        ->select('id',\DB::raw("NULL as title"),'name','mobile_number','country','qualifications',\DB::raw("NULL as description"),'image',\DB::raw("'doctors' as table_name")) 
        ->where('name','LIKE','%'.$search.'%');

        $hospitals = \DB::table('hospitals')
        ->select('id',\DB::raw("NULL as title"),'name','mobile_number','country',\DB::raw("NULL as qualifications"),'description','image',\DB::raw("'hospitals' as table_name"))
        ->where('name','LIKE','%'.$search.'%');

        $services = \DB::table('services')
        ->select('id','title',\DB::raw("NULL as name"),\DB::raw("NULL as mobile_number"),\DB::raw("NULL as country"),\DB::raw("NULL as qualifications"),'description','image',\DB::raw("'services' as table_name"))
        ->where('title','LIKE','%'.$search.'%')
        ->unionAll($doctors)
        ->unionAll($hospitals)
        ->get();

        return _arefy($services);

    }

}
