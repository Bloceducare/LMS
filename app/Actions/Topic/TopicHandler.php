<?php
namespace App\Actions\Topic;

use App\Models\Topic;
use Illuminate\Support\Str;

class TopicHandler
{
    public static function createTopic($request)
    {
        return Topic::create([
            'reference' => Str::ulid(),
            'title' => $request->title,
            'description' => $request->description,
            'module_id' => $request->module_id
        ]);
    }

    public static function topics()
    {
        return Topic::all();
    }
}