@extends('index')

@section('title')
    Information about users
@endsection

@section('form_consultation')
    Nothing to see here<br><br>Left sidebar
@endsection

@section('main_content')
    <div style="height: 200px; width: 400px; background-color: #e0e0e0; line-height: 20px; text-align: center; font-family: 'Arial', serif;">
        <h3>Info about our users</h3>
        @foreach($obj->users as $u => $enter)
            {{ $u }} : {{ $enter }}<br>
        @endforeach
    </div>
@endsection
