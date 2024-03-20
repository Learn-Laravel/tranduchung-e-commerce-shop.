@extends('ecommer')

@section('cards')
    <div class="row mt-3 d-flex justify-content-between ">
        <div class="col-3 mx-2 shadow p-3 mb-3 bg-body-tertiary rounded">
            <div class="d-flex flex-column justify-content-between">
                @foreach ($products as $product)
                    <div class="align-self-stretch">
                        <div class="d-flex align-items-center">
                            <h6 class="mt-4 mb-0" style="width: 260px">{{ $product['name'] }}</h6>
                            <i class="fa fa-angle-right mx-5 mt-auto"></i>
                        </div>
                        <hr class="mt-2">
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-6 mb-3">
            <div class="row">
                <div class="col-12 bg-success-subtle mb-3">
                    <div class="item d-flex align-items-center ">
                        <div class="text mt-5 p-3">
                            <p>Biggest Offer Revealed</p>
                            <h1 class="">MORE DEALS INSIDE UP TO 50% OFF</h1>
                        </div>
                        <div class=" mt-5">
                            <img src="{{ asset('images/chair.png') }}" style="width:300px" alt="">
                        </div>
                    </div>
                    <div class="mt-3 p-3 d-flex align-items-center ">
                        <p class="mx-3">Wishlist now</p>
                        <i class="fa fa-forward mb-3" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="col-4 bg-danger-subtle">
                    <div>
                        <img class="p-1 mt-4" src="{{ asset('images/tuixach.png') }}"
                            style="max-width: 100%; max-height: 100%; width: auto; height: auto;" alt="">
                    </div>
                </div>
                <div class="col-4 bg-warning-subtle">
                    <div>
                        <img class="p-1 mt-4" src="{{ asset('images/dongho.png') }}"
                            style="max-width: 100%; max-height: 100%; width: auto; height: auto;" alt="">
                    </div>
                </div>
                <div class="col-4 bg-info-subtle">
                    <div>
                        <img class="p-1 mt-4" src="{{ asset('images/lamp.png') }}"
                            style="max-width: 100%; max-height: 100%; width: auto; height: auto;" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-2 me-2 mb-3 mt-2">
            <div class="row">
                <h4 class="mb-4">Recently Viewed</h4>
                <div class="shadow bg-body-tertiary rounded">
                    <img src="{{ asset('images/tuinu.png') }}" alt="" style="width: 200px; height: 250px;">
                    <p>See your browsing history</p>
                </div>

            </div>
            <div class="row mt-4">
                <h4 class="mb-4">Suggestions for You</h4>
                <div class="shadow bg-body-tertiary rounded">
                    <img src="{{ asset('images/tuinam.png') }}" alt="" style="width:200px; height:250px;">
                    <p>Watch more</p>
                </div>
            </div>
        </div>
    </div>
@endsection
