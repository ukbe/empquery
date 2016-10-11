<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

use App\Http\Requests;

class WelcomeController extends Controller
{

    public function index()
    {
        $employees = Employee::whereDate('birth_date', '=', '1965-02-01')
            ->whereDate('hire_date', '>', '1990-01-01')
            ->where('gender', '=', 'm')
            ->orderBy('first_name', 'asc')
            ->orderBy('last_name', 'asc')->get();

        return view('welcome', compact('employees'));

    }
}
