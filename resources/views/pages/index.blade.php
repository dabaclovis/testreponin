@extends('layouts.main')


@section('content')
    <div class="container" id="tabs">
        <ul>
            <li><a href="#tab-1">Home</a></li>
            <li><a href="#tab-2">About</a></li>
            <li><a href="#tab-3">Contact</a></li>
            <li><a href="#tab-4">Policy</a></li>
        </ul>
        <div id="tab-1">home</div>
        <div id="tab-2">About</div>
        <div id="tab-3">Contact</div>
        <div id="tab-4">Policy</div>
    </div>

@endsection
