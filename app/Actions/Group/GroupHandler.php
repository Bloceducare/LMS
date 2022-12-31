<?php

namespace App\Actions\Group;

use App\Models\User;
use App\Models\Group;
use Illuminate\Support\Str;

class GroupHandler
{
    public static function createGroup($request)
    {
        return Group::create([
            'reference' => Str::ulid(),
            'name' => strtolower($request->name)
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