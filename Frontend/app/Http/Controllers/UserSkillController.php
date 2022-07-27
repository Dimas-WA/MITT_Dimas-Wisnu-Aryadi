<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;

class UserSkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $response = Curl::to('http://localhost:8080/api/userskills')
        ->withHeader('Authorization: Bearer '.session('access_token'))
        ->asJson()
        ->get();
        return view('user_skills.index')->with('userskills', $response->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $responseSkillLevel = Curl::to('http://localhost:8080/api/skilllevels')
        ->withHeader('Authorization: Bearer '.session('access_token'))
        ->asJson()
        ->get();
        $responseSkill = Curl::to('http://localhost:8080/api/skills')
        ->withHeader('Authorization: Bearer '.session('access_token'))
        ->asJson()
        ->get();

        return view('user_skills.create')
        ->with('skills', $responseSkill->data)
        ->with('skill_levels', $responseSkillLevel->data);
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
        // dd($request->all());
        $response = Curl::to('http://localhost:8080/api/userskills')
        ->withHeader('Authorization: Bearer '.session('access_token'))
        ->withData( array( 'skill_id' => $request->skill_name, 'skill_level_id' => $request->skill_level ) )
        ->asJson()
        ->post();

        return redirect(route('userskills.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
