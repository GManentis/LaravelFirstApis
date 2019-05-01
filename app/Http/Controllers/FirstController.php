<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\First;
use Illuminate\Http\Response;
use App\Http\Resources\FirstResource;

class FirstController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return FirstResource::collection(First::paginate(10));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $first = First::create($request->all());

        return response(
            [
                'success' => 'Data has been successfully stored!'

            ],Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(First $first)
    {
        return new FirstResource($first);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, First $first)
    {
        $first->update($request->all());
        return response([
            "response" => "the entry has been updated!",Response::HTTP_ACCEPTED
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(First $first)
    {
        $first->delete();
        return response(
            [
                "response" => "Entry has been deleted"
            ],Response::HTTP_NO_CONTENT);
    }
}
