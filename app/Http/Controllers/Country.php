<?php

namespace App\Http\Controllers\Select2Ajax;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Country extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function country(Request $request)
    {  
        $term = trim($request->q);

        if (empty($term)) {
            return \Response::json([]);
        }

        $countries = \Models\Country::search($term)->limit(5)->get();
        $formatted_tags = [];

        foreach ($countries as $country) {
            $formatted_tags[] = ['id' => $country->id, 'text' => $country->name];
        }

        return \Response::json($formatted_tags);
    }
}