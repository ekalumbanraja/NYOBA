<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\datajemaat;


class DatajemaatController extends Controller
{
    public function index(Request $request){
        if($request->has('search')){
            $data = datajemaat::where('nama','LIKE','%'.$request->search. '%')->paginate(5);
        }else{
            $data = datajemaat::paginate(5);
        }
        return view('datajemaat', compact('data'));
    }
    public function tambahjemaat(){ 
        return view('tambahjemaat');
    }
    public function insertdata(Request $request){ 
        //dd($request->all());
        datajemaat::create($request->all());
        return redirect()->route('datajemaat')->with('success','Data Berhasil ditambahkan'); 
    }
    public function tampilkandata($id){
        $data = datajemaat::find($id);
        //dd($data);
        return view('tampildata', compact('data'));
    }
    public function updatedata(Request $request,$id){
        $data = datajemaat::find($id);
        $data ->update($request->all());
        return redirect()->route('datajemaat')->with('success','Data Berhasil diupdate'); 
    }
    public function deletedata($id){
        $data = datajemaat::find($id);
        $data ->delete();
        return redirect()->route('datajemaat')->with('success','Data Berhasil dihapus'); 
    }
}