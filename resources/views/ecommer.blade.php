@include('blocks.header')
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-1 shadow p-3 mb-5 bg-body-tertiary rounded full-height">
                @include('blocks.sidebar')
            </div>
            <div class="col-11">
                <div>
                    @include('blocks.navbar')
                </div>
                <div>
                    @yield('cards')
                </div>
                <hr class="text-info">
                <div>
                    @include('blocks.footer')
                </div>
            </div>
        </div>
    </div>
</body>

</html>
