<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Child between 3-4 months</title>
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
    <h3>Children with age between 3-4 months</h3>
    <p>From the age of 12 weeks, the sleep's circadian rhythm, the internal clock that dictates when the body needs sleep, begins to develop. Gradually, babies begin to sleep for several hours at night, and during the day the activity periods increase from 60 minutes to 90 minutes. Up to 5 months the rule of 90 minutes applies: sleep at 90 minutes after waking up from the previous sleep. The evening bedtime is around 7-8 p.m., depending on the last day's sleep.</p>
</body>
</html>