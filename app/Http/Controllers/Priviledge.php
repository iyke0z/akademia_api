<?php

namespace App\Http\Controllers;

use App\Models\Priviledge as ModelsPriviledge;
use Illuminate\Http\Request;

class Priviledge extends Controller
{
    public function priviledges(){
        $data = ModelsPriviledge::all();
        return response()->json($data);
    }

    public function addPriviledge(Request $request){
        $data = $request->all();
        $priviledge = new ModelsPriviledge();
        $priviledge->priviledge = $data['name'];
        $priviledge->save();
        return response()->json('saved');
    }

    public function destroy($id){
        $data = ModelsPriviledge::findOrFail($id);
        $data->delete();
    }
}
