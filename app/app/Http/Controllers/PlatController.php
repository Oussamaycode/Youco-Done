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
    
        ]);

        $user_id= auth()->user()->id;
        $restaurant_id=Restaurant::where('user_id',$user_id)->orderBy('id','desc')->first;//akhir restaurant tzad how li kancreew lih l menu daba
        $menu_id=Menu::where('restaurant_id',$restaurant_id)->get();
        $typecuisine_id=Restaurant::where('id',$restaurant_id)->value('typecuisine_id');

        Plat::create(['nom'=>$data['nom'],
        'nom'=>$request->nom,
        'prix'=>$request->prix,
        'menu_id'=>$menu_id,
        'typecuisine_id'=>$typecuisine_id,
        ]);

        return redirect()->route('menu.create');
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
