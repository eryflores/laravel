<?php

namespace App\Http\Controllers;

use App\Models\RegisterModel;
use Illuminate\Http\Request;

class RegisterController extends Controller
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

        $isInsert = RegisterModel::insert([
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
        $data = RegisterModel::all();
        return view('view', ['student' => $data]);
    }
    public function editdata($id)
    {
        $data = RegisterModel::find($id);
        return view('update', ['student' => $data]);
    }
    public function studentedit(Request $request, String $id)
    {
        $student = RegisterModel::find($id);
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
        $student = RegisterModel::find($id);
        $student->delete($student);

        if ($student) {
            echo "Successfully Delete";
        } else {
            echo "failed";
        }
    }
}
