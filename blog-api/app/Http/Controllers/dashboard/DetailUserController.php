<?php

namespace App\Http\Controllers;

use App\Models\detail_user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\Storedetail_userRequest;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\Updatedetail_userRequest;

class DetailUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detail_user = detail_user::where('user_id', Auth::user()->id)->get();

        $response = [
            'message'   =>  'Detail User',
            'data'      =>  $detail_user,
            'name'      => Auth::user()->name
        ];

        return response()->json($response, Response::HTTP_OK);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storedetail_userRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storedetail_userRequest $request)
    {
        abort(404);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\detail_user  $detail_user
     * @return \Illuminate\Http\Response
     */
    public function show(detail_user $detail_user)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\detail_user  $detail_user
     * @return \Illuminate\Http\Response
     */
    public function edit(detail_user $detail_user)
    {
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatedetail_userRequest  $request
     * @param  \App\Models\detail_user  $detail_user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $detail_user = detail_user::where('user_id', Auth::user()->id)->get();

        $validator = Validator::make($request->all(), [
            'alamat'           => ['nullable', 'max:255'],
            'tanggal_lahir'    => ['nullable', 'date']
        ]);

        if ($validator->fails()){
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $detail_user->update($request->all());

            $response = [
                'message'   => 'Transaction Updated',
                'data'      => $detail_user,
                'name'      => Auth::user()->name
            ];

            return response()->json($response, Response::HTTP_OK);
        } catch (QueryException $e) {
            return response()->json([
                'message'   => 'Failed ' . $e->errorInfo,
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\detail_user  $detail_user
     * @return \Illuminate\Http\Response
     */
    public function destroy(detail_user $detail_user)
    {
        abort(404);
    }
}
