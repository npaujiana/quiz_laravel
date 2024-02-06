<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectPage extends Controller
{
    public function redirectLogin(){
        return redirect('/login');
    }

    public function redirectRegistrasi(){
        return redirect('/registrasi');
    }

    public function redirectTodo(){
        return redirect('/todo');
    }
}
