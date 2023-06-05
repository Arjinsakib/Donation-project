@extends('frontend.master')

@section('title')
Contact
@endsection

@section('contant')
    <div class="container my-5">
        <div class="row">
            <div class="col-md-8 mb-5">
                <h3 class="text-center">Contact with Us for Donation</h3>
            </div>
        </div>
        <div class="col-md-8">
            @if (Session::get('notification'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
               {{Session::get('notification')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
            <form action="{{route('contact.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <input placeholder="Name" type="text" class="form-control" name="name">
                  </div>
                  <div class="mb-3">
                    <input placeholder="Your Location" type="text" class="form-control" name="location">
                  </div>
                  <div class="mb-3">
                      <input placeholder="Email" type="text" class="form-control" name="email">
                  </div>
                  <div class="mb-3">
                      <textarea placeholder="Your Message" name="description" cols="37" rows="3" class="form-control"></textarea>
                  </div>
                  <button type="#" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </div>
@endsection
