<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Http\Response;
use illuminate\Http\RedirectResponse;
use App\Models\Batch;
use App\Models\Course;
use Illuminate\view\View;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        // $Batches = Batch::with(['course'])->get();
        // dd($Batches->toArray());
        $Batches = Batch::all();
        return view('batches.index')->with('Batches', $Batches);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        $courses = Course::all();
        return view('batches.create')->with('courses', $courses);

        // $courses = Course::pluck('name', 'id');
        // return view('batches.create', compact('courses'));

        //return view('batches.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        $input = $request->all();
        Batch::create($input);
        return redirect('batches')->with('flash_message', 'Batch Addedd!');  
    }

    /**
     * Display the specified resource.
     */
    public function show( $id): View
    {
        $Batches = Batch::find($id);
        return view('batches.show')->with('Batches', $Batches);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id) : View
    {
        $Batches = Batch::find($id);
        return view('batches.edit')->with('Batches', $Batches);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) : RedirectResponse
    {
        $Batches = Batch::find($id);
        $input = $request->all();
        $Batches->update($input);
        return redirect('batches')->with('flash_message', 'Batch Updated!'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) : RedirectResponse
    {
        Batch::destroy($id);
        return redirect('batches')->with('flash_message', 'Batch deleted!'); 
    }
}
