<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shift;
class ShiftSetupController extends Controller
{
    public function index(){
        $shift = Shift::orderBy('id','asc')->get();
        return view('shift.shift-setup',compact('shift'));       
    }
    public function create(){
        return view('shift.shift-setup');
    }
    public function store(Request $request){
        $request->validate([
            'shift_name' => 'required|max:150',
        ]);

        $shift = new Shift;
        $shift->shift_name = $request->shift_name;
        $shift->save();

         session()->flash('success', 'New Shift Added successfully..!!');
        return redirect()->route("admin.shift.shift-setup");
    }
    public function edit($id){
        $shift = Shift::find($id);
        return view('shift.edit',compact('shift'));
    }
    public function update(Request $request, $id){
        $request->validate([
            'shift_name' => 'required|max:150',
        ]);

        $shift = Shift::find($id);
        $shift->shift_name = $request->shift_name;
        $shift->save();

        // session()->flash('success', 'Shift Updated successfully..!!');
        return redirect()->route("admin.shift.shift-setup")->with('success', 'Shift Updated successfully..!!');
    }

    public function delete($id){
        $shift = Shift::find($id);
        if(!is_null('$shift')){
            $shift->delete();
        }
        return back()->with('success', 'Shift deleted successfully..!!');
    }
}
