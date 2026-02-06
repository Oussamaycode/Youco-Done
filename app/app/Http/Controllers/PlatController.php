<?php

namespace App\Http\Controllers;

use App\Models\Plat;
use App\Models\Menu;
use App\Models\TypeCuisine;
use Illuminate\Http\Request;

class PlatController extends Controller
{
    public function index()
    {
        $plats = Plat::with(['menu', 'typeCuisine'])->get();
        return response()->json($plats);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string',
            'prix' => 'required|integer',
            'menu_id' => 'required|exists:menus,id',
            'type_cuisine_id' => 'required|exists:type_cuisines,id',
        ]);

        $plat = Plat::create($request->only('nom', 'prix', 'menu_id', 'type_cuisine_id'));
        return response()->json($plat, 201);
    }

    public function show($id)
    {
        $plat = Plat::with(['menu', 'typeCuisine'])->findOrFail($id);
        return response()->json($plat);
    }

    public function update(Request $request, $id)
    {
        $plat = Plat::findOrFail($id);
        $plat->update($request->only('nom', 'prix', 'menu_id', 'type_cuisine_id'));
        return response()->json($plat);
    }

    public function destroy($id)
    {
        $plat = Plat::findOrFail($id);
        $plat->delete();
        return response()->json(null, 204);
    }
}
