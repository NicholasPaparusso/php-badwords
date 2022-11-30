<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./landing.css">
  <title>PHP Badwords Landig-Page</title>
</head>
<body>

<?php 
  $p = $_POST['paragraph'];
  $bad_word = $_POST['badword'];
  $new_p = str_replace("$bad_word", " *** ", $p) ;
  $title = 'Paragraph' ;
?>

  <div class="container">

    <h2>
      <?php echo $title; ?>
    </h2>

    <div>

      <span>
        <?php 
          echo $p;
        ?>
      </span>

      <span>
        <?php 
          echo 'Il Paragrafo contiene: '. str_word_count($p) . ' parole,' .' per un totale di ' . strlen($p) . ' caratteri.' ;
        ?>
      </span>

    </div>

    <h2>
      <?php echo $title . ' without banned Words'; ?>
    </h2>

    <div>

      <span>
        <?php 
          echo $new_p ;
        ?>
      </span>
      
      <span>
        <?php 
          echo 'Il Paragrafo contiene: '. str_word_count($new_p) . ' parole,' .' per un totale di ' . strlen($new_p) . ' caratteri.' ;
        ?>
      </span>

    </div>

  </div>-

</body>
</html>