@extends('layouts.app')

@section('title','Tambah Admin')

@section('page-title','Tambah Admin')

@section('dashboard-content')

<form action="{{URL('admin')}}" method="POST">
    {{ csrf_field() }}
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" class="form-control" id="first_name" placeholder="First Name">
        </div>
        <div class="form-group col-md-6">
            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last Name">
        </div>
    </div>
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username" class="form-control" id="username" placeholder="Username">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="Email">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
    
@endsection
