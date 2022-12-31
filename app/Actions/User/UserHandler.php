<?php

namespace App\Actions\User;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

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
            'password' => Hash::make($request->password),
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
}