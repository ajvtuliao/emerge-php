<!DOCTYPE html>
<html>
    <body>
        <form action="success.php" method="get">
            <strong>Name:</strong> <input type="text" name="name"><br>
            <strong>Birthdate:</strong>  <input type="date" id="datemax" name="date" max="2022-05-31"> <br>
            <strong>Gender:</strong> <input type="radio" name="gender" value="Female"> Female
            <input type="radio" name="gender" value="Male"> Male
            <input type="radio" name="gender" value="Other"> Other <br>
            <br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>