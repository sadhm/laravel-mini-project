<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\frontmodels\Concat;
use Illuminate\Http\Request;
use Mockery\Exception;

class ConcatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $concat = new Concat();
        try {
            $concat->create($request->all());
        }catch (Exception $exception){

            return redirect(route('home'))->with('warning', $exception->getCode());
        }
        return redirect(route('home'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\concat  $concat
     * @return \Illuminate\Http\Response
     */
    public function show(concat $concat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\concat  $concat
     * @return \Illuminate\Http\Response
     */
    public function edit(concat $concat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\concat  $concat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, concat $concat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\concat  $concat
     * @return \Illuminate\Http\Response
     */
    public function destroy(concat $concat)
    {
        //
    }
}
