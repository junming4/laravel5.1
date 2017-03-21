<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller
{
    //
    public function index()
    {
        return view('backend.mail.index');
    }

    public function show()
    {
        return view('backend.mail.show');
    }

    public function create(){
        return view('backend.mail.create');
    }


}
