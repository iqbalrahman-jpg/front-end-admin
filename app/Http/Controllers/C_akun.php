<?php
 
namespace App\Http\Controllers;
 
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Support\Facades\Http;

class C_akun extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function index()
    {
        $data['akun'] = Http::get('http://localhost:4000/akun')->json();

        return view('akun', ['data'=>$data]);
    }
}