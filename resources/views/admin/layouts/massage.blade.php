@if(Session::has('flash_massage'))
<div class="container">
    <br>
    <div class="alert alert-danger center" id="mes">
        {{Session::get('flash_massage')}}
    </div>
</div>
    @endif
