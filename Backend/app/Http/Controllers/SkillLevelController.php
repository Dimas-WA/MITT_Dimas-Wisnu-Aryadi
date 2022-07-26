<?php

namespace App\Http\Controllers;

use App\Models\SkillLevel;
use Illuminate\Http\Request;

use Validator;
class SkillLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()
            ->json(['data' => SkillLevel::all()]);
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
        $validator = Validator::make($request->all(),[
            'skillLevelName' => 'required|string|max:255',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());       
        }

        $skill = SkillLevel::create([
            'skillLevelName' => $request->skillLevelName,
        ]);

        return response()
            ->json(['message' => $request->skillLevelName.' was added sauccessfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SkillLevel  $skillLevel
     * @return \Illuminate\Http\Response
     */
    public function show(SkillLevel $skillLevel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SkillLevel  $skillLevel
     * @return \Illuminate\Http\Response
     */
    public function edit(SkillLevel $skillLevel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SkillLevel  $skillLevel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SkillLevel $skillLevel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SkillLevel  $skillLevel
     * @return \Illuminate\Http\Response
     */
    public function destroy(SkillLevel $skillLevel)
    {
        //
    }
}
