<?php

namespace App\Http\Controllers\Mentor;

use Illuminate\Http\Request;
use App\Actions\Task\TaskHandler;
use App\Actions\Group\GroupHandler;
use App\Actions\Topic\TopicHandler;
use App\Http\Controllers\Controller;
use App\Actions\Module\ModuleHandler;
use App\Actions\Resource\ResourceHandler;
use App\Actions\Recording\RecordingHandler;
use App\Actions\Curriculum\CurriculumHandler;
use App\Actions\Notification\NotificationHandler;

class MentorController extends Controller
{
    public function createCurriculum(Request $request){
        $request->validate([
            'module_id' => ['required', 'numeric'],
            'cohort_id' => ['required', 'numeric'],
            'track_id' => ['required', 'numeric']
        ]);

        return CurriculumHandler::createCurriculum($request);
    }

    public function createModule(Request $request){
        $request->validate([
            'title' => ['required', 'string', 'unique:modules'],
            'track_id' => ['required', 'numeric']
        ]);

        return ModuleHandler::createModule($request);
    }

    public function createTopic(Request $request){
        $request->validate([
            'title' => ['required', 'string'],
            'module_id' => ['required', 'numeric']
        ]);

        return TopicHandler::createTopic($request);
    }

    public function createGroup(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'unique:groups'],
        ]);

        return GroupHandler::createGroup($request);
    }

    public function createTask(Request $request){
        $request->validate([
            'title' => ['required', 'string'],
            'description' => ['required', 'string'],
            'cohort_id' => ['required', 'numeric'],
            'track_id' => ['required', 'numeric']
        ]);

        return TaskHandler::createTask($request);
    }

    public function uploadRecording(Request $request){
        $request->validate([
            'recording_number' => ['required', 'numeric'],
            'title' => ['required', 'string'],
            'description' => ['required', 'string'],
            'link' => ['required', 'string'],
            'cohort_id' => ['required', 'numeric'],
            'track_id' => ['required', 'numeric']
        ]);

        return RecordingHandler::uploadRecording($request);
    }

    public function uploadResource(Request $request){
        $request->validate([
            'title' => ['required', 'string'],
            'link' => ['required', 'string'],
        ]);

        return ResourceHandler::uploadResources($request);
    }

    public function sendNotification(Request $request){
        $request->validate([
            'message' => ['required', 'string']
        ]);

        return NotificationHandler::createNotification($request);
    }

    public function studentGroups(){
        return GroupHandler::studentGroups();
    }
}
