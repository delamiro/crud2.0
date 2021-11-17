
@include('layouts.master')

{{--<link href="{{ asset('css/styles.css') }}" rel="stylesheet">--}}
{{--<link href="resources/css/app.css" rel="stylesheet"/>--}}
{{--<link href="public/css/app.css" rel="stylesheet"/>--}}
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<link href="{{ asset('js/modal.js') }}" rel="script">
<script type="text/javascript" src="{{asset('js/modal.js') }}"></script>


{{--model--}}
<div class="text-center card-header"><h2>Uren Project IAgroup.app</h2>
    <button class="btn-success" id="myBtn">Voeg een datum en tijd toe!</button></div>

@include('pages.includes.urenmodel')
<br>
@foreach($weeknummer as $weeknummers)
    <div class="weeks">
       <h1 class="text-center"> Week: {{$weeknummers->weeknummer}}</h1>
        @foreach($uren as $uurtjes)
            @if($uurtjes->weeknummer == $weeknummers->weeknummer)
                <div class="week">
                    <div class="row m-2">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="text">Tijd</label>
                                <div>{{$uurtjes->time}}</div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label>Datum</label>
                                <div>{{$uurtjes->date}}</div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label>Description</label>
                                <div>{{$uurtjes->description}}</div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <form method="post" action="uren/{{$uurtjes->id}}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger float-right">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            @endif
        @endforeach
    </div>
@endforeach

<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function () {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>


