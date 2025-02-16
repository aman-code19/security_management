<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function create(){
        return view('admin.companies.company');
    }

    public function store(Request $request){
        
        // dd($request->all());
        $request->validate([
        'name' => 'required', 
        'website' => 'required', 
        'phone1' => ['required', 'regex:/^(\+\d{1,3}[- ]?)?\d{10}$/'], 
        'phone2' => ['required', 'regex:/^(\+\d{1,3}[- ]?)?\d{10}$/'], 
        'phone3' => ['required', 'regex:/^(\+\d{1,3}[- ]?)?\d{10}$/'], 
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'address' => 'required', 
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $data = array(
            'name' => $request->input('name'),
            'website' => $request->input('website'),
            'phone1' => $request->input('phone1'),
            'phone2' => $request->input('phone2'),
            'phone3' => $request->input('phone3'),
               
            'address' => $request->input('address'),    
               
            'image' => $imageName,
        );
        Company::create($data);

        // $modelInstance = new Company(); 
        // $modelInstance->name = $request->input('name'); 
        // $modelInstance->website = $request->input('website'); 
        // $modelInstance->phone1 = $request->input('phone1');
        // $modelInstance->phone2 = $request->input('phone2');
        // $modelInstance->phone3 = $request->input('phone3');
        // $modelInstance->image = $imageName;
        // $modelInstance->address = $request->input('address');
        
        // $modelInstance->save();

        return redirect()->route('companyTable');
            // dd('ok');
       
    }

    public function index(){
        // $companycount  = Company::count();
        $companytable= Company::get();
        return view('admin.companies.companytable',['companytable'=>$companytable]);
    }
    public function destroy($id) { 
        $record = Company::findOrFail($id); 
        $record->delete();
        return redirect()->route('companyTable');
    }
    public function edit($id) { 
        $record = company::findOrFail($id); 
        // dd('ok');
        return view('admin.companies.companyEdit', compact('record')); 
        
    }

    public function update(Request $request, $id) { 
        $request->validate([
        'name' => 'required', 
        'website' => 'required', 
        'phone1' => 'required', 
        'phone2' => 'required', 
        'phone3' => 'required', 
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'address' => 'required', 
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        $company=Company::findOrFail($id);
        $data = array(
            'name' => $request->input('name'),
            'website' => $request->input('website'),
            'phone1' => $request->input('phone1'),
            'phone2' => $request->input('phone2'),
            'phone3' => $request->input('phone3'),
            'image' => $imageName,  
            'address' => $request->input('address'),    
                
        );
        $company->update($data);
        // $modelInstance = Company::findOrFail($id); 
        // $modelInstance->name = $request->input('name'); 
        // $modelInstance->website = $request->input('website'); 
        // $modelInstance->phone1 = $request->input('phone1');
        // $modelInstance->phone2 = $request->input('phone2');
        // $modelInstance->phone3 = $request->input('phone3');
        // $modelInstance->image = $imageName;
        // $modelInstance->address = $request->input('address');
      
        // $modelInstance->save();

        return redirect()->route('companyTable');
}

}
