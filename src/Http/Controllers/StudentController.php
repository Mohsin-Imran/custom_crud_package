<?php

namespace MohsinCrud\Crud\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use MohsinCrud\Crud\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('create::index', get_defined_vars());
    }
    public function create()
    {
        return view('create::create');
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $student = new Student;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . '.' . $image->getClientOriginalExtension();
            $uploadPath = public_path('students');
            $image->move($uploadPath, $fileName);
            $student->image = $fileName;  // Changed from $post to $student
        }

        $student->name = $request->name;
        $student->email = $request->email;
        $student->country = $request->country;
        $student->number = $request->number;
        $student->save();

        return redirect()->route('student.index')->with('success', 'Student added successfully.');
    }


    public function edit($id)
    {
        $student = Student::find($id);
        return view('create::edit', get_defined_vars());
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . '.' . $image->getClientOriginalExtension();
            $uploadPath = public_path('students');
            $image->move($uploadPath, $fileName);
            $student->image = $fileName;  // Changed from $post to $student
        }

        $student->name = $request->name;
        $student->email = $request->email;
        $student->country = $request->country;
        $student->number = $request->number;
        $student->save();
        return redirect()->route('student.index')->with('success', 'Student updated successfully.');
    }

    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return back();
    }
}
