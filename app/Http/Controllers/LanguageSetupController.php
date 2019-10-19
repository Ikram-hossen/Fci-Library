<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Language;
class LanguageSetupController extends Controller
{
    public function index(){
        $language = Language::orderBy('id','asc')->get();
        return view('language.language-setup',compact('language'));       
    }
    public function create(){
        return view('language.language-setup');
    }
    public function store(Request $request){
        $request->validate([
            'language_name' => 'required|max:150',
        ]);

        $language = new Language;
        $language->language_name = $request->language_name;
        $language->save();

         session()->flash('success', 'New Language Added successfully..!!');
        return redirect()->route("admin.language.language-setup");
    }
    public function edit($id){
        $language = Language::find($id);
        return view('language.edit',compact('language'));
    }
    public function update(Request $request, $id){
        $request->validate([
            'language_name' => 'required|max:150',
        ]);

        $language = Language::find($id);
        $language->language_name = $request->language_name;
        $language->save();

        // session()->flash('success', 'Language Updated successfully..!!');
        return redirect()->route("admin.language.language-setup")->with('success', 'Language Updated successfully..!!');
    }

    public function delete($id){
        $language = Language::find($id);
        if(!is_null('$language')){
            $language->delete();
        }
        return back()->with('success', 'Language deleted successfully..!!');
    }
}
