@extends('layouts.app')

@section('content')
<div class="col-lg-6">
<form action="/contact" method="POST">
  @csrf
  <div class="form-group">
    <div class="row pl-3">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="firstnamename" name="name" aria-describedby="name" placeholder="name">

      <div>{{ $errors->first('name')}}</div>
    </div>
  </div>
   <small id="emailHelp" class="form-text text-muted">We'll never share your name with anyone else.</small>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" id="email" name="email" placeholder="email">
    <div>{{ $errors->first('email')}}</div>
  </div>
   <div class="form-group">
    <label for="subject">Subject</label>
    <input type="text" class="form-control" id="subject" name="subject" placeholder="subject">
    <div>{{ $errors->first('subject')}}</div>
  </div>
  <div class="form-group">
    <label for="message">Message</label>
    <div>{{ $errors->first('message')}}</div>
    <textarea class="form-control" id="message" name="message" placeholder="message"></textarea> 
  </div>


  <button class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection
