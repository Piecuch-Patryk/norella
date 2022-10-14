@if(session()->has('message'))
    <div class="row session-message">
        <div class="col-12 text-center fs-3 mt-3">
            <p>{{session('message')}}</p>
        </div>
    </div>
@endif