
@extends('layouts.app',['elementName'=> 'security'])

@section('content')
<div class="app-content-header">
    <!--begin::Container-->
    <div class="container-fluid">
    <!--begin::Row-->
    <div class="row">
        <div class="col-sm-6"><h3 class="mb-0">Add Security</h3></div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="{{route('adminDashboard')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('securityTable')}}">Security</a></li>
            <li class="breadcrumb-item active" aria-current="page">security</li>
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
    <!--begin::Row-->
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body">
        <form action="securitysubmit" method="post" enctype="multipart/form-data">
          @csrf
          <div class="row">
         
            <div class="col-md-6 mb-3">
              <label for="name">Name:</label>
              <input type="text" id="name" name="name" class="form-control" placeholder="Enter Name" />
              @error('name') 
              <div class="text-danger">{{ $message }}</div> 
              @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="email">Email:</label>
                <input type="email" name="email" class="form-control" placeholder="Email" />
                <div class="input-group-text"></div>
            </div>
              @error('email') 
              <div class="text-danger">{{ $message }}</div> 
              @enderror
            <div class="col-md-6 mb-3">
              <label for="phone">Phone:</label>
              <input type="text" id="phone"name="phone" class="form-control" placeholder="Enter phone" />
              @error('phone') 
              <div class="text-danger">{{ $message }}</div> 
              @enderror
            </div>
            
            <div class="col-md-12 mb-3">
                <label for="address"> Address:</label>
                <textarea id="address" class="form-control" name="address" rows="4" cols="50" ></textarea>
                @error('address') 
                <div class="text-danger">{{ $message }}</div> 
                @enderror
            </div>
            <div class="col-md-12 mb-3">
                <label for="image">Photo:</label>
                <br>
                <label for="image">Choose an image:</label> 
                <input type="file" id="image" name="image" >
                @error('image') 
                <div class="text-danger">{{ $message }}</div> 
                @enderror
            </div>
            
            
            

          </div>
          
        
          <!--begin::Row-->
          <div class="row">
           <!-- /.col -->
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Submit</button>
             
            </div>
            <!-- /.col -->
          </div>
          <!--end::Row-->
        </form>
       
      </div>
      <!-- /.login-card-body -->
    </div>
    <!--end::Row-->           
    <!-- /.row (main row) -->
    </div>
    <!--end::Container-->
</div>
@endSection