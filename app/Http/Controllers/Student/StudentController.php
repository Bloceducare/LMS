<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Actions\Task\TaskHandler;
use App\Actions\Group\GroupHandler;
use App\Http\Controllers\Controller;
use App\Actions\Module\ModuleHandler;
use App\Actions\Resource\ResourceHandler;
use App\Actions\Recording\RecordingHandler;
use App\Actions\Notification\NotificationHandler;

class StudentController extends Controller
{
    public function recordings(){
        return RecordingHandler::studentRecordings();
    }

    public function curriculum(){
        return ModuleHandler::studentModules();
    }

    public function resources(){
        return ResourceHandler::resources();
    }

    public function groupMembers(){
        return GroupHandler::groupMembers();
    }

    public function notifications(){
        return NotificationHandler::notifications();
    }

    public function tasks(){
        return TaskHandler::studentTasks();
    }
}
