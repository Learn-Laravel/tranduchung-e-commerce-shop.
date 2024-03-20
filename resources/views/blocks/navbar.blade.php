<div class="navbar shadow p-3 mb-5 bg-body-tertiary rounded">
    <img class="px-5" src="{{ asset('images/logo.png') }}" alt="">
    <div class="search mx-5">
        <form class="d-inline-flex position-relative" role="search">
            <button type="submit" class="btn position-absolute end-0 top-0 bottom-0"
                id="search-addon"><i class="fa fa-search" aria-hidden="true"></i></button>
            <input type="search" class="form-control rounded-pill" placeholder="Search here..."
                aria-label="Search" aria-describedby="search-addon">
        </form>
    </div>
    <div class="person d-flex align-items-center justify-content-around">
        <div class="avatar d-inline-flex">
            <button style="width: 40px; height: 40px; margin-right: 10px;"
                class="rounded-circle  border border-0 bg-body">
                <img src="{{ asset('images/cac-hinh-cute-001-1.jpg') }}" alt="Avatar">
            </button>
            <div class="dropdown me-4">
                <button class="border border-0 bg-body dropdown-toggle mt-2" type="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Đức Hùng
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>
        <a href="#" class="text-decoration-none me-4 text-black">Chart</a>
        <a href="#" class="text-decoration-none mx-4 text-black">Orders</a>
    </div>
</div>