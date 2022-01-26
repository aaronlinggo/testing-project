<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Http\Requests\StoreblogRequest;
use Illuminate\Database\QueryException;
use App\Http\Requests\UpdateblogRequest;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = blog::orderBy('created_at', 'DESC')->get();

        $response = [
            'message'   =>  'List Post order by time',
            'data'      =>  $blog
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
     * @param  \App\Http\Requests\StoreblogRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreblogRequest $request)
    {
        $validator = Validator::make($request->all(), [
            'title'     => ['required'],
            'desc'    => ['required'],
            'posted_by'      => ['required']
        ]);

        if ($validator->fails()){
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $blog = blog::create($request->all());

            $response = [
                'message'   => 'Post created',
                'data'      => $blog
            ];

            return response()->json($response, Response::HTTP_CREATED);
        } catch (QueryException $e) {
            return response()->json([
                'message'   => 'Failed ' . $e->errorInfo,
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = blog::findOrFail($id);

        $response = [
            'message'   => 'Detail of Post resource',
            'data'      => $blog
        ];

        return response()->json($response, Response::HTTP_OK);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(blog $blog)
    {
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateblogRequest  $request
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog = blog::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'title'     => ['required'],
            'desc'    => ['required']
        ]);

        if ($validator->fails()){
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $blog->update($request->all());

            $response = [
                'message'   => 'Post Updated',
                'data'      => $blog
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
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(blog $blog)
    {
        abort(404);
    }
}
