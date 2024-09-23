@if (session()->has('fail'))
    <div class="alert alert-danger">{{session('fail')}}</div>
@endif