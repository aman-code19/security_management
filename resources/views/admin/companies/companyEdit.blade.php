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
        <form action="{{ route('companyupdate', $record->id) }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="row">
           
            <div class="col-md-6 mb-3">
              <label for="name">Company Name:</label>
              <input type="text" id="name" name="name" class="form-control" placeholder="Enter Name" value="{{$record->name}}"/>
              @error('name') 
                <div class="text-danger">{{ $message }}</div> 
              @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="website">Website:</label>
                <input type="text" id="website"name="website" class="form-control" placeholder="Enter website" value="{{$record->website}}"/>
                @error('website') 
                  <div class="text-danger">{{ $message }}</div> 
                @enderror
              </div>
            <div class="col-md-6 mb-3">
              <label for="phone1">Phone:</label>
              <input type="text" id="phone1"name="phone1" class="form-control" placeholder="Enter phone" value="{{$record->phone1}}"/>
              @error('phone1') 
              <div class="text-danger">{{ $message }}</div> 
              @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="phone2">Phone:</label>
                <input type="text" id="phone2"name="phone2" class="form-control" placeholder="Enter phone" value="{{$record->phone2}}"/>
                @error('phone2') 
                  <div class="text-danger">{{ $message }}</div> 
                @enderror
              </div>
              <div class="col-md-6 mb-3">
                <label for="phone3">Phone:</label>
                <input type="text" id="phone3"name="phone3" class="form-control" placeholder="Enter phone" value="{{$record->phone3}}"/>
                @error('phone3') 
                  <div class="text-danger">{{ $message }}</div> 
                @enderror
              </div>
            
            <div class="col-md-12 mb-3">
                <label for="image">Image:</label>
                <br>
                <label for="image">Choose an image:</label> 
                <input type="file" id="image" name="image" >
                <img src="{{asset('images')}}/{{$record->image}}" class="user-image rounded-circle shadow" alt="User Image" width="100px" height="100px"
        />
                @error('image') 
                  <div class="text-danger">{{ $message }}</div> 
                @enderror
            <div class="col-md-12 mb-3">
              <label for="address"> Address:</label>
              <textarea id="address" class="form-control" name="address" rows="4" cols="50" >{{$record->address}}</textarea>
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