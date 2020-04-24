@extends('layouts.app')

@section('content')
    <h1>Contact Us</h1>
    <hr>
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
            <div class="col-md-6">
                <h4>Contact Information</h4>
                <hr>
                <div class="pl-4">
                    <strong>Headquater</strong>
                    <p>100 Queen St. W.</p>
                    <p>Toronto, ON</p>
                    <p>M5H 2N2</p>
                    <strong>Telephone</strong>
                    <p>+1 647-823-1924</p>
                </div>
            </div>
        </div>
    </div>
@endsection
