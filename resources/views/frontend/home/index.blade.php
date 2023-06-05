@extends('frontend.master')

@section('title')
 Home
@endsection

@section('contant')
<div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="h1-text">Donation is about <br>making <br> a <span style="color: #1A8FE3;">Difference</span></h1>
        <a href='{{route('donation.create')}}'>
            <button class="btn btn-button donation-now-2" type="submit">Donate now</button>
        </a>
      </div>
    </div>
  </div>

  <diV class="container">
    <div class="box">
      <h4><b>Donation Amount</b></h4>
        <form>
            <div class="button1">
            <input type="radio" class="btn-check onetime" name="option" id="onetime" autocomplete="off" checked>
            <label class="btn blue-button-one Onetime" for="onetime">One-time</label>
            <input type="radio" class="btn-check" name="option" id="weekly" autocomplete="off">
            <label class="btn blue-button-week weekly" for="weekly">Weekly</label>
            </div>
            <div class="button2">
            <button type="button" class="btn btn-light bt" onclick="get1()">500tk</button>
            <button type="button" class="btn btn-light bt1" onclick="get2()">1000tk</button>
            <button type="button" class="btn btn-light bt1" onclick="get3()">2000tk</button>
            <button type="button" class="btn btn-light bt2" onclick="get4()">5000tk</button>
            <button type="button" class="btn btn-light bt2" onclick="get5()">10000tk</button>
            <button type="button" class="btn btn-light bt2" onclick="get6()">50000tk</button>
            </div>
            <div class="input">
            <input type="number" class="form-control" id="input" placeholder="Custom Amount">
            </div>
        </form>
          <a href="{{route('donation.create')}}">
            <button type="submit" class="btn btn-primary donation-now-1" >Donate now</button>
          </a>
    </div>
  </diV>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="donation.js"></script>
  <script>
    function get1() {
      document.getElementById("input").setAttribute('value', 500);
    }

    function get2() {
      document.getElementById("input").setAttribute('value', 1000);
    }

    function get3() {
      document.getElementById("input").setAttribute('value', 2000);
    }

    function get4() {
      document.getElementById("input").setAttribute('value', 5000);
    }

    function get5() {
      document.getElementById("input").setAttribute('value', 10000);
    }

    function get6() {
      document.getElementById("input").setAttribute('value', 50000);
    }
    </script>
</body>

</html>
@endsection
