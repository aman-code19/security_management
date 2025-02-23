<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Security;
use App\Models\SecurityGuard;
use App\Models\User;
use Illuminate\Http\Request;

class SecurityController extends Controller
{
    public function create(){
        return view('admin.security.form');
    }

    public function store(Request $request){
        
        // dd($request->all());
        $request->validate([
        'name' => 'required', 
        'email' => 'required|email|unique:users,email',
        'phone' => ['required', 'regex:/^(\+\d{1,3}[- ]?)?\d{10}$/'], 
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'address' => 'required', 
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $data = array(
            'role_id' => '3',
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'image' => $imageName,  
        );
        $user = User::create($data);
        $data = array(
            'user_id' => $user->id,
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
                
        );
            
        SecurityGuard::create($data);
        return redirect()->route('securityTable');
       
       
    }
    public function index(){
        // $users = User::get();
        $securitytable= SecurityGuard::get();
        return view('admin.security.securitytable',['securitytable'=>$securitytable]);
        // return view('admin.security.securitytable',['securitytable'=>$securitytable,'users'=>$users]);
    }
    public function destroy($id) { 
        $record = SecurityGuard::findOrFail($id); 
        $user = user::findOrFail($record->user_id); 
        $record->delete();
        $user->delete();
        return redirect()->route('securityTable');
    }
    public function edit($id) { 
        $record = SecurityGuard::findOrFail($id);
       
        // $user = User::find($id);
        // dd('ok');
        return view('admin.security.securityEdit', compact('record')); 
        
    }
    public function update(Request $request, $id) { 
        $security=SecurityGuard::findOrFail($id);

        $request->validate([
            'name' => 'required', 
            'email' => 'required|email|unique:users,email,' . $security->user_id,
            'phone' => ['required', 'regex:/^(\+\d{1,3}[- ]?)?\d{10}$/'], 
            'image' => '|image|mimes:jpeg,png,jpg,gif|max:2048',
            'address' => 'required', 
        ]);
       
        $user=user::findOrFail($security->user_id);
        $data = array(
            'role_id' => '3',
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            // 'image' => $imageName,

            
        );
        if ($request->file('image')) {           
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('images'), $imageName);
                $data['image'] = $imageName;
            }
        // $user->save();
        $user->update($data);
        
        
        $data = array(
            
            'address' => $request->input('address'),    
            'phone' => $request->input('phone'),  
        );
        
        $security->update($data);
        return redirect()->route('securityTable');
    }
       
        
        // $security=SecurityGuard::findOrFail($id);
        // $data = array(
        //     'name' => $request->input('name'),
        //     'email' => $request->input('email'),
        //     'phone' => $request->input('phone'),
        //     'address' => $request->input('address'),    
        // );

        // if ($request->file('image')) {           
        //     $imageName = time() . '.' . $request->image->extension();
        //     $request->image->move(public_path('images'), $imageName);
        //     $data['image'] = $imageName;
        // }

        // $security->update($data);
        // return redirect()->route('securityTable');
    
}
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