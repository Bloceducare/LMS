<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Actions\Notification\NotificationHandler;

class StudentController extends Controller
{
    public function recordings(){
        
    }

    public function curriculum(){

    }

    public function resources(){

    }

    public function groupMembers(){

    }

    public function notifications(){
        return NotificationHandler::notifications();
    }
}
