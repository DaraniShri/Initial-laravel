<?php

namespace App\Http\Controllers\Role;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Auth;
use Illuminate\Http\Request;
use App\Models\Role;

class DataController extends Controller
{
    public function getManager(){
        $manager = Auth::user()->where('role_id', Role::ROLE_MANAGER)->get();
        return \View::make("roles/manager/view")->with('managers',$manager);
    }

    public function getSupervisor(){
        $supervisor = Auth::user()->where('role_id', Role::ROLE_SUPERVISOR)->get();
        return \View::make("roles/supervisor/view")->with('supervisors',$supervisor);
    }

    public function getWorker(){
        $worker = Auth::user()->where('role_id', Role::ROLE_WORKER)->get();
        return \View::make("roles/worker/view")->with('workers',$worker);
    }

    public function logoutRole(Request $request){
        $request->session()->forget('roleEmail');
        return view('roles/login');
    }
}
