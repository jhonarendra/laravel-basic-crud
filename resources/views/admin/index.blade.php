@extends('layouts.app')

@section('title','Admin')

@section('page-title','Admin')

@section('dashboard-content')
    <a href="admin/create" class="btn btn-primary">
        Tambah
    </a>
    <table class="table">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        @foreach($admins as $admin)
        <tr>
            <td>{{$admin->first_name}}</td>
            <td>{{$admin->last_name}}</td>
            <td>{{$admin->username}}</td>
            <td>{{$admin->email}}</td>
            <td>
                <a href="{{URL('admin/'.$admin->id.'/edit')}}" class="btn btn-success">
                    <i class="fa fa-pencil"></i>
                </a>

                <form action="{{URL('admin/'.$admin->id)}}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE')}}

                    <button type="submit" class="btn btn-danger">
                        <i class="fa fa-trash"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
@endsection
