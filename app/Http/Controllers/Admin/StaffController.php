<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use App\Models\User;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function create(){
        return view('admin.staff.form');
    }

    public function store(Request $request){
        
        // dd($request->all());
        $request->validate([
        'name' => 'required', 
        'email' => 'required', 
        'phone' => ['required', 'regex:/^(\+\d{1,3}[- ]?)?\d{10}$/'], 
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'address' => 'required', 
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $data = array(
            'role_id' => '2',
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'image' => $imageName,
            // 'phone' => $request->input('phone'),
            // 'image' => $imageName,
            // 'address' => $request->input('address'),
                
        );
       $user = User::create($data);
        $data = array(
            'user_id' => $user->id,
            'phone' => $request->input('phone'),
            
            'address' => $request->input('address'),
                
        );
        Staff::create($data);
        return redirect()->route('staffTable');
        // $modelInstance = new Placement(); 
        // $modelInstance->name = $request->input('name'); 
        // $modelInstance->website = $request->input('website'); 
        // $modelInstance->phone = $request->input('phone');
        // $modelInstance->logo = $imageName;
        // $modelInstance->address = $request->input('address');
        // $modelInstance->logo = $imageName;
        // $modelInstance->save();

        // return redirect()->route('companytable');
        //     // dd('ok');
       
    }
    public function index(){
        //
        $stafftable= Staff::get();
        return view('admin.staff.stafftable',['stafftable'=>$stafftable]);
    }
    public function destroy($id) { 
        $record = Staff::findOrFail($id); 
        $user = user::findOrFail($record->user_id); 
        $record->delete();
        $user->delete();
        return redirect()->route('staffTable');
    }
    public function edit($id) { 
        $record = Staff::findOrFail($id); 
        // dd('ok');
        return view('admin.staff.staffEdit', compact('record')); 
        
    }
    public function update(Request $request, $id) { 
        $request->validate([
            'name' => 'required', 
            'email' => 'required', 
            'phone' => ['required', 'regex:/^(\+\d{1,3}[- ]?)?\d{10}$/'], 
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'address' => 'required', 
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $staff=Staff::findOrFail($id);
        $user=user::findOrFail($staff->user_id);
        $data = array(
            'role_id' => '2',
            'name' => $request->input('name'),
            // 'email' => $request->input('email'),
            'image' => $imageName,

            
        );
        // $user->save();
        $user->update($data);
        
        $data = array(
            
            'address' => $request->input('address'),    
            'phone' => $request->input('phone'),  
        );
        // $staff->save();
        $staff->update($data);
        return redirect()->route('staffTable');
    }
}
