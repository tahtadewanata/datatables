<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatadasarController extends Controller
{
    //
    public function index()
    {
        //
        $data = [
            'title' => 'Data Dasar | SIDANDA',
        ];
        return view('landing.pages.data_dasar', $data);
    }
}
