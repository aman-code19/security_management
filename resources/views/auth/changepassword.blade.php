@extends('layouts.app',['elementName'=> 'changePassword'])


@section('content')
<div class="app-content-header">
    <!--begin::Container-->
    <div class="container-fluid">
    <!--begin::Row-->
    <div class="row" >
      
        <div class="col-sm-6" ><h3 class="mb-0" >Change Password</h3></div>
      
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="{{route('adminDashboard')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Password</li>
        </ol>
        </div>
    </div>
    <!--end::Row-->
    </div>
    <!--end::Container-->
</div>
<!--end::App Content Header-->
<!--begin::App Content-->
<div class="app-content">
    <!--begin::Container-->
    <div class="container-fluid">
      <div class="row justify-content-center">
    <!--begin::Row-->
    <body class="login-page bg-body-secondary">
        <div class="login-box">
          <div class="login-logo">
            
          </div>
          <!-- /.login-logo -->
          <div class="card">
            <div class="card-body login-card-body">
              
              <form action="{{route('updatepassword')}}" method="post">
                @csrf
                
                
                  
              
                <div class="input-group mb-3">
                    
                    <input type="password" name="new_password" class="form-control" placeholder="New Password" />
                    <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                  </div>
                
                  @error('new_password')
                      <div class="text-danger">{{ $message }}</div> 
                  @enderror
                  <div class="input-group mb-3">
                    
                    <input type="password" name="retype_password" class="form-control" placeholder="Retype-Password" />
                    <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                  </div>
                
                  @error('retype_password')
                      <div class="text-danger">{{ $message }}</div> 
                  @enderror
                  <div class="row">
                    <!-- /.col -->
                     <div class="col-12 text-center">
                         <button type="submit" class="btn btn-primary">Change Password</button>
                      
                     </div>
                     <!-- /.col -->
                   </div>
                  </div>
    <!--end::Row-->           
    <!-- /.row (main row) -->
    </div>
    <!--end::Container-->
</div>
</div>
@endSection
