<?php
namespace App\Actions\Resource;

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
}