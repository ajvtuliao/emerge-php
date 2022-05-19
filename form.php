<!DOCTYPE html>
<html>
    <body>
        <form action="success.php" method="get">
            <strong>Name:</strong> <input type="text" name="name"><br>
            <strong>Birthdate:</strong> <input type="date" name="dbo" max="<?=date("Y-m-d");?>"> <br>
            <strong>Gender:</strong> <input type="radio" name="gender" value="Female"> Female
            <input type="radio" name="gender" value="Male"> Male
            <input type="radio" name="gender" value="Other"> Other <br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>