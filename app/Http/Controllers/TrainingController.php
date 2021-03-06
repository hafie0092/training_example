<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Training;

class TrainingController extends Controller
{
    public function index()
    {
        $trainings = Training::all();

        return view('trainings.index', compact('trainings'));  
    }

    public function create()
    {
        return view('trainings.create');
    }

    public function store(Request $request)
    {
        $training =  new Training();
        $training->title = $request->title;
        $training->description = $request->description;
        $training->user_id = auth()->user()->id;
        $training->save();

        return redirect()->route('training:index');
    }
}
