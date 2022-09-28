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
<hr>
<style>
    .ui-menu{
        width: 150px;
    }
</style>
<ul id="menu">
    {{-- <li class="ui-state-disabled"><div>Toys (n/a)</div></li> --}}
    <li><div>Books</div></li>
    <li><div>Clothing</div></li>
    <li><div>Electronics</div>
      <ul>
        <li class="ui-state-disabled"><div>Home Entertainment</div></li>
        <li><div>Car Hifi</div></li>
        <li><div>Utilities</div></li>
      </ul>
    </li>
    <li><div>Movies</div></li>
    <li><div>Music</div>
      <ul>
        <li><div>Rock</div>
          <ul>
            <li><div>Alternative</div></li>
            <li><div>Classic</div></li>
          </ul>
        </li>
        <li><div>Jazz</div>
          <ul>
            <li><div>Freejazz</div></li>
            <li><div>Big Band</div></li>
            <li><div>Modern</div></li>
          </ul>
        </li>
        <li><div>Pop</div></li>
      </ul>
    </li>
    <li class="ui-state-disabled"><div>Specials (n/a)</div></li>
@endsection
