<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $students = Student::orderBy('id','asc')->get();
        return view('student.show',compact('students'));
              
              
    }
    public function view($id)
    {
        $students = Student::find($id);
        return view("student.view",compact('students'));
    }
    public function create(){
        return view('student.create');
    }

    public function store(Request $request){
        $request->validate([
            'student_name' => 'required|max:150',
            'father_name' => 'required|max:150',
            'roll' => 'required',
            'registration' => 'required',
            'department' => 'required', 
            'shift' => 'required', 
            'year' => 'required', 
            'gender' => 'required', 
        ]);

        $stud = new Student;
        $stud->student_name = $request->student_name;
        $stud->father_name = $request->father_name;
        $stud->roll = $request->roll;
        $stud->registration = $request->registration;
        $stud->department = $request->department;
        $stud->shift = $request->shift;
        $stud->year = $request->year;
        $stud->gender = $request->gender;
        $stud->save();

         session()->flash('success', 'New Student Added successfully..!!');
        return redirect()->route("admin.student.create");
    }
    public function edit($id){

        $students = Student::find($id);
        return view("student.edit",compact('students'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'student_name' => 'required|max:150',
            'father_name' => 'required|max:150',
            'roll' => 'required',
            'registration' => 'required',
            'department' => 'required', 
            'shift' => 'required', 
            'year' => 'required', 
            'gender' => 'required', 
        ]);

        $stud = Student::find($id);
        $stud->student_name = $request->student_name;
        $stud->father_name = $request->father_name;
        $stud->roll = $request->roll;
        $stud->registration = $request->registration;
        $stud->department = $request->department;
        $stud->shift = $request->shift;
        $stud->year = $request->year;
        $stud->gender = $request->gender;
        $stud->save();

         session()->flash('success', 'Student Updated successfully..!!');
        return redirect()->route("admin.student.show");
    }
    public function delete($id){
       
        $students = Student::find($id);
        if(!is_null('$students')){
            $students->delete();
        }
        session()->flash('success', 'Student deleted successfully..!!');
        return back();
  }

}
