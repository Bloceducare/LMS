<?php
namespace App\Actions\Recording;

class RecordingHandler
{
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