<?php

namespace App\Actions\User;

class UserHandler
{
    public static function createUser($request)
    {
        return User:: create([
            'reference' => Str::ulid(),
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'role' => $request->role,
            'active' => true,
            'email' => $request->email,
            'password' => $request->password,
            'cohort_id' => $request->cohort_id,
            'track_id' => $request->track_id,
            'group_id' => $request->role == "STUDENT" ? $request->group_id : NULL,
            'country_id' => $request->country_id
        ]);
    }

    public static function users()
    {
        return User::all();
    }

    public static function assignRole($request)
    {
        $user = User::find($request->user_id);
        $user->update(['role' => $request->role]);
        return $user;

    }

    // Students

    public static function assignStudentTrack($request)
    {
        $user = User::where(['id' => $request->user_id, 'role' => 'STUDENT']);
        $user->update(['track_id' => $request->track_id]);
        return $user;
    }

    public static function assignStudentsGroup($request)
    {
        $user = User::where(['id' => $request->user_id, 'role' => 'STUDENT']);
        $user->update(['group_id' => $request->group_id]);
        return $user;
    }

    // Mentors

    public static function assignMentorTrack()
    {
        $mentor = User::where(['id' => $request->user_id, 'role' => 'MENTOR']);
        $mentor->update(['group_id' => $request->group_id]);
        return $mentor;
    }

    public static function uploadResources($request)
    {
        return Resource::create([
            'reference' => Str::ulid(),
            'title' => $request->title,
            'file' => $request->file,
            'link' => $request->link
        ]);
    }

    public static function assignIndividualTask()
    {

    }

    public static function assignGroupTask()
    {

    }

    public static function uploadRecording($request)
    {
        return Recording::create([
            'reference' => Str::ulid(),
            'recording_number' => $request->recording_number,
            'title' => $request->title,
            'description' => $request->description,
            'link' => $request->link,
            'cohort_id' => $request->cohort_id,
            'track_id' => $request->track_id
        ]);
    }
}