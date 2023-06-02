<?php
 
namespace App\Http\Controllers;
 
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class C_wisata extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function index()
    {
        $data['wisata'] = Http::get('http://localhost:7500/wisata')->json();
        $data['kategori'] = Http::get('http://localhost:7500/kategori')->json();
        $data['halaman'] = 1;

        return view('wisata', ['data'=>$data]);
    }

    public function wisata($hal)
    {
        $data['wisata'] = Http::get('http://localhost:7500/wisata')->json();
        $data['halaman'] = $hal;

        return view('paket', ['data'=>$data]);
    }

    public function tambah_view(){
        $data['kategori'] = Http::get('http://localhost:7500/kategori')->json();

        return view('crud/wisata/tambah_wisata', ['data' => $data]);
    }

    public function tambah(Request $req){
        $response = Http::post('http://localhost:7500/wisata', [
            'kategori_wisata' => $req->kategori,
            'nama_wisata' => $req->nama,
            'deskripsi_wisata' => $req->deskripsi,
            'status' => (int)$req->status,
        ]);

        return $this->index();
    }

    public function edit($id){
        $data['wisata'] = Http::get('http://localhost:7500/wisata/'.$id)->json();
        $data['kategori'] = Http::get('http://localhost:7500/kategori/'.$data['wisata']['kategori_wisata'])->json();
        $data['kategori_wisata'] = Http::get('http://localhost:7500/kategori')->json();

        return view('crud/wisata/edit_wisata', ['data' => $data]);
    }

    public function update(Request $req){
        $response = Http::patch('http://localhost:7500/wisata/'.$req->id , [
            'kategori_wisata' => $req->kategori,
            'nama_wisata' => $req->nama,
            'deskripsi_wisata' => $req->deskripsi,
            'status' => (int)$req->status,
        ]);

        return $this->index();
    }

    public function delete($id){
        $response = Http::delete('http://localhost:7500/wisata/'.$id);

        return $this->index();
    }

    // public function kategori(){
    //     $data['kategori'] = Http::get('http://localhost:7500/kategori')->json();

    //     return view('kategori', ['data'=>$data]);
    // }
}