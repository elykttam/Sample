<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Inertia\Inertia;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    { 
        $students = Student::with([
            'subjects', 
            'registration',
        ])
            ->where('grades', '>=', $request->get('grades', 70))
            // ->where('first_name', 'ilike', 'K%')
            ->orderBy('first_name')
            ->limit(5)
            ->get();

        return Inertia::render('Students/Index', [
            'students' => $students,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'birthdate' => ['required', 'date:Y-m-d'],
            'address_1' => 'required',
        ]);

        $student = Student::create($request->only([
            'first_name',
            'middle_name',
            'last_name',
            'birthdate',
            'address_1',
            'address_2',
            'zipcode',
            'province',
            'city',
        ]));

        return $student;
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return $student;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('students.edit', [
            'student' => $student
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'birthdate' => ['required', 'date:Y-m-d'],
            'address_1' => 'required',
        ]);

        $student->update($request->only([
            'first_name',
            'middle_name',
            'last_name',
            'birthdate',
            'address_1',
            'address_2',
            'zipcode',
            'province',
            'city',
        ]));

        return $student;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return response()->noContent();
    }
}
