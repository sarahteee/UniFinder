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

    //$connect = mysqli_connect( 'localhost', 'root', 'root', 'universities' );
    $connect = mysqli_connect( 'sql311.infinityfree.com', 'if0_35758281', 'tR1BWgU3Ru', 'if0_35758281_universities' );
    $query = 'SELECT id, country_name FROM country';
    $result = mysqli_query ( $connect, $query );
?>

    <div class="container">
        <div class="row">
        <div class="col">
            <h1 class="display-4 mt-5 mb-4">
            Add University
            </h1>
        </div>
        </div>
        <div class="row">
        <div class="col">
        <form method="POST" action="">
           <div class="mb-3">
            <label for="universityname" class="form-label">University</label>
          <input type="text" class="form-control" id="universityname" name="universityname" aria-describedby="university name">
        </div>
        <select class="form-select" aria-label="Default select example">
        <option selected>Select Country</option>
        <?php
        foreach($result as $country){
        echo '
        <option value="1">' . $country['country_name'] . ' </option>
       ';
        }
        ?>
         </select>
        <div><button type="submit" name="submit" class="btn btn-primary">Add University </button></div>
      </form>
      </div>
    </div>
  </div>


</body>
</html>