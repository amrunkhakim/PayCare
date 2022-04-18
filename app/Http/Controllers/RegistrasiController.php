<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegistrasiController extends Controller
{
    public function index(){
        return view ('Register.index',[

            'title'=>'Registrasi'
        ]);
    }
    public function store(Request $request){

       $validatedData = $request->validate([
           'name'=>'required|max:255|min:4',
           'username'=>['required','min:3','max:255','unique:users'],
           'email'=>'required|email:dns|unique:users',
           'password'=>'required|min:5|max:15',
       ]);
       $validatedData['password']= bcrypt($validatedData['password']);
       User::create($validatedData);
       $request->session()->flash('success','Registrasi Berhasil silahkan Login !');
       return redirect('/login');
    }
}
