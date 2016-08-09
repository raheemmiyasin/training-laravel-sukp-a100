@extends('layouts.master')

@section('title', 'Update user')

@section('content')

{{-- Use method post, action to users --}}
<form class="form-horizontal" method="POST" action="{{ url('/users/'.$user->id) }}">
<fieldset>

{{ method_field('PUT') }}

{{ csrf_field() }}

<!-- Form Name -->
<legend>User Details</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Name</label>  
  <div class="col-md-4">
  <input id="name" name="name" type="text" placeholder="" class="form-control input-md" required="" value="{{ $user->name }}">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">E-mail</label>  
  <div class="col-md-4">
  <input id="email" name="email" type="email" placeholder="" class="form-control input-md" required="" value="{{ $user->email }}">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Password</label>
  <div class="col-md-4">
    <input id="password" name="password" type="password" placeholder="" class="form-control input-md" required="" value="{{ $user->password }}">
    
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-8">
    <button id="submit" name="submit" class="btn btn-success">Create</button>
    <a href="{{ url('/users') }}" class="btn btn-danger">Cancel</a>
  </div>
</div>

</fieldset>
</form>

@endsection