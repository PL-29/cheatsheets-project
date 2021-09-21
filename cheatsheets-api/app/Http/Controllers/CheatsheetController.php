<?php

namespace App\Http\Controllers;

use App\Models\Cheatsheet;
use Illuminate\Http\Request;

class CheatsheetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cheatsheets = Cheatsheet::all();
        return $cheatsheets->toJson(JSON_PRETTY_PRINT);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'code_snippet' => 'required|string',
            'explanation' => 'required|string',
            'public' => 'required|boolean',
            'author_id' => 'required|numeric',
            'technology_id' => 'required|numeric'
        ]);
        
        $cheatsheet = Cheatsheet::create($request->all());

        return response()->json($cheatsheet, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cheatsheet  $cheatsheet
     * @return \Illuminate\Http\Response
     */
    public function show(Cheatsheet $cheatsheet)
    {
        return $cheatsheet;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cheatsheet  $cheatsheet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cheatsheet $cheatsheet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cheatsheet  $cheatsheet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cheatsheet $cheatsheet)
    {
        //
    }
}
