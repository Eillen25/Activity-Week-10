<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

class AwalController extends Controller
{
    public function index(){
        return view('index');
    }

    public function login(Request $req){
        if($req->session()->has('nama')){
            
            return redirect(url()->previous());

            // if(url_previous == '/rahasia'){
            //     return redirect('/rahasia');
            // } elseif(url_previous == '/secret') {
            //     return redirect('/secret');
            // } else {
            //     return redirect('/');
            // }

        } else {
            return view('/login');
        }
    }

    public function register(){
         return view('register');
    }
   
    public function authentication(Request $req){
        $name = $req->input('nama_user');
        $pass = $req->input('kata_sandi');

        if($name == $pass){
            $req->session()->put('nama', $name);

            if(Session::has('linknya')){
                $link = $req->session()->get('linknya');
                return redirect($link);
            } else {
                $nama = $req->session()->get('nama');
                return redirect('/rahasia');
            }

        } else {
            Session::flash('gagal', 'Mungkin Anda memasukkan username atau password yang salah');
            return redirect('/login');
        }
    }

    public function rahasia(Request $req){
        if($req->session()->has('nama')){
            $nama = $req->session()->get('nama');
            return view('/rahasia', ['nama'=>$nama]);
        } else {
            Session::flash('belum', 'Maaf Anda perlu login terlebih dahulu');
            return redirect('/login');
        }
    }
    
    public function logout(Request $req){
        // Session::forget('nama');
        // Session::forget('linknya');
        Session::flush();
        Session::flash('keluar', 'Anda telah logout');
        return redirect('/login');
    }

    public function secret(Request $req){
        
        if(Session::has('nama')){
            $nama = $req->session()->get('nama');
            return view('/secret', ['nama'=>$nama]);
        } else {
            Session::flash('belum', 'Maaf Anda perlu login terlebih dahulu');
            $req->session()->put('linknya', url()->full());
            return redirect('login');    
        }
    }

}