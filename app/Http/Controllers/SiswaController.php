<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use App\Models\siswa;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class SiswaController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
     
    public function index() {
        // $siswa = siswa::latest()->paginate(5);
        // return view('data', compact('Siswa'))->with('i',(request()->input('page',1) -1) *5);
        $siswa = DB::table('siswa')->get();
        $title = 'Delete User?';
        $text = "Beneran mau Di hapus?";
        confirmDelete($title, $text);
        return view('backend.data',['siswa' => $siswa]);
    }
    public function tambah(){
        return view('backend.tambah');
    }
    public function store(Request $request){
        $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg,gif|max:2048',
        ]);

        $Gambar = $request->file('image');
        $nama_gambar =$Gambar->getClientOriginalName();
        $path = public_path('/images');
        $Gambar->move($path,$nama_gambar);

        DB::table('siswa')->insert([
            'nama'=> $request->nama,
            'kelas'=> $request->kelas,
            'jurusan'=> $request->jurusan, 
            'image'=>$nama_gambar, 
        ]);
        return redirect('admin/data')->with('toast_success', 'Task Created Successfully!');
    }
    public function edit($id){
        $siswa = DB::table('siswa')->where('id',$id)->first();
        return view('backend.edit',compact('siswa'));
    }
    public function update(Request $request,$id){        
           

            if($request->hasFile('image')){
            $Gambar = $request->file('image');
            $nama_gambar =$Gambar->getClientOriginalName();
            $path = public_path('/images');
            $Gambar->move($path,$nama_gambar);
            $data=[
                'nama'=> $request->nama,
                'kelas'=> $request->kelas,
                'jurusan'=> $request->jurusan,  
                'image' => $nama_gambar,
            ];
            }
            else{
                $data=[
                    'nama'=> $request->nama,
                    'kelas'=> $request->kelas,
                    'jurusan'=> $request->jurusan,  
                ];
            }

            
        DB::table('siswa')->where('id',$id)->update($data);
        return redirect('admin/data')->with('toast_success','datamu dah di update');
    }







    public function delete($id){
        DB::table('siswa')->where('id',$id)->delete();
        return redirect('admin/data')->with('toast_success','datamu dah di hapus');
    }
}
