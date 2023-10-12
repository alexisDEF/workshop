<?php

namespace App\Http\Controllers;

use App\Models\Escape;
use App\Models\User;
use Couchbase\RequestTracer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class EscapeController extends Controller
{
    private $pseudo;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($pseudo)
    {
        $this->pseudo = $pseudo;
        session(['pseudo' => $pseudo]);
        Config::set('pseudo', $pseudo);
        return view('index',['pseudo',$pseudo]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($timer)
    {
        $pseudo = session('pseudo');
        User::create([
            'pseudo' => $pseudo,
            'timer'=> $timer
        ]);
        return redirect('/');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Escape  $escape
     * @return \Illuminate\Http\Response
     */
    public function show(Escape $escape)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Escape  $escape
     * @return \Illuminate\Http\Response
     */
    public function edit(Escape $escape)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Escape  $escape
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Escape $escape)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Escape  $escape
     * @return \Illuminate\Http\Response
     */
    public function destroy(Escape $escape)
    {
        //
    }
}
