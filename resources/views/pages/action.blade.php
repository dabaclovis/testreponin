@extends('layouts.main')

@section('content')
 {{-- name email phone number --}}
 <div class=" d-flex justify-content-center align-content-center">
    <div class="w3-center">
    <b>
      <div>Clovis Daba</div>
      <div>lnamefname@yahoo.com</div>
      <div>614-000-0000</div>
    </b>
    </div>
  </div>
 {{--end name email phone number --}}
{{-- linkedin github location --}}
  <div class=" d-flex justify-content-between w3-bottombar" >
    <div>
        <a href="" class="btn btn-primary">linkedin</a>
        <a href="" class="btn btn-primary">Github</a>
    </div>
    <div>
        Columbus OH,
    </div>
  </div>
{{-- end linkedin github location --}}
{{-- Skill Section --}}
<div class=" d-flex justify-content-center align-content-center">
    <h4><b>Skills</b></h4>
</div>

{{-- end Skill Section --}}
@endsection
