<!doctype html>
<html>

<head>
    @include('layouts.head')
</head>

<body style="background-color:#f1f1f1;">
    <div id="app">
        @include('layouts.header')


        <main class="py-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        @yield('content')
                    </div>
                </div>
            </div>
        </main>
    </div>
    <footer>
        {{-- @include('layouts.footer') --}}
    </footer>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
