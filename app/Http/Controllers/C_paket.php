<?php
 
namespace App\Http\Controllers;
 
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class C_paket extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function index()
    {
        $data['paket_wisata'] = Http::get('http://localhost:7500/paket')->json();
        $data['halaman'] = 1;

        return view('paket', ['data'=>$data]);
    }

    public function paket($hal)
    {
        $data['paket_wisata'] = Http::get('http://localhost:7500/paket')->json();
        $data['halaman'] = $hal;

        return view('paket', ['data'=>$data]);
    }

    public function tambah_view(){
        $data['paket'] = Http::get('http://localhost:7500/paket')->json();
        $data['kategori'] = Http::get('http://localhost:7500/kategori')->json();
        $data['wisata'] = Http::get('http://localhost:7500/wisata')->json();

        return view('crud/paket/tambah_paket', ['data' => $data]);
    }

    public function tambah(Request $req){
        $wisata_id = "";
        $wis = $req->wisata;
        for($i = 0; $i < count($wis); $i++){
            if($i != (count($wis)-1)){
                $wisata_id = $wisata_id . $wis[$i] .",";
            }else{
                $wisata_id = $wisata_id . $wis[$i];
            }
        }

        $response = Http::post('http://localhost:7500/paket', [
            'paket_deskripsi' => $req->nama,
            'wisata_id' => $wisata_id,
            'penginapan_id' => "1",
            'harga' => $req->harga,
            'status' => (int)$req->status,
            'gambar' => "bali_3hr_2mlm.jpg"
        ]);

        return $this->index();
    }
}