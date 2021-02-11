<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Child older than 16 months</title>
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
    <h3>Children older than 16 months</h3>
    <p>The transition from two to one day sleep is done around the age of 1 year and 4 months, for some children earlier, for others later. If during three weeks the child has more days with one sleep than the days with two sleeps, it is time to make the transition to one sleep. During the transition period, the day sleep will be around 11-12, and the night bedtime at 5-6, until the child increases his resistance and can reach the biological day sleep  time at 13, with a sleep which lasts up to 2-3 hours. Thus the bedtime will be around 7 (at maximum 4 hours after waking up from lunch). Gradually, in a few weeks, the one day sleep program consolidates and day sleep becomes consistent. Around the age of two years, children begin to extend their evening activity period to four and a half hours, with a night bedtime at about 7:30p.m.</p>
</body>
</html>