<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poprawy</title>
    <link rel="stylesheet" href="page.css?v=69">
</head>
<body>
    <div class="header">
        <h1>Witamy w poprawach!</h1>
        <?php 
            if ($islogged = 1)
            {
                include('profile.php');
            }
            else
            {
            include('register.php');
            }
        ?>

<form action="index.php" method="get">
  <input type="hidden" name="act" value="run">
  <input type="submit" value="Run me now!">
</form>
<?php
  }
  
    </div>
    <div class="content">
        <div class="add">
                <form action="#" method="POST">
                    <div class="form-group">
                        <label>Nazwa przedmiotu:</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Ocena:</label>
                        <input type="number" name="grade" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Temat:</label>
                        <input type="text" name="subject" class="form-control">
                    </div>
                    <label class="non_necesary">Nie obowiązkowe:</label>
                    <div class="form-group">
                        <label>Termin:</label>
                        <input type="date" name="deadline" class="form-control">
                    </div><div class="form-group">
                        <label>Godzina:</label>
                        <input type="time" name="hour" class="form-control">
                    </div>
                    <div class="btns">
                        <button type="reset" name="clear">Wyczyść</button>
                        <button type="submit" name="submit" id="add_btn" class="add_btn">Dodaj</button>
                    </div>
                </form>
        </div>
    </div>
    <div class="footer">
        <h3>Stronę wykonał: 03320606017</h3>
    </div>
</body>
</html>