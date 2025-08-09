<?php

namespace App\Http\Controllers;

use App\Models\planing;
use Illuminate\Http\Request;

class UpdateStatusController extends Controller
{

    public function update(Request $request , $id)
    {

       $status = Planing::findOrFail($id);

       $status->status  = $request->status;
       $status->save();

     return redirect()->route('dashboard');

    }
}
