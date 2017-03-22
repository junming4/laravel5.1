<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    //
    public function contacts(){
        return view('backend.pages.contacts');
    }

    public function profile(){
        return view('backend.pages.profile');
    }

    public function projectsIndex(){
        return view('backend.pages.projects_index');
    }

    public function projectsShow(){
        return view('backend.pages.projects_show');
    }

    public function teams(){
        return view('backend.pages.teams');
    }

    public function feed(){
        return view('backend.pages.feed');
    }

}
