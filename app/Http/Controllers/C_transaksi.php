<?php
 
namespace App\Http\Controllers;
 
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Support\Facades\Http;

class C_transaksi extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function index()
    {
        $temp = Http::get('http://localhost:4000/paket')->json();
        $data['pesanan'] = $temp;

        for($i = 0; $i < count($temp); $i++){
            $data['nama'][$i] = Http::get('http://localhost:4000/akun/'.$temp[$i]['id_akun'])->json();
            $data['paket'][$i] = Http::get('http://localhost:7500/paket/'.$temp[$i]['id_paket'])->json();
        };

        return view('transaksi', ['data'=>$data]);
    }

    public function member()
    {
        $data['member'] = Http::get('http://localhost:4000/akun')->json();
                
        return view('transaksi_member', ['data'=>$data]);
    }

    public function member_id($id){
        $data['pesanan'] = Http::get('http://localhost:4000/paket/'.$id)->json();
        $temp = $data['pesanan'];

        for($i = 0; $i < count($temp); $i++){
            $data['nama'][$i] = Http::get('http://localhost:4000/akun/'.$temp[$i]['id_akun'])->json();
            $data['paket'][$i] = Http::get('http://localhost:7500/paket/'.$temp[$i]['id_paket'])->json();
        };

        return view('detail_t_member', ['data'=>$data]);
    }
}