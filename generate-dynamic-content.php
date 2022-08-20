<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check your color</title>
</head>
<body>
    <form method ="POST">
        Enter your Favourite color <input type ="text" name="favcolor">
        <input type="submit" name="submit" value="Check Now">
    </form>

    <p> 
    <?php
       if(isset($_POST['submit'])) {
        $favColor = $_POST['favcolor'];
        // echo $favColor;
        switch($favColor){
            case "Blue" : echo 'Your fav color is Blue';
            break;
            case "Black" : echo 'Your fav color is Black';
            break;
            case "Red" : echo 'Your fav color is Red';
            break;
            default : echo ' Do not know about your favourite color';
        }
       }
    ?>
    </p>
    
</body>
</html>


