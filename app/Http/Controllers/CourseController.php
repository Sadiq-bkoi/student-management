<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Http\Response;
use illuminate\Http\RedirectResponse;
use App\Models\Course;
use Illuminate\view\View;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $Courses = Course::all();
        return view('courses.index')->with('Courses', $Courses);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        $input = $request->all();
        Course::create($input);
        return redirect('courses')->with('flash_message', 'Course Addedd!');  
    }

    /**
     * Display the specified resource.
     */
    public function show( $id): View
    {
        $Courses = Course::find($id);
        return view('courses.show')->with('Courses', $Courses);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id) : View
    {
        $Courses = Course::find($id);
        return view('courses.edit')->with('Courses', $Courses);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) : RedirectResponse
    {
        $Courses = Course::find($id);
        $input = $request->all();
        $Courses->update($input);
        return redirect('courses')->with('flash_message', 'Course Updated!'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) : RedirectResponse
    {
        Course::destroy($id);
        return redirect('courses')->with('flash_message', 'Course deleted!'); 
    }
}
