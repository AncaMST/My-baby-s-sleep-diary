<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Child between 5-6 months</title>
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
    <h3>Children with age between 5-6 months</h3>
    <p>At this age, the period of activity increases until 2 hours between daytime sleeps, with the first sleep earlier, at 90 minutes. Optimal sleep schedule: the first sleep at 9a.m. o'clock, the second at 12p.m. o'clock, the third at 3p.m. o'clock, the evening sleep around 7p.m. Towards the end of the period, the transition from three to two day sleeps is made.</p>
</body>
</html>