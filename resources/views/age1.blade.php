<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Child between 0-2 months</title>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
                <p></p>
                <a href="http://127.0.0.1:8000/">My baby's sleep</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif
    <h3>Children with age between 0-2 months</h3>
    <p>In the first weeks of life, sleep is disorganized, and the need for sleep is very high. The baby needs to sleep again at 60 minutes after waking up. Short sleeps of 20-30 minutes are normal.</p>
</body>
</html>