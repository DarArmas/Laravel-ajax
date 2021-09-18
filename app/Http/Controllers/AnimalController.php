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

        //aqui recupera datos de la BBDD
        if($request->ajax()){
            $animales = DB::select('CALL spset_animal()');
            //crear datatable
            return DataTables::of($animales)
                ->addColumn('action', function($animales){
                    $acciones = '<a href="javascript:void(0)" onclick="editarAnimal('. $animales->id .')" class="btn btn-info btn-sm">Editar</a>';
                    $acciones .= '&nbsp;&nbsp;&nbsp;<button type="button" name="delete" id="'. $animales->id .'" class="delete btn btn-danger btn-sm">Eliminar</button>';
                    return $acciones; 
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('animal.index');
    }

    public function registrar(Request $request){
        //llamar a mi stored procedure
        $animal = DB::select('CALL spcre_animal(?,?,?)',
            [$request->nombre, $request->especie, $request->genero]);

        return back();
    }

    public function eliminar($id){
        //el id me llega desde la url en el .ajax
        $animal = DB::select('CALL spdel_animal(?)', [$id]);
        return back();

    }

    public function editar($id){
        //solo seleccionar el animal para despues actualizarlo
        $animal = DB::select('CALL spseledit_animal(?)', [$id]);
        return response()->json($animal);
    }
   
}
