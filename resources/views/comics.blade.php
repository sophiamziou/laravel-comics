<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DC comics</title>

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    @include('partials.header')
    <main>
        <div class="container">
            <div class="row">
                @foreach ($books as $key => $book)
                <a href="{{ route('single-comic', ['param'=> $key]) }}">
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="{{$book['thumb']}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">{{$book['title']}}</h5>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </main>
    @include('partials.footer')
</body>
</html>