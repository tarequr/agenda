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

    <form class="form-signin" action="{{ route('checkout.balance') }}" method="POST">
        @csrf

        <div class="text-center mb-4">
            <h1 class="h3 mb-3 font-weight-normal">WithDrawal</h1>
        </div>

        @if (Session::has('message'))
            <div class="text-center mb-4 alert alert-danger" role="alert">
                <strong>{{ Session::get('message') }}</strong>
            </div>
        @endif

        @if (Session::has('balance'))
            <div class="text-center mb-4 alert alert-success" role="alert">
                <strong>Your current balance: {{ Session::get('balance') }}</strong>
            </div>
        @endif

        <div class="form-label-group">
            <input type="number" id="amount" class="form-control" name="amount" placeholder="Enter amount"
                required autofocus>
            <label for="amount">Amount</label>
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Checkout</button>
        <p class="mt-5 mb-3 text-muted text-center">&copy; 2023-2025</p>
    </form>
</body>

</html>
