@extends('index')

@section('title')
    Proceeding your data
@endsection

@section('form_consultation')
    Left sidebar
@endsection

@section('main_content')
    @if (!empty($_POST['name']) && !empty($_POST['phone']))
        <div>
            <h2 style="color: green">Thanks for your data</h2>
            <h3>Name: {{$obj1->name}}</h3>
            <h3>Phone: {{$obj1->phone}}</h3>
        </div>
    @else <div>
            <h2 style="color: red">Error: fields are empty!</h2>
        </div>
    @endif
@endsection
