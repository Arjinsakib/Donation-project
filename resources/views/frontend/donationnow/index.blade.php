@extends('frontend.master')

@section('title')
 Donation Now
@endsection

@section('contant')
<div class="container">
    <div class="row">
        <h1 class="donation-from-1 text-center"><span style="color: #1A8FE3;">Donation</span> From</h1>
        @if (Session::get('notification'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{Session::get('notification')}}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
        <div class="col-md-8">
            <form class="donation-box" method="POST" action="{{route('donation.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label  class="form-label">Full Name</label>
                  <input type="text" class="form-control" name="name">
                </div>
                <div class="mb-3">
                  <label  class="form-label">Email</label>
                  <input type="text" class="form-control" name="email">
                </div>
                <div class="mb-3">
                  <label  class="form-label">Address</label>
                  <input type="text" class="form-control" name="address">
                </div>
                <div class="mb-3">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Choose Payment Method</option>
                        <option value="1">Bkash</option>
                      </select>
                </div>
                <div class="mb-3">
                        <label for="">Number</label>
                        <input type="text" class="form-control" name="bkash_number">
                      </select>
                </div>
                <div class="mb-3">
                  <label  class="form-label">Amount</label>
                  <input type="text" class="form-control" name="amount">
                </div>
                <button type="submit" class="btn blue-button">Submit</button>
              </form>
        </div>
    </div>
</div>


@endsection
