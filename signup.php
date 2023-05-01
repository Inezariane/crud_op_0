<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="connection.css">
</head>
<body>
    <h2>Sign up</h2>
    <form action="create.php" method="POST">
        <fieldset>
            <legend>Personal information:</legend>
            First name: 
            <input type="text" name="firstname"><br>
            Last name: 
            <input type="text" name="lastname"><br>
            Email: 
            <input type="email" name="email"><br>
            Password: 
            <input type="password" name="password"><br>
            Gender: 
            <label for="male">
                <input type="radio" name="gender" id="male" value="male">Male
            </label>
            <label for="female">
                <input type="radio" name="gender" id="female" value="female">Female
            </label><br>
            <input type="submit" name="submit" value="submit">
        </fieldset>
    </form>
</body>
</html>
