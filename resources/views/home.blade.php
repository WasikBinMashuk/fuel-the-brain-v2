@extends('layouts.frontend')

@section('frontend')
<div class="container d-flex justify-content-center">
    <div class="">
        <img src="{{ asset('img/student.jpg') }}" alt="logo">
    </div>
    
    
    
</div>
<div class=" m-4 pt-2 pl-3 text-center">
    <a href="reading" class="btn btn-success btn-lg" style="width: 400px">Start Test</a>
    
</div>
<div class=" m-4 pt-2 pl-3 text-center">
    
    <a href="ranking" class="btn btn-outline-info btn-lg " style="width: 250px">Ranks</a>
</div>
@endsection
