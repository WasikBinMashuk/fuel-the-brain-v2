@extends('layouts.frontend')

@section('frontend')
    
    <div class="card border-0">
        <div class="card-body">
          <div class="row">
            <div class="col">
              <h2>Writing Ques insert</h2>
            </div>

            @if (Session::has('msg'))
            <br>
            <br>
            <br>
            <div class="row">
              <div class="card-body">
                <div class="alert alert-success" role="alert">
                  {{ Session::get('msg') }}
                </div>
              </div>
            </div>
            <br>
            @endif
            
            <div class="mt-5">
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <div class="card">
                            <div class="card-header">
                                Insert a question
                            </div>
                            <div class="card-body">
                                <form action="{{ route('writingInsert.store') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="ques" class="form-label">Question</label>
                                        <input type="text" class="form-control" id="ques" value="" name="topic_name">
                                        @error('topic_name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
    
                                      </div>
                                      <div class="d-grid mb-2">
                                        <input type="submit" class="btn btn-primary" value="Insert">
                                      </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
    </div>
@endsection