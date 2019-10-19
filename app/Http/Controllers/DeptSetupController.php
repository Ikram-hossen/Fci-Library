<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
class DeptSetupController extends Controller
{
    public function index(){
        $department = Department::orderBy('id','asc')->get();
        return view('department.department-setup',compact('department'));       
    }
    public function create(){
        return view('department.department-setup');
    }
    public function store(Request $request){
        $request->validate([
            'department_name' => 'required|max:150',
        ]);

        $department = new Department;
        $department->department_name = $request->department_name;
        $department->save();

         session()->flash('success', 'New Department Added successfully..!!');
        return redirect()->route("admin.department.department-setup");
    }
    public function edit($id){
        $department = Department::find($id);
        return view('department.edit',compact('department'));
    }
    public function update(Request $request, $id){
        $request->validate([
            'department_name' => 'required|max:150',
        ]);

        $department = Department::find($id);
        $department->department_name = $request->department_name;
        $department->save();

        // session()->flash('success', 'Department Updated successfully..!!');
        return redirect()->route("admin.department.department-setup")->with('success', 'Department Updated successfully..!!');
    }

    public function delete($id){
        $department = Department::find($id);
        if(!is_null('$department')){
            $department->delete();
        }
        return back()->with('success', 'Department deleted successfully..!!');
    }
}
