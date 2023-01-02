<?php
namespace App\Actions\Resource;

use App\Models\Resource;
use Illuminate\Support\Str;

class ResourceHandler
{
    public static function uploadResources($request)
    {
        return Resource::create([
            'reference' => Str::ulid(),
            'title' => $request->title,
            'file_path' => $request->file,
            'link' => $request->link
        ]);
    }

    public static function resources()
    {
        return Resource::paginate(8);
    }
}