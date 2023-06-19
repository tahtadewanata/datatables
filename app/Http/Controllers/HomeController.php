<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Opd;


class HomeController extends Controller
{
    public function index()
    {
        // $all_opd = Opd::all();
        $all_opd = Opd::orderBy('id', 'desc')->paginate(12);
        return view('visitors.page.home', ['opd' => $all_opd], ['title' => 'TES JUDUl']);
    }

    public function show(string $id)
    {
        //get post by ID
        $detailgender = Opd::findOrFail($id);

        //render view with post
        return view('visitors.page.detailgender', compact('detailgender'), ['title' => 'SIDANDA - Detail Data Gender']);
    }
}
