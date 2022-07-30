<?php

namespace App\Http\Controllers;


use App\Http\Resources\Motorista as MotoristaResource;
use Illuminate\Http\Request;
use App\Models\Models\ModelMotorista;

class MotoristaController extends Controller
{

    public function store(Request $request)
    {
        $motorista = ModelMotorista::create($request->all());

        return response($motorista, 201);
    }


    public function show()
    {
        return response()->json(ModelMotorista::all(), 200);
    }


    public function edit(Request $request, $id)
    {
        $motorista = ModelMotorista::find($id);
        $motorista->update($request->all());
        return response($motorista, 200);
    }


   public function destroy($id){
    $motorista = ModelMotorista::find($id);
    $motorista->delete();

    return response()->json(null, 204);

  }
}
