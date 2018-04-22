@extends('layouts.app')

@section('title','Edit Lecture')

@section('page-title','Edit Lecture')

@section('dashboard-content')

<form action="{{URL('lecture/'.$lectures->nip)}}" method="POST">
    {{ csrf_field() }}
    {{ method_field('PATCH')}}
    <div class="form-group">
        <label for="name">Nama</label>
        <input type="text" name="name" class="form-control" id="name" value="{{$lectures->name}}">
    </div>
    <div class="form-group">
        <label for="age">Umur</label>
        <input type="text" name="age" class="form-control" id="age" value="{{$lectures->age}}">
    </div>
    <div class="form-group">
        <label for="date_of_birth">Tanggal Lahir</label>
        <input type="date" name="date_of_birth" class="form-control" id="date_of_birth" value="{{$lectures->date_of_birth}}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
    
@endsection
