
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signin Template · Bootstrap v5.3</title>

    <link href="{{ asset('dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body class="text-center">

<main class="form-signin w-100 m-auto">
    <div>
    <a href="{{ route('site.show', compact('token') + ['play' => 1]) }}" class="btn btn-danger">Imfeelinglucky</a>
    <button class="btn btn-success"
            data-bs-toggle="modal" data-bs-target="#history">History</button>
    </div>
    @if($result)
    <div>
        <h2>Points: {{ $result }}</h2>
    </div>
    <div>
        @if($isWin)
        <button class="btn btn-success">WIN {{ $sum }}</button>
        @else
            <button class="btn btn-secondary">LOSE</button>
        @endif
    </div>
    @endif
</main>



<x-history-modal />

<script src="{{ asset('dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
