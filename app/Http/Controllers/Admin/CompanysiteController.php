<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\CompanySite;
use App\Models\CompanyType;
use Illuminate\Http\Request;

class CompanysiteController extends Controller
{
    public function create(){
        
        $companytype = Company::all();
        
        return view('admin.companysites.companysite',compact('companytype'));
    }

    public function store(Request $request){
        
        // dd($request->all());
        $request->validate([
        'name' => 'required', 
        'company' => 'required', 
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
            'company' => $request->input('company'),
            'phone1' => $request->input('phone1'),
            'phone2' => $request->input('phone2'),
            'phone3' => $request->input('phone3'),
            'address' => $request->input('address'),    
            'image' => $imageName,
        );
        CompanySite::create($data);

        // $modelInstance = new Company(); 
        // $modelInstance->name = $request->input('name'); 
        // $modelInstance->website = $request->input('website'); 
        // $modelInstance->phone1 = $request->input('phone1');
        // $modelInstance->phone2 = $request->input('phone2');
        // $modelInstance->phone3 = $request->input('phone3');
        // $modelInstance->image = $imageName;
        // $modelInstance->address = $request->input('address');
        
        // $modelInstance->save();

        return redirect()->route('companysiteTable');
            // dd('ok');
       
    }

    public function index(){
        // $companycount  = Company::count();
        $companytable= CompanySite::get();
        return view('admin.companysites.companysitetable',['companytable'=>$companytable]);
    }
    public function destroy($id) { 
        $record = CompanySite::findOrFail($id); 
        $record->delete();
        return redirect()->route('companysiteTable');
    }
    public function edit($id) { 
        $companytype = Company::all();
        $record = CompanySite::findOrFail($id); 
        // dd('ok');
        return view('admin.companysites.companysiteEdit', compact('record','companytype')); 
        
    }

    public function update(Request $request, $id) { 
        $request->validate([
        'name' => 'required', 
        'company' => 'required', 
        'phone1' => 'required', 
        'phone2' => 'required', 
        'phone3' => 'required', 
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'address' => 'required', 
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        
        $company=CompanySite::findOrFail($id);
        $data = array(
            'name' => $request->input('name'),
            'company' => $request->input('company'),
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

        return redirect()->route('companysiteTable');
}
}
