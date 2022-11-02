<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Makeup;
use App\Models\Type;
use Illuminate\Support\Facades\DB;

class MakeupController extends Controller
{
    public function index() {
        $lipstick = DB::table("makeup")
                ->where("type_id",'=',1)
                ->get();
        $eyeliner = DB::table("makeup")
        ->where("type_id",'=',4)
        ->get();
        $mascara = DB::table("makeup")
        ->where("type_id",'=',3)
        ->get();
        $eyeshadow = DB::table("makeup")
        ->where("type_id",'=',2)
        ->get();
        return view('makeup.index',[
            'lipstick' => $lipstick,
            'eyeliner' => $eyeliner,
            'mascara' => $mascara,
            'eyeshadow' => $eyeshadow
        ]);
    }

    public function show() {
        $lipstick = DB::table("makeup")
                ->where("type_id",'=',1)
                ->get();
        $eyeliner = DB::table("makeup")
        ->where("type_id",'=',4)
        ->get();
        $mascara = DB::table("makeup")
        ->where("type_id",'=',3)
        ->get();
        $eyeshadow = DB::table("makeup")
        ->where("type_id",'=',2)
        ->get();
        return view('makeup.admin',[
            'lipstick' => $lipstick,
            'eyeliner' => $eyeliner,
            'mascara' => $mascara,
            'eyeshadow' => $eyeshadow
        ]);
    }

    public function destroy($id) {
        //dd($id);
        $makeup = Makeup::find($id);
        $makeup->delete();
        return redirect('makeup/admin');
    }

    public function create() {
        $types = Type::all();
        return view('makeup.create',['types'=>$types]);
    }

    // public function show($id) {        
    //     $type = Type::find($id);
    //     $makeup = Makeup::find($type->type_id);
    //     return view('makeup.index')->with('makeup',$makeup);
    // }

    public function edit($id) {
        //dd($id);
        $makeup = Makeup::find($id);
        $types = Type::all();
        //dd($skincare);
        return view('makeup.edit',[
            'types'=>$types,
            'makeup' => $makeup
        ]);
    }

    public function update(Request $request, $id) {
        //$request->validated();
        $generatedImageName = 'image_path'.time().'-'.$request->name.'.'.$request->image_path->extension();
        //dd($generatedImageName);
        $request->image_path->move(public_path('images'),$generatedImageName);
        $makeup = Makeup::where('id', $id)
                ->update([
                    'name' => $request->input('name'),
                    'desc' => $request->input('desc'),
                    'count' => $request->input('count'),
                    'type_id' => $request->input('type_id'),
                    'price' => $request->input('price'),
                    'image_path' =>  $generatedImageName
                ]);
        return redirect('makeup/admin');
    }

    public function store(Request $request) {
        //dd($request->file('image_path')->isValid());//->isValid());
        $generatedImageName = 'image_path'.time().'-'.$request->name.'.'.$request->image_path->extension();
        //dd($generatedImageName);
        $request->image_path->move(public_path('images'),$generatedImageName);
        $makeup = Makeup::create([
            'name' => $request->input('name'),
            'desc' => $request->input('desc'),
            'count' => $request->input('count'),
            'type_id' => $request->input('type_id'),
            'price' => $request->input('price'),
            'image_path' => $generatedImageName,
        ]);
        //$request->validated();
        $makeup->save();
        // $type = Type::create([
        //     'name' => $request->input('name-type'),
        //     'desc' => $request->input('desc-type')
        // ]);
        // $type->save();
        return redirect('makeup/admin');
    }
}
