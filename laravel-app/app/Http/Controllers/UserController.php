<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class UserController extends Controller
{
    public function sayHi(): View
    {
        return view('greeting')
            ->with('name', 'Darani Shri')
            ->with('occupation', 'Astronaut');
    }
}