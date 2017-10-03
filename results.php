<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PHP Forms</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body>

    <?php
    
      switch ($_POST["movies"]) {
        case "horror":
          $comment =
           "You're a horror movie lover.";
          break;
           case "comedy":
          $comment =
           "You're a comedy movie lover.";
          break;
           case "romantic":
          $comment =
          "You're a romantic movie lover.";
          break;
           case "science_fiction":
          $comment = "You're a science fiction movie lover.";
          break;
           case "suspense":
          $comment = "You're a suspense movie lover.";
          break;
           case "indie":
          $comment = "You're an indie movie lover.";
          break;
           case "chick_flick":
          $comment = "You're a chick flick movie lover.";
          break;
           case "action":
          $comment = "You're an action movie lover.";
          break;
           case "none":
          $comment = "You have horrible taste.";
          break;
          default:
            $comment = "You&rsquo;re a 
            <?php echo $movies; ?> movie lover.";
      }
      ?>


    <?php
      // Set variables
      $nickname = htmlspecialchars($_POST["nickname"]);
      $first_and_last_name = htmlspecialchars($_POST["first_and_last_name"]);
      //$movies = htmlspecialchars($_POST["movies"]);
    ?>
    <div class="container py-5 my-5">
      <pre>
      </pre>
      <h1>Sup, <?php echo $nickname; ?></h1>
      <?php if($_POST["movies"] != null): ?>
        <p class="lead"><?php echo $comment; ?></p>
      <?php else: ?>
        <p>Enter a movie.</p>
      <?php endif; ?>
    </div>
  </body>
</html>