<?php
 
namespace App\Http\Controllers;
 
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class C_kategori extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function index(){
        $data['kategori'] = Http::get('http://localhost:7500/kategori')->json();

        return view('kategori', ['data'=>$data]);
    }

    public function tambah(Request $req)
    {
        $nama = $req->nama_kategori;
        $status = $req->status;

        $response = Http::post('http://localhost:7500/kategori', [
            'nama_kategori' => $nama,
            'status' => (int)$status,
        ]);

        return $this->index();
    }

    public function edit($id){
        $data['kategori'] = Http::get('http://localhost:7500/kategori/'.$id)->json();

        return view('/crud/kategori/edit_kategori', ['data'=>$data]);
    }

    public function update(Request $req){
        $id = $req->id;
        $nama = $req->nama_kategori;
        $status = $req->status;

        $response = Http::patch('http://localhost:7500/kategori/'.$id , [
            'nama_kategori' => $nama,
            'status' => (int)$status,
        ]);

        return $this->index();
    }

    public function delete($id){
        $response = Http::delete('http://localhost:7500/kategori/'.$id);

        return $this->index();
    }
}