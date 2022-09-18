<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Serie;

class SerieController extends Controller
{
    public function index()
    {
        $series = Serie::all();
        return view('series.index', ['series' => $series]);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        Serie::create([
            'name' => $request->name,
        ]);
        return redirect()->route('series.index');
    }

}
