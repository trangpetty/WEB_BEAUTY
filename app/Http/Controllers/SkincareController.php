<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skincare;
use App\Models\TypeSkincare;
use Illuminate\Support\Facades\DB;

class SkincareController extends Controller
{
    public function index() {
        $serum = DB::table("skincare")
                ->where("type_id",'=',1)
                ->get();
        $cleanser = DB::table("skincare")
        ->where("type_id",'=',4)
        ->get();
        $sunscreen = DB::table("skincare")
        ->where("type_id",'=',3)
        ->get();
        $mask = DB::table("skincare")
        ->where("type_id",'=',2)
        ->get();
        $toner = DB::table("skincare")
        ->where("type_id",'=',5)
        ->get();
        return view('skincare.index',[
            'serum' => $serum,
            'sunscreen' => $sunscreen,
            'cleanser' => $cleanser,
            'mask' => $mask,
            'toner' => $toner
        ]);
    }

    public function show() {
        $serum = DB::table("skincare")
                ->where("type_id",'=',1)
                ->get();
        $cleanser = DB::table("skincare")
        ->where("type_id",'=',4)
        ->get();
        $sunscreen = DB::table("skincare")
        ->where("type_id",'=',3)
        ->get();
        $mask = DB::table("skincare")
        ->where("type_id",'=',2)
        ->get();
        $toner = DB::table("skincare")
        ->where("type_id",'=',5)
        ->get();
        return view('skincare.admin',[
            'serum' => $serum,
            'sunscreen' => $sunscreen,
            'cleanser' => $cleanser,
            'mask' => $mask,
            'toner' => $toner
        ]);
    }

    public function destroy($id) {
        //dd($id);
        $skincare = Skincare::find($id);
        $skincare->delete();
        return redirect('skincare/admin');
    }

    public function create() {
        $types = TypeSkincare::all();
        return view('skincare.create',['types'=>$types]);
    }

    public function edit($id) {
        //dd($id);
        $skincare = Skincare::find($id);
        $types = TypeSkincare::all();
        //dd($skincare);
        return view('skincare.edit',[
            'types'=>$types,
            'skincare' => $skincare
        ]);
    }

    public function update(Request $request, $id) {
        //$request->validated();
        $generatedImageName = 'image_path'.time().'-'.$request->name.'.'.$request->image_path->extension();
        //dd($generatedImageName);
        $request->image_path->move(public_path('images'),$generatedImageName);
        $skincare = Skincare::where('id', $id)
                ->update([
                    'name' => $request->input('name'),
                    'desc' => $request->input('desc'),
                    'count' => $request->input('count'),
                    'type_id' => $request->input('type_id'),
                    'price' => $request->input('price'),
                    'image_path' =>  $generatedImageName
                ]);
        return redirect('skincare/admin');
    }

    public function store(Request $request) {
        //dd($request->file('image_path')->isValid());//->isValid());
        $generatedImageName = 'image_path'.time().'-'.$request->name.'.'.$request->image_path->extension();
        //dd($generatedImageName);
        $request->image_path->move(public_path('images'),$generatedImageName);
        $skincare = Skincare::create([
            'name' => $request->input('name'),
            'desc' => $request->input('desc'),
            'count' => $request->input('count'),
            'type_id' => $request->input('type_id'),
            'price' => $request->input('price'),
            'image_path' => $generatedImageName,
        ]);
        //$request->validated();
        $skincare->save();
        // $type = TypeSkincare::create([
        //     'name' => $request->input('name-type'),
        //     'desc' => $request->input('desc-type')
        // ]);
        // $type->save();
        return redirect('skincare/admin');
    }
}
