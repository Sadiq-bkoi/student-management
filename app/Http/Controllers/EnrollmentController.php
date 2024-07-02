<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Http\Response;
use illuminate\Http\RedirectResponse;
use App\Models\Enrollment;
use Illuminate\view\View;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $Enrollments = Enrollment::all();
        return view('enrollments.index')->with('Enrollments', $Enrollments);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('enrollments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        $input = $request->all();
        Enrollment::create($input);
        return redirect('enrollments')->with('flash_message', 'Course Addedd!');  
    }

    /**
     * Display the specified resource.
     */
    public function show( $id): View
    {
        $Enrollments = Enrollment::find($id);
        return view('enrollments.show')->with('Enrollments', $Enrollments);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id) : View
    {
        $Enrollments = Enrollment::find($id);
        return view('enrollments.edit')->with('Enrollments', $Enrollments);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) : RedirectResponse
    {
        $Enrollments = Enrollment::find($id);
        $input = $request->all();
        $Enrollments->update($input);
        return redirect('enrollments')->with('flash_message', 'Course Updated!'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) : RedirectResponse
    {
        Enrollment::destroy($id);
        return redirect('enrollments')->with('flash_message', 'Course deleted!'); 
    }
}
