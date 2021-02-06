<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>childregistration</title>
</head>
<body>
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