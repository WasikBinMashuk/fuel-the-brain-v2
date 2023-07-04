@extends('layouts.frontend')

@section('frontend')
<div class="service-section m-2 pt-2 pl-3 border border-secondary">
    <h4>Part 2: Writing test</h4>
    <p>Time limit 45 minutes. Word limit 150</p>
</div>
<div class="service-section m-2 pt-2 pl-3 border border-secondary">
    <p>Write about the following topic</p>
    <p class="font-weight-bold">
        @foreach ($topic as $i)
            {{-- {{ $i->id.'.' }} --}}
            {{ $i->topic_name }}
            
        @endforeach
        
    </p>
</div>

<div class=" m-2  ">
    <form action="{{ route('writingAns.submit') }}" method="POST">
        @csrf
        <input type="hidden" name="writing_question_id" value="@foreach($topic as $i){{ $i->id }}@endforeach">

        <label for="textarea">Start writing from here:</label>
        <div class="form-outline  border border-dark bg-light">
            {{-- <textarea class="form-control" id="textarea" rows="10"></textarea> --}}
       
            <textarea class="form-control" name="answers" id="textarea" rows="10" placeholder='Enter answer...' maxlength='1000' minlength='50'></textarea>
        </div>
        <div class="text-right">
            <button type="submit" class="btn btn-success btn-lg m-2 pt-2 pl-3">Submit and next page</button>
        </div>
        
    </form>
    
</div>




@endsection