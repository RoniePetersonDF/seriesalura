<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Serie;

class SerieController extends Controller
{
    public function index()
    {
        $series = Serie::query()->orderBy('name')->get();
        return view('series.index', ['series' => $series]);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        Serie::create($request->all());
        return to_route('series.index');
    }

    public function destroy(Request $request, $id)
    {
        $serie = Serie::findOrFail($id);
        $serie->delete();

        return to_route('series.index');
    }

}
