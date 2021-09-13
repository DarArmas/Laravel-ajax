<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB; //agregada
use Illuminate\Http\Request; //agregado
use DataTables;

class AnimalController extends Controller
{
    public function index(Request $request){
        //recuperar los datos

        //si se recuperó un ajax
        if($request->ajax()){
            $animales = DB::select('CALL spset_animal()');
            //crear datatable
            return DataTables::of($animales)
                ->addColumn('action', function($animales){
                    $acciones = '<a href="" class="btn btn-info btn-sm">Editar</a>';
                    $acciones .= '&nbsp;&nbsp;&nbsp;<button type="button" name="delete" id="" class="btn btn-danger btn-sm">Eliminar</button>';
                    return $acciones; 
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('animal.index');
    }

   
}
