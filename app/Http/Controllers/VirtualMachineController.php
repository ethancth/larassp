<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VirtualMachine;
class VirtualMachineController extends Controller
{
    public function show(\App\Models\VirtualMachine $vm)
    {
        return view('pages.show', compact('vm'));
    }
}
