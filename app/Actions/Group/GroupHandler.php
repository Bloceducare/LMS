<?php

namespace App\Actions\Group;

class GroupHandler
{
    public static function createGroup($request)
    {
        return Group::create([
            'reference' => Str::ulid(),
            'group_number' => $request->group_number
        ]);
    }

    public static function groups()
    {
        return Group::all();
    }

    public static function assignStudentsGroup($request)
    {
        $user = User::where(['id' => $request->user_id, 'role' => 'STUDENT']);
        $user->update(['group_id' => $request->group_id]);
        return $user;
    }
}