@extends('layouts.app')

@section('content')
    <h1>Contact Us</h1>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                @if (Session::has('flash_message'))
                    <div class="alert alert-success">{{Session::get('flash_message')}}</div>
                @endif
                <form action="{{route('contact.store')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label> Full Name </label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label> Email Address </label>
                        <input type="text" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label> Message </label>
                        <textarea name="message" class="form-control"></textarea>
                    </div>

                    <button class="btn btn-primary" type="submit">Send Message</button>
                </form>
            </div>
        </div>
    </div>
@endsection
