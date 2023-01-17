<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>ATM</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/floating-labels/">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('floating-labels.css') }}" rel="stylesheet">
</head>

<body>

    {{-- <form class="form-signin" action="{{ route('checkout.balance') }}" method="POST">
        @csrf --}}

        <div class="text-center mb-4">
            <h1 class="h3 mb-3 font-weight-normal">Do you want to withdraw more money?</h1>
            <a href="{{ route('checkout.balance') }}" class="btn btn-lg btn-success">Yes</a>
            <a href="{{ route('session.destroy') }}" class="btn btn-lg btn-primary">No</a>
        </div>
</body>

</html>
