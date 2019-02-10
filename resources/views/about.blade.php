@extends('layouts.app')

@section('title')
    About
@endsection

@section('content')
    <h1>About</h1>
@endsection

@section('sidebar')
    @parent
    <p>This is from about page</p>
@endsection