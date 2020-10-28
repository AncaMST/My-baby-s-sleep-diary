<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>childregistration</title>
</head>
<body>
    <h1>Create a child profile!</h1>
    <form method="GET" action="http://127.0.0.1:8000/childregistration">
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname"><br>
        <label for="age">Age:</label><br>
        <input type="integer" id="age" name="Age:"><br><br>
        <label for="birthm">Birth month:</label>
        <select name="months" id="months" form="monthform">
        <option value="january">January</option>
        <option value="february">February</option>
        <option value="march">March</option>
        <option value="april">April</option>
        <option value="may">May</option>
        <option value="june">June</option>
        <option value="july">July</option>
        <option value="august">August</option>
        <option value="september">September</option>
        <option value="octomber">Octomber</option>
        <option value="november">November</option>
        <option value="december">December</option>
</select>
        <input type="submit" value="Submit">
    </form>
</body>
</html>