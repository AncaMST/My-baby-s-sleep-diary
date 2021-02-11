<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Child between 7-15 months</title>
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
    <h3>Children with age between 7-15 months</h3>
    <p>Around 7 months, it begins the transition from three to two day sleeps. The biological hours for the two day sleeps are 9a.m. and 1p.m., with a night sleep at 3 hours after waking up from the last day sleep. During the transition period, however, the second sleep may start earlier or be shorter. On those days, provide a third sleep from which the baby will wake up at 4:30p.m. the latest, to protect the evening bedtime hour. The two day sleeps program has 3 activity intervals, the first of them is 2 hours long(from waking up in the morning until the first sleep of the day), the second is 2 and a half hours long(between morning and noon sleep) and the third one is 3 hours long (from last day sleep to night bedtime).</p>
</body>
</html>