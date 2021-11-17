<!-- The Modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <form method="post" action="uren">
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="text-center">weeknummer</label>
                        <select id="weeknummer" name="weeknummer" step=".01" class="form-control" required>
                            @foreach($weeknummer as $weeknummers)
                                <option>{{$weeknummers->weeknummer}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="text-center">time</label>
                        <input  class="form-control" type="number" id="time" name="time" step=".01" class="form-control" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="text-center">datum</label>
                        <input class="form-control" type="date" id="date" name="date" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="text-center">description</label>
                        <input class="form-control" type="text" id="description" name="description">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success float-left">
                Add
            </button>
        </form>
        <button type="close" class="close btn btn-danger float-right">
            close
        </button>

{{--        <span class="close">&times;</span>--}}
    </div>
</div>
