@extends('main')

@section('title', 'Contact')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <h1>Contact Me</h1>
      <hr>
      <form action="">
        <div class="form-group">
          <label for="" name="email">Email:</label>
          <input type="text" name="email" id="email" class="form-control" />
        </div>
        <div class="form-group">
          <label for="" name="subject">Subject:</label>
          <input type="text" name="subject" id="subject" class="form-control" />
        </div>
        <div class="form-group">
          <label for="" name="subject">Subject:</label>
          <textarea type="text" name="message" id="message" class="form-control"></textarea>
        </div>
        <input type="submit" class="btn btn-success" value="Send message">
      </form>
    </div>
  </div>
@endsection