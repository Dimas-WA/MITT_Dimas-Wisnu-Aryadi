<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\SkillLevel;
use App\Models\UserSkill;
use Illuminate\Http\Request;

use Auth;
use Validator;
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
        return response()
        ->json(['data' => UserSkill::all()]);
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
            'skill_id' => 'required',
            'skill_level_id' => 'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());       
        }

        $username = Auth::guard('sanctum')->user()->username;

        try {
            //code...
            $profile = Skill::where('id', $request->skill_id)->firstOrFail();
        } catch (\Exception $e) {
            return response()
                ->json(['message' => 'Skill Not Found'], 404);
        }
        try {
            //code...
            $profile = SkillLevel::where('id', $request->skill_level_id)->firstOrFail();
        } catch (\Exception $e) {
            return response()
                ->json(['message' => 'Skill Level Not Found'], 404);
        }
        
        $skill = UserSkill::create([
            'username' => $username,
            'skill_id' => $request->skill_id,
            'skill_level_id' => $request->skill_level_id,
        ]);

        return response()
            ->json(['message' => 'New Skill was added for '. $username]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserSkill  $userSkill
     * @return \Illuminate\Http\Response
     */
    public function show(UserSkill $userSkill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserSkill  $userSkill
     * @return \Illuminate\Http\Response
     */
    public function edit(UserSkill $userSkill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserSkill  $userSkill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserSkill $userskill)
    {
        
        $validator = Validator::make($request->all(),[
            'skill_id' => 'required',
            'skill_level_id' => 'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());       
        }

        $username = Auth::guard('sanctum')->user()->username;

        try {
            //code...
            $profile = Skill::where('id', $request->skill_id)->firstOrFail();
        } catch (\Exception $e) {
            return response()
                ->json(['message' => 'Skill Not Found'], 404);
        }
        try {
            //code...
            $profile = SkillLevel::where('id', $request->skill_level_id)->firstOrFail();
        } catch (\Exception $e) {
            return response()
                ->json(['message' => 'Skill Level Not Found'], 404);
        }
        $userskill->update([
            'skill_id' => $request->skill_id,
            'skill_level_id' => $request->skill_level_id,
        ]);

        return response()
            ->json(['message' => 'Skill '.$username.'was updated']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function by_user(Request $request, $username)
    {
        //
        // dd($username);
        $userSkills = UserSkill::where('username', $username)->get();

        return response()
            ->json(['data' => $userSkills]);

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserSkill  $userSkill
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserSkill $userskill)
    {
        //
        $userskill->delete();

        return response()
            ->json(['message' => 'Skill '.$userskill->username.' was delete successfully']);
    }
}
