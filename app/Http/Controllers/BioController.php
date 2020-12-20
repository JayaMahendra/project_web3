<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Bio;
use App\Models\User;
use App\Models\hdetail;
use App\Models\bdetail;
use app\models\admin;

class BioController extends Controller
{
    public function home(){
        return view ('home');
        
    }

    public function ahome(){
        $this->middleware('auth');
        $this->middleware('admin');
        //echo "sadfsadf";
        return view ('ahome');
    }
    public function abook(){
        $this->middleware('auth');
        $this->middleware('admin');
        $book = DB::table('books')->get();
        return view('abook', ['book' => $book]);
    }
    public function aheroes(){
        $this->middleware('auth');
        $this->middleware('admin');
        $bio = DB::table('bios')->get();
        return view('aheroes', ['bio' => $bio]);
    }
    public function userr(){
        $this->middleware('auth');
        $this->middleware('admin');
        $user = DB::table('users')->get();
        return view('userr', ['user' => $user]);
    }

    
    public function edit($id)
    {
        $this->middleware('auth');
        $this->middleware('admin');
        $book = DB::table('books')->where('id',$id)->get();
        return view('edit',['book' => $book]);

    }

    public function editb($id)
    {
        $this->middleware('auth');
        $this->middleware('admin');
        $bio = DB::table('bios')->where('id',$id)->get();
        return view('editb',['bio' => $bio]);
    }
    public function updateb(Request $request){
        DB::table('bios')->where('id',$request->id)->update([
        'nama' => $request->judul,
        'isi' => $request->isi,
        ]);
    return redirect('/admin/aheroes'); 
}

    
    public function update(Request $request){
            DB::table('books')->where('id',$request->id)->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
            ]);
        return redirect('/admin/abook'); 
    }


    public function destroy(User $user)
    {
        //
        $user->delete();
        return redirect()->back()->with('success', 'User deleted successfully');
    }
        
        public function about(){
            return view ('about');
        }

    //db
    public function heroes()
    {
        // mengirim data pegawai ke view index
        $bio = db::table('bios')->get();
        //$bios = Bio::all();
        return view('heroes', ['bio' => $bio]);
    }

    public function book()
    {
        $book = db::table('books')->get();
        return view('book', ['book' => $book]);
    }

    public function hdetail($id)
    {
        $hdetail=DB::table('bios')->where('id' , '=' , $id)->get();
        return view('hdetail' , compact('hdetail'));
    }


    public function bdetail($id)
    {
        $bdetail=DB::table('books')->where('id' , '=' , $id)->get();
        return view('bdetail' , compact('bdetail'));
    }
 

    //upload gambar di edit form khusus admin eaaaa
    public function upload(Request $request){
        if($request->hasFile('image')){
            $resorce = $request->file('image');
            $name   = $resorce->getClientOriginalName();
            $resorce->move(\base_path() ."/public/images", $name);
            $save = DB::table('images')->insert(['image' => $name]);
            echo "Gambar berhasil di upload";
        }else{
            echo "Error to upload this file";
        }
    }
}