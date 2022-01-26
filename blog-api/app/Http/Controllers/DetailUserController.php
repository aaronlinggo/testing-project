<?php

namespace App\Http\Controllers;

use App\Models\detail_user;
use App\Http\Requests\Storedetail_userRequest;
use App\Http\Requests\Updatedetail_userRequest;

class DetailUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
     * @param  \App\Http\Requests\Storedetail_userRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storedetail_userRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\detail_user  $detail_user
     * @return \Illuminate\Http\Response
     */
    public function show(detail_user $detail_user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\detail_user  $detail_user
     * @return \Illuminate\Http\Response
     */
    public function edit(detail_user $detail_user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatedetail_userRequest  $request
     * @param  \App\Models\detail_user  $detail_user
     * @return \Illuminate\Http\Response
     */
    public function update(Updatedetail_userRequest $request, detail_user $detail_user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\detail_user  $detail_user
     * @return \Illuminate\Http\Response
     */
    public function destroy(detail_user $detail_user)
    {
        //
    }
}
