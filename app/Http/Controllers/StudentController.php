<?php

namespace App\Http\Controllers;

use App\Models\StudentModel;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('registration');
    }
    public function insertdata(Request $request)
    {
        $name = $request->input('name');
        $address = $request->input('address');
        $age = $request->input('age');
        $gender = $request->input('gender');
        $department = $request->input('department');
        $course = $request->input('course');

        $isInsert = StudentModel::insert([
            'name' => $name,
            'address' => $address,
            'age' => $age,
            'gender' => $gender,
            'department' => $department,
            'course' => $course

        ]);
        if ($isInsert) {
            echo "Successfully Added";
        } else {
            echo "failed";
        }
    }
    public function display()
    {
        $data = StudentModel::all();
        return view('view', ['student' => $data]);
    }
    public function editdata($id)
    {
        $data = StudentModel::find($id);
        return view('update', ['student' => $data]);
    }
    public function studentedit(Request $request, String $id)
    {
        $student = StudentModel::find($id);
        $input = $request->all();
        $student->update($input);

        if ($student) {
            echo "Successfully Updated";
        } else {
            echo "failed";
        }
    }
    public function studentdelete(Request $request, String $id)
    {
        $student = StudentModel::find($id);
        $student->delete($student);

        if ($student) {
            echo "Successfully Delete";
        } else {
            echo "failed";
        }
    }
}