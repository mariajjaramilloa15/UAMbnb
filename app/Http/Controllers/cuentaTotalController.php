<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PropertyCreateRequest;

class cuentaTotalController extends Controller
{
    public function create()
    {
        $properties = Property::where('user_id', Auth::id())
            ->get();

            $cuentaTotal = 0;
            foreach($properties as $property){
                $cuentaTotal += $property -> contador;
            }



        return view('cuentaTotal', compact(['properties', 'cuentaTotal']));
    }

}