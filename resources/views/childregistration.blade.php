<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>childregistration</title>
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
    <h1>Create a child profile!</h1>
    <form method="POST" action="submit">
        @csrf
        <label for="First_name">First name:</label><br>
        <input type="text" id="First_name" name="First_name"><br>
        <label for="Age_in_months">Age in months:</label><br>
        <input type="integer" id="Age_in_months" name="Age_in_months"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>