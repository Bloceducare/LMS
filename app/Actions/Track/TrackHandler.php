<?php
namespace App\Actions\Track;

class TrackHandler
{
    public static function assignStudentTrack($request)
    {
        $user = User::where(['id' => $request->user_id, 'role' => 'STUDENT']);
        $user->update(['track_id' => $request->track_id]);
        return $user;
    }

    public static function assignMentorTrack()
    {
        $mentor = User::where(['id' => $request->user_id, 'role' => 'MENTOR']);
        $mentor->update(['group_id' => $request->group_id]);
        return $mentor;
    }
}