<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::with('plats')->get();
        return response()->json($menus);
    }

    public function create()

    {
         return view('menu.create');
    }

    public function store(Request $request)
    {
        $menu = Menu::create($request->only('nom'));
        return response()->json($menu, 201);
    }

    public function show($id)
    {
        $menu = Menu::with('plats')->findOrFail($id);
        return response()->json($menu);
    }

    public function update(Request $request, $id)
    {
        $menu = Menu::findOrFail($id);
        $menu->update($request->only('nom'));
        return response()->json($menu);
    }

    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);
        $menu->delete();
        return response()->json(null, 204);
    }
}
