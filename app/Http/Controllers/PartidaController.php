<?php

namespace App\Http\Controllers;

use App\Models\Partida;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\PartidaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PartidaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $partidas = Partida::paginate();

        return view('partida.index', compact('partidas'))
            ->with('i', ($request->input('page', 1) - 1) * $partidas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $partida = new Partida();

        return view('partida.create', compact('partida'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PartidaRequest $request): RedirectResponse
    {
        Partida::create($request->validated());

        return Redirect::route('partidas.index')
            ->with('success', 'Partida created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $partida = Partida::find($id);

        return view('partida.show', compact('partida'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $partida = Partida::find($id);

        return view('partida.edit', compact('partida'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PartidaRequest $request, Partida $partida): RedirectResponse
    {
        $partida->update($request->validated());

        return Redirect::route('partidas.index')
            ->with('success', 'Partida updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Partida::find($id)->delete();

        return Redirect::route('partidas.index')
            ->with('success', 'Partida deleted successfully');
    }
}
