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

    $university_id = isset($_GET['university_id']) ? (int)$_GET['university_id'] : 0;

    $details_query = "SELECT u.id, u.university_name, y.num_students, y.student_staff_ratio
                  FROM university u
                  LEFT JOIN university_year y ON u.id = y.university_id
                  WHERE u.id = {$university_id}";

    $details_result = mysqli_query($connect, $details_query);
    $university_details = mysqli_fetch_assoc($details_result);

    $criteria_id = 1;

    $rankings_query = "SELECT year, score
                   FROM university_ranking_year
                   WHERE university_id = {$university_id} AND ranking_criteria_id = {$criteria_id}
                   ORDER BY year DESC";

$rankings_result = mysqli_query($connect, $rankings_query);
?>

<div class="container mt-4">
    <h2><?php echo htmlspecialchars($university_details['university_name']); ?></h2>
    <p>Number of Students: <?php echo htmlspecialchars($university_details['num_students']); ?></p>
    <p>Staff Ratio: <?php echo htmlspecialchars($university_details['student_staff_ratio']); ?></p>
    
    <h3>Rankings</h3>
    <ul class="list-group">
        <?php while($ranking = mysqli_fetch_assoc($rankings_result)): ?>
            <li class="list-group-item">
                Year: <?php echo htmlspecialchars($ranking['year']); ?> - 
                Score: <?php echo htmlspecialchars($ranking['score']); ?>
            </li>
        <?php endwhile; ?>
    </ul>
</div>

<?php
mysqli_free_result($details_result);
mysqli_free_result($rankings_result);
mysqli_close($connect);
?>

</body>
</html>