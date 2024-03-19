<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departmensts;

class DepartmenstsController extends Controller
{
    public function index()
    {
        $departmensts = Departmensts::all();
        return response()->json($departmensts);
    }

    public function store(Request $request)
    {
        $departmensts = new departmensts([
            'name' => $request->get('name')
        ]);
        $departmensts->save();
        return response()->json("creado correctamente", 201);
    }

    public function show($id)
    {
        $departmensts = departmensts::find($id);
        return response()->json($departmensts);
    }

    public function update(Request $request, $id)
    {
        $departmensts = departmensts::find($id);
        $departmensts->name = $request->name;
        $departmensts->save();
        return response()->json("actualizado correctamente", 200);
    }

    public function destroy($id)
    {
        $departmensts = departmensts::find($id);
        $departmensts->delete();
        return response()->json("eliminado correctamente", 204);
    }
}
