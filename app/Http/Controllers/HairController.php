<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\Hair;
use\App\Models\TypeHair;
use Illuminate\Support\Facades\DB;

class HairController extends Controller
{
    public function index() {
        $shampoo = DB::table("hair")
                ->where("type_id",'=',1)
                ->get();
        $conditioner = DB::table("hair")
        ->where("type_id",'=',2)
        ->get();
        return view('hair.index',[
            'shampoo' => $shampoo,
            'conditioner' => $conditioner
        ]);
    }

    public function create() {
        $types = TypeHair::all();
        return view('hair.create',['types'=>$types]);
    }

    public function show() {
        $shampoo = DB::table("hair")
                ->where("type_id",'=',1)
                ->get();
        $conditioner = DB::table("hair")
        ->where("type_id",'=',2)
        ->get();
        return view('hair.admin',[
            'shampoo' => $shampoo,
            'conditioner' => $conditioner
        ]);
    }

    public function edit($id) {
        //dd($id);
        $hair = Hair::find($id);
        $types = TypeHair::all();
        //dd($skincare);
        return view('hair.edit',[
            'types'=>$types,
            'hair' => $hair
        ]);
    }

    public function update(Request $request, $id) {
        //$request->validated();
        $generatedImageName = 'image_path'.time().'-'.$request->name.'.'.$request->image_path->extension();
        //dd($generatedImageName);
        $request->image_path->move(public_path('images'),$generatedImageName);
        $hair = Hair::where('id', $id)
                ->update([
                    'name' => $request->input('name'),
                    'desc' => $request->input('desc'),
                    'count' => $request->input('count'),
                    'type_id' => $request->input('type_id'),
                    'price' => $request->input('price'),
                    'image_path' =>  $generatedImageName
                ]);
        return redirect('hair/admin');
    }

    public function destroy($id) {
        //dd($id);
        $hair = Hair::find($id);
        $hair->delete();
        return redirect('/hair/admin');
    }

    public function store(Request $request) {
        //dd($request->file('image_path')->isValid());//->isValid());
        $generatedImageName = 'image_path'.time().'-'.$request->name.'.'.$request->image_path->extension();
        //dd($generatedImageName);
        $request->image_path->move(public_path('images'),$generatedImageName);
        $hair = hair::create([
            'name' => $request->input('name'),
            'desc' => $request->input('desc'),
            'count' => $request->input('count'),
            'type_id' => $request->input('type_id'),
            'price' => $request->input('price'),
            'image_path' => $generatedImageName,
        ]);
        //$request->validated();
        $hair->save();
        // $type = TypeHair::create([
        //     'name' => $request->input('name-type'),
        //     'desc' => $request->input('desc-type')
        // ]);
        // $type->save();
        return redirect('hair/admin');
    }
}
