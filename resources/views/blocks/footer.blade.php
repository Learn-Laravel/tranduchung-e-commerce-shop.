<div class="d-flex justify-content-between">
    <div class="d-inline-flex">
        <h4 class="me-3">Deals of the Day</h4>
        <h4 class="me-3">|</h4>
        <h4 class="text-danger">{{ date('d-m-Y') }} Left</h4>
    </div>
    <div>
        <h4>View All Deals</h4>
    </div>
</div>
<div class="mt-3 d-flex mb-5">
    @foreach ($images as $item)
        <div class="card mx-3" style="border:none">
            <img class="card-img-top" src="{{ $item['image'] }}" alt="Card image cap"
                style="object-fit : cover;border:none">
            <div class="card-body">
                <h6>{{ $item['name'] }}</h6>
                <div class="d-flex">
                    <p class="card-text">{{ $item['price'] }} | </p>
                    <p class="card-text ">{{ $item['discount'] }}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>