<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ItemController extends Controller
{
    public function index()
    {
        return view('items.index');
    }

    public function getData(Request $request)
    {
        $items = Item::query();
        $data = Item::query();


        if ($request->ajax()) {
            return Datatables::of($data)
                ->addIndexColumn()
                ->make(true);
        }
    }
}
