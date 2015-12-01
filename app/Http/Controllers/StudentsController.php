<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Student;
use App\Http\Requests\StudentRequest;
use Illuminate\Http\JsonResponse;

class StudentsController extends Controller
{

    public function index(Request $request)
    {
    	$students = Student::latest()->get();
    	if ($request->ajax() || $request->wantsJson()) {
    		return new JsonResponse($students);
    	}
    	return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(StudentRequest $request)
    {
        $student = Student::create($request->all());
        
        if ($request->ajax() || $request->wantsJson()) {
        	return new JsonResponse($student);
        }
        
        flash()->success('salvato con successo!');
        
        return redirect('students');
    }

    public function show(Student $student)
    {
    	return view('students.show', compact('student'));
    }

    public function edit(Student $student)
    {
    	return view('students.edit', compact('student'));
    }

    public function update(StudentRequest $request, Student $student)
    {
    	$student->update($request->all());
    	
    	if ($request->ajax() || $request->wantsJson()) {
    		return new JsonResponse($student);
    	}
    	
    	flash()->success('aggiornato con successo!');
    	
    	return redirect('students');
    }

    public function destroy(StudentRequest $request, Student $student)
    {
    	$student->delete();
    	if ($request->ajax() || $request->wantsJson()) {
    		return new JsonResponse($student);
    	}
    	return redirect('students');
    }
}