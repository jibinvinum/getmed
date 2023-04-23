@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-4">
            <h1>hi</h1>
        </div>
    </div>
    <form method="POST" class="form">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" class="form-control"></textarea>
        </div>
            <button type="submit" class="btn btn-primary">Submit</button>
    </form>


</div>
@endsection
