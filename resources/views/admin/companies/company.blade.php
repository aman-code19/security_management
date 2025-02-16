@extends('layouts.app',['elementName'=> 'company'])
@section('content')
<div class="app-content-header">
    <!--begin::Container-->
    <div class="container-fluid">
    <!--begin::Row-->
    <div class="row">
        <div class="col-sm-6"><h3 class="mb-0">Add Company</h3></div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="{{route('adminDashboard')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('companyTable')}}">Company</a></li>
            <li class="breadcrumb-item active" aria-current="page">Company</li>
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
        <form action="submit" method="post" enctype="multipart/form-data">
          @csrf
          <div class="row">
           
            <div class="col-md-6 mb-3">
                <label for="name"> Company Name:</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Enter Company Name" />
                @error('name') 
                <div class="text-danger">{{ $message }}</div> 
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="website">Website:</label>
                <input type="text" id="website"name="website" class="form-control" placeholder="Enter  Website" />
                @error('website') 
                <div class="text-danger">{{ $message }}</div> 
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="phone1">Contact Person1:</label>
                <input type="text" id="phone1"name="phone1" class="form-control" placeholder="Enter phone" />
                @error('phone1') 
                <div class="text-danger">{{ $message }}</div> 
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="phone2">Contact Person2:</label>
                <input type="text" id="phone2"name="phone2" class="form-control" placeholder="Enter phone" />
                @error('phone2') 
                <div class="text-danger">{{ $message }}</div> 
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="phone3">Contact Person3:</label>
                <input type="text" id="phone3"name="phone3" class="form-control" placeholder="Enter phone" />
                @error('phone3') 
                <div class="text-danger">{{ $message }}</div> 
                @enderror
            </div>
            
            <div class="col-md-12 mb-3">
                <label for="image">Image:</label>
                <br>
                <label for="image">Choose an image:</label> 
                <input type="file" id="image" name="image" >
                @error('image') 
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