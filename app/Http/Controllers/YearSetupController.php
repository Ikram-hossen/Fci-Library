<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Year;
class YearSetupController extends Controller
{
    public function index(){
        $year = Year::orderBy('id','asc')->get();
        return view('year.year-setup',compact('year'));       
    }
    public function create(){
        return view('year.year-setup');
    }
    public function store(Request $request){
        $request->validate([
            'year_name' => 'required|max:150',
        ]);

        $year = new Year;
        $year->year_name = $request->year_name;
        $year->save();

         session()->flash('success', 'New Year Added successfully..!!');
        return redirect()->route("admin.year.year-setup");
    }
    public function edit($id){
        $year = Year::find($id);
        return view('year.edit',compact('year'));
    }
    public function update(Request $request, $id){
        $request->validate([
            'year_name' => 'required|max:150',
        ]);

        $year = Year::find($id);
        $year->year_name = $request->year_name;
        $year->save();

        // session()->flash('success', 'Year Updated successfully..!!');
        return redirect()->route("admin.year.year-setup")->with('success', 'Year Updated successfully..!!');
    }

    public function delete($id){
        $year = Year::find($id);
        if(!is_null('$year')){
            $year->delete();
        }
        return back()->with('success', 'Year deleted successfully..!!');
    }
}
