<?php
 
namespace App\Http\Controllers;
 
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Support\Facades\Http;

class Kontak extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function index()
    {
        $data = Http::get('http://localhost:7500/paket')->json();

        return view('kontak', ['data'=>$data]);
    }
}