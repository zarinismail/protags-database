<?php
	include 'database.php';
	$query = "SELECT * FROM protags ORDER BY title";
	$protagonists = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> View All Records - South Asian Protagonists </title>
        <!-- Bootstrap CDN -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Geologica:wght@700&family=Plus+Jakarta+Sans&display=swap" rel="stylesheet">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/main.css">
    </head>

    <body>
        <div class="container min-vh-100">
            <div class="row">
                <div class="col-lg-6 fs-5 mx-auto text-center">            
                    <h1 class="display-4 mt-5">View all records</h1>
                    <p>If you know a South Asian protagonist (in a show or film not set in South Asia) that is not yet on this database, please add a new record.</p>
                    
                    <a class="btn btn-dark me-2 mb-2" href="enter_new_record.php" role="button">Add a new record</a>
                    <a class="btn btn-light btn-outline-dark me-2 mb-2" href="index.html" role="button">Return home</a>
                </div> <!-- End of col-lg-6 -->

                <div class="col-lg-9 mt-3 mb-5 mx-auto table-responsive">
                    <table class="table table-dark table-striped-columns">
                        <tr>
                            <th class="table-light">Title</th>
                            <th class="table-light">Character Name</th>
                            <th class="table-light">Actor Name</th>
                            <th class="table-light">Movie or TV Series?</th>
                            <th class="table-light">Genre</th>
                        </tr>

                        <!-- Begin PHP while-loop to display database query results
                            with each row enclosed in TD tags.
                            Each time it loops, it writes ONE ROW.
                            This code depends on the first 5 lines at the start of this file.
                            $socks comes from that code.
                            NOTE all form controls must have a name= attribute.
                            -->
                        <?php while ($row = mysqli_fetch_assoc($protagonists)) :  ?>

                        <tr>
                        <td><?php echo stripslashes($row['title']); ?></td>
                        <td><?php echo stripslashes($row['char_name']); ?></td>
                        <td><?php echo stripslashes($row['actor']); ?></td>
                        <td><?php echo $row['movie_or_tv']; ?></td>
                        <td><?php echo $row['genre']; ?></td>
                        </tr><!-- end of HTML table row -->

                        <?php endwhile;  ?>
                        <!-- end the PHP while-loop
                            everything else on this page is normal HTML -->

                    </table>
                </div>
                      
            </div> <!-- End of row -->

        </div> <!-- End of container -->

        <footer class="bg-dark p-2">
            <p class="text-light text-center m-2 small">This database application was created by Zarin Ismail. View the Github repo <a href="https://github.com/zarinismail/protags-database" target="_blank">here</a>.</p>
        </footer>
    </body>
</html>