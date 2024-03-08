<!DOCTYPE html lang="en">
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
    $query = 'SELECT u.id AS university_id, u.university_name, c.country_name
    FROM university u
    JOIN country c ON u.country_id = c.id
    ORDER BY c.country_name, u.university_name;
    ';
    //$query = 'SELECT id, country_name FROM country';
    $result = mysqli_query ( $connect, $query );

    $universities_by_country = [];
    while ($row = mysqli_fetch_assoc($result)) {
    $universities_by_country[$row['country_name']][] = $row['university_name'];
    }
    ?>

    <div class="container">
            <div class="row">
                <div class="col">
                <h1 class="display-4">
                    Countries
                </h1>
                </div>
                </div>
                <div class="row">
                <?php
                foreach($universities_by_country as $country => $universities): ?>
                <div class="card" style="width: 18rem: 1rem;">
                <div class="card-header">
                <?php echo htmlspecialchars($country); ?>
                </div>
                <ul class="list-group list-group-flush">
                <?php foreach ($universities as $university): ?>
                    <li class="list-group-item"><?php echo htmlspecialchars($university); ?></li>
                    <?php endforeach; ?>
                </ul>
                </div>
                <?php endforeach; ?>
                </div>
                </div>
                
                </body>
                </html>