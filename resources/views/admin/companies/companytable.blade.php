@extends('layouts.app',['elementName'=> 'company'])
@section('content')
<div class="app-content-header">
    <!--begin::Container-->
    <div class="container-fluid">
    <!--begin::Row-->
    <div class="row">
        <div class="col-sm-6"><h3 class="mb-0">Company Table</h3></div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="{{route('adminDashboard')}}">Home</a></li>
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
<div class="container mt-3">
<style> .right-align { float: right; } </style>
<a href="company" class="right-align">Add new</a>
  <table class="table  table-hover">
    <thead>
      <tr>
        <th>Photo</th>
        <th>Name</th>
        <th>Website</th>
        <th>Phone1</th>
        <th>phone2</th>
        <th>Phone3</th>
        <th>Address</th>
        <th>Action</th>
        
      

      </tr>
    </thead>
    <tbody>
    @foreach($companytable as $company)
    <tr>
        <td><img src="{{asset('images')}}/{{$company->image}}" class="user-image rounded-circle shadow" alt="User Image" width="100px" height="100px"
        /></td>
        {{-- src="{{asset('dist/assets/img/user2-160x160.jpg')}}" --}}
        {{-- <td><img src="{{ asset('images/' . $company->image) }}" width="100" ></td> --}}
        <td>{{$company->name}}</td>
        <td>{{$company->website}}</td>
        <td>{{$company->phone1}}</td>
        <td>{{$company->phone2}}</td>
        <td>{{$company->phone3}}</td>
        <td>{{$company->address}}</td>
       
        
    <td><a  href="{{ route('companyEdit', $company->id) }}" >  Edit</a>
    <td><a class="text-danger" href="{{ route('companyDelete',['id'=> $company->id]) }}" >  Delete</a>
        </td>
        

    </tr>
    @endforeach
   
    </tbody>
  </table>
</div>

@endSection

