<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PythonController extends Controller
{
    public function runScript()
    {
        $output = shell_exec('python /home/pi/sendDatabase.py');
        return redirect('/gps');
    }
}
