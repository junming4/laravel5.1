<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FormController extends Controller
{
    //
    public function basic()
    {
        return view('backend.form.basic');
    }


    public function validates(){
        return view('backend.form.validates');
    }

    public function advanced(){
        return view('backend.form.advanced');
    }

    public function wizard(){
        return view('backend.form.wizard');
    }

    public function uploadWebUploader()
    {
        return view('backend.form.webuploader');
    }

    public function uploadDropZone()
    {
        return view('backend.form.dropzone');
    }

    public function editorsSummer()
    {
       return view('backend.form.editors_summer');
    }

    public function editorsSim()
    {
        return view('backend.form.editors_sim');
    }

    public function editorsMarkdown()
    {
        return view('backend.form.editors_markdown');
    }

    public function editorsCode()
    {
        return view('backend.form.editors_code');
    }

    public function layerDate(){
         return view('backend.form.layerdate');
    }


}
