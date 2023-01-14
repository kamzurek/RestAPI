<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePeopleRequest;
use App\Http\Controllers\Controller;
use App\Models\people;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(people::all(), 200);
    }

    /**
     * Show the form for creating a new resource.
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $people = people::create($request->all());

        return response()->json($people, 201);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\people  $people
     * @return \Illuminate\Http\Response
     */
    public function read(people $people)
    {
        return response()->json($people, 200);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\people  $people
     * @param int $id
     * @param string $name
     * @param string $surname
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, people $people, int $id, string $name, string $surname)
    {
        $people = people::find($id);
        $people->update(['name'=>$name, 'surname'=>$surname]);
        return response($people, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\people  $people
     * @return \Illuminate\Http\Response
     */
    public function delete(people $people)
    {
        $people->delete();

        return response()->json(null, 204);
    }
}
