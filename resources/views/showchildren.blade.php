<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show my children</title>
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
    <h5>See below the registered children:</h5>
    <ul>
        @foreach($children as $child)
            <li>
               {{ $child->First_name}} {{ $child->Age_in_months}} {{'months'}}
               <a href ="{{route('sleepinfo', $child->Age_in_months)}}">See sleep info</a>
            </li>
        @endforeach
    </ul>

    <p></p>
    <a href="http://127.0.0.1:8000/childregistration"><strong>Register another child!<strong></strong></a href>
</body>
</html>