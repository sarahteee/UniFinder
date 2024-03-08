<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniFinder</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<?php
    include('nav.php');
?>

    <div class="container">
        <div class="row">
        <div class="col">
            <h1 class="display-4 mt-5 mb-4">
            Add Country
            </h1>
        </div>
        </div>
        <div class="row">
        <div class="col">
        <form method="POST" action="">
            <div class="mb-3">
            <label for="countryname" class="form-label">Country</label>
          <input type="text" class="form-control" id="countryname" name="countryname" aria-describedby="country name">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Add Country </button>
      </form>
      </div>
    </div>
  </div>


</body>
</html>
    </body>
    </html>