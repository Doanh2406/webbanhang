@if (session('error'))
<div class="alert alert-danger">
      <p>{{ session('error') }}</p>
</div>
@endif

@foreach($errors->all() as $error)
<p class="alert alert-danger">{{$error}}</p>
@endforeach