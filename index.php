<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet"> 

  <link rel="stylesheet" href="style.css">

  <title>PHP Badwords</title>
</head>
<body>

<?php
$title = 'PHP Badwords';
?>

<div class="container">

  <h1>
    <?php
    echo $title
    ?>
  </h1>
  
  <form action="./landing_page.php" method="POST">
    <input type="text" name="paragraph" placeholder="write something">

    <input type="text" name="badword" placeholder="banned word">

    <button type="submit">Send</button>
  </form>

</div>


</body>
</html>