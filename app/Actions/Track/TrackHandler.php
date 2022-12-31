<?php
namespace App\Actions\Track;

use App\Models\User;
use App\Models\Track;
use Illuminate\Support\Str;

class TrackHandler
{
    public static function createTrack($request)
    {
        return Track::create([
            'reference' => Str::ulid(),
            'name' => $request->name
        ]);
    }

    public static function tracks()
    {
        return Track::all();
    }

    public static function assignStudentTrack($request)
    {
        $user = User::where(['id' => $request->user_id, 'role' => 'STUDENT']);
        $user->update(['track_id' => $request->track_id]);
        return $user;
    }

    public static function assignMentorTrack($request)
    {
        $mentor = User::where(['id' => $request->user_id, 'role' => 'MENTOR']);
        $mentor->update(['group_id' => $request->group_id]);
        return $mentor;
    }
}