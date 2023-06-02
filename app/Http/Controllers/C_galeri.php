<?php
 
namespace App\Http\Controllers;
 
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Support\Facades\Http;

class C_galeri extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function index()
    {
        $data['kategori'] = Http::get('http://localhost:7500/kategori')->json();
        $data['galeri'] = Http::get('http://localhost:7500/galeri')->json();

        return view('galeri', ['data'=>$data]);
    }
}