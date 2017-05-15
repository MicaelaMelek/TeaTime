<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Tea;

class TeaController extends Controller
{
    public function index(Request $request)
    {
        $teas = Tea::whereBaseType($request->get('base_type'))
            ->whereFlavors($request->get('flavors'));
        return JsonResponse::create($teas->paginate(5), 200);

    }
    
}
