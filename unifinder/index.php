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
    $query = 'SELECT id, university_name, imageURL FROM university';
    $result = mysqli_query ( $connect, $query );
    ?>

    <div class="container">
        <div class="row">
            <div class="col">
            <h1 class="display-4">
                Universities
            </h1>
            </div>
            </div>
            <div class="row">
            <?php
            foreach($result as $university){
            echo '<div class="col-md-4 mt-2 mb-2"> 
            <div class="card" style="width: 18rem;"> 
            <img src=" ' . $university['imageURL'] . '" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">' . $university['university_name'] . '</h5>
              <a href="details.php?university_id=' . $university['id'] . '" class="btn btn-primary">Details</a>
            </div>
            </div>
          </div>';
        }
    ?>
    </div>
    </div>

    <?php mysqli_close($connect); ?>
</body>
</html>