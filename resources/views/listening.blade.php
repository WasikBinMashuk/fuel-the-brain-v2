@extends('layouts.frontend')

@section('frontend')
        <div class="service-section m-2 pt-2 pl-3 border border-secondary">
            <h4>Part 3: Listening test</h4>
            <div class="text-right pr-3">
                <div class="timer " id="ten-countdown"></div>
            </div>
            <p>Listen carefully and ans the following questions</p>
            
            
        </div>
        
        <div class="service-section m-2 pt-2 pl-3 border border-secondary">
            <p>Play the audio and listen carefully</p>
            {{-- <p class="font-weight-bold">-------Audio Player will be here--------</p> --}}
            {{-- <audio controls src="{{ asset('audio/sample.mp3') }}"></audio> --}}
            <audio controls>
                <source src="/audio/sample.mp3" type="audio/mpeg"> 
            </audio>
            <video controls src="{{ asset('audio/video (2160p).mp4') }}"></video>
        </div>

        <div class="service-section m-2 pt-2 pl-3 border border-secondary">
            <p class="font-weight-bold">----QUESTIONS will be here----</p>
            <p class="font-weight-bold">----QUESTIONS will be here----</p>
            <p class="font-weight-bold">----QUESTIONS will be here----</p>
        </div>

        {{-- <label for="textarea">Start writing from here:</label>
        <!-- Textarea 8 rows height -->
        <div class="form-outline m-2 border border-dark">
            <textarea class="form-control" id="textarea" rows="8"></textarea>
            
        </div> --}}

        

        <div class=" m-2 pt-2 pl-3 text-right">
            {{-- <button type="button" class="btn btn-success btn-lg">Submit and next page</button> --}}
            <a href="speaking" class="btn btn-success btn-lg">Submit and next page</a>
        </div>

  



{{-- TIMER SCRIPT --}}
<script>
    function countdown( elementName, minutes, seconds )
        {
            var element, endTime, hours, mins, msLeft, time;

            function twoDigits( n )
            {
                return (n <= 9 ? "0" + n : n);
            }

            function updateTimer()
            {
                msLeft = endTime - (+new Date);
                if ( msLeft < 1000 ) {
                    //element.innerHTML = "Time is up!";
                    window.location.replace("http://127.0.0.1:8000/student");
                } else {
                    time = new Date( msLeft );
                    hours = time.getUTCHours();
                    mins = time.getUTCMinutes();
                    element.innerHTML = (hours ? hours + ':' + twoDigits( mins ) : mins) + ':' + twoDigits( time.getUTCSeconds() );
                    setTimeout( updateTimer, time.getUTCMilliseconds() + 500 );
                }
            }

            element = document.getElementById( elementName );
            endTime = (+new Date) + 1000 * (60*minutes + seconds) + 500;
            updateTimer();
        }

        countdown( "ten-countdown", 10, 0 );
</script>

@endsection