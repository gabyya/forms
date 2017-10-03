<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PHP Forms</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body>
    <div class="container py-5 my-5">
      <h1>HTML Forms &mdash; Get</h1>
      <form action="results.php" method="post">
        <div class="form-group">
          <label for="nickname">Nickname</label>
          <input type="text" class="form-control" id="first-name" aria-describedby="email-help" placeholder="Nickname" name="nickname">
          <small id="nickname-help" class="form-text text-muted">Enter your nickname.</small>
        </div>
        <div class="form-group">
          <label for="last-name">First and Last Name</label>
          <input type="text" class="form-control" id="last-name" aria-describedby="first-and-last-name-help" placeholder="First and Last Name" name="first_and_last_name">
          <small id="first_and_last-name-help" class="form-text text-muted">Enter your first and last name.</small>
        </div>
        <p class="lead mb-0">What is your favorite movie genre?</p>
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="movies" id="horror" value="horror">
            Horror
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="movies" id="comedy" value="comedy">
            Comedy
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="movies" id="romantic" value="romantic">
            Romantic
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="movies" id="science_fiction" value="science_fiction">
            Science Fiction
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="movies" id="suspense" value="suspense">
            Suspense
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="movies" id="indie" value="indie">
            Indie
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="movies" id="chick_flick" value="chick_flick">
            Chick Flick
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="movies" id="action" value="action">
            Action
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="movies" id="none" value="none">
            None of the above
          </label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </body>
</html>