<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actions\Task\TaskHandler;
use App\Actions\User\UserHandler;
use App\Actions\Track\TrackHandler;
use App\Actions\Cohort\CohortHandler;

class SharedController extends Controller
{
    public function users(){
        return UserHandler::users();
    }

    public function cohorts(){
        return CohortHandler::cohorts();
    }

    public function tracks(){
        return TrackHandler::tracks();
    }

    public function tasks(){
        return TaskHandler::tasks();
    }
}
