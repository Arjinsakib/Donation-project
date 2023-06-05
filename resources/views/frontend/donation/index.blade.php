@extends('frontend.master')

@section('title')
Donation
@endsection

@section('contant')
<body>
    <div class="container">
        <div class="txt">
            <h1 style="text-align: center; ">Help us <span style="color: #1A8FE3;">save</span> the world</h1><br>
            <h5 style="text-align: center;">Please help us to help other people who don’t have basic need!</h5>
        </div>
    </div>

    <div class="container">
        <div class="txt1">
            <h2>Categories</h2>
        </div>
        <div class="bx1">
            <div class="card" style="width: 22rem;">
                <img src="https://th.bing.com/th/id/OIP.7OWjDq0jQfmR9NAC1D6XKAHaE8?w=269&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Category-1</h5>
                    <h6 class="card-text">Ensuring the mental heath for all the children.</h6>
                    <a href="{{route('donation.create')}}">
                        <button type="button" class="btn btn-outline-primary btn" style="border-radius: 18px;">Donate
                            create</button>
                    </a>
                </div>
            </div>
            <div class="card" style="width: 22rem;">
                <img src="https://th.bing.com/th/id/OIP.4GktGsBvx6BhBkCbi4RtRQHaEK?w=278&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Category-2</h5>
                    <h6 class="card-text">Protection for all the children.</h6><br>
                    <a href="{{route('donation.create')}}">
                        <button type="button" class="btn btn-outline-primary btn" style="border-radius: 18px;">Donate
                            create</button>
                    </a>
                </div>
            </div>
            <div class="card" style="width: 22rem;">
                <img src="https://th.bing.com/th/id/OIP.nKe7XApUWYf1VUundU1J7gHaE8?w=274&h=183&c=7&r=0&o=5&dpr=1.3&pid=1.7"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Category-2</h5>
                    <h6 class="card-text">Protection for all the children.</h6><br>
                    <a href="{{route('donation.create')}}">
                        <button type="button" class="btn btn-outline-primary btn" style="border-radius: 18px;">Donate
                            create</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="bx2">
            <div class="card" style="width: 22rem;">
                <img src="https://th.bing.com/th/id/OIP.ZXroONiZ8QGs5q2bfRde1AHaEk?w=275&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Category-4</h5>
                    <h6 class="card-text">Ensuring medicine for all the children.</h6>
                    <a href="{{route('donation.create')}}">
                        <button type="button" class="btn btn-outline-primary btn" style="border-radius: 18px;">Donate
                            create</button>
                    </a>
                </div>
            </div>
            <div class="card" style="width: 22rem;">
                <img src="https://th.bing.com/th/id/OIP.x5SXnhASpuRT96-c79pKjQHaE7?w=279&h=185&c=7&r=0&o=5&dpr=1.3&pid=1.7"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Category-5</h5>
                    <h6 class="card-text">Ensuring food for all the children.</h6>
                    <a href="{{route('donation.create')}}">
                        <button type="button" class="btn btn-outline-primary btn" style="border-radius: 18px;">Donate
                            create</button>
                    </a>
                </div>
            </div>
            <div class="card" style="width: 22rem;">
                <img src="https://th.bing.com/th/id/OIP.0C4o8TrqMLz0_euM1CiMlQHaFI?w=264&h=183&c=7&r=0&o=5&dpr=1.3&pid=1.7"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Category-6</h5>
                    <h6 class="card-text">Ensuring selter for all the children.</h6>
                    <a href="{{route('donation.create')}}">
                        <button type="button" class="btn btn-outline-primary btn" style="border-radius: 18px;">Donate
                            create</button>
                    </a>
                </div>
            </div>
            <br>
        </div>
</body>
@endsection
