<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Add New Record - South Asian Protagonists </title>
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
                <div class="col-lg-6 fs-5 my-auto">            
                    <h1 class="display-4 mt-5">Add a new record</h1>
                    <p>If you know a South Asian protagonist (in a series or film primarily not set in South Asia) that is not yet on this database, please fill out the form.</p>

                    <p>Fill out the form only if this protagonist is in a movie or TV series. Supporting characters are not allowed (unless they become main characters later on in the series). Protagonists in books are not allowed.</p> 

                    <p class="fw-bold">You cannot delete a record after submitting.</p>
                    
                    <a class="btn btn-dark me-2 mb-2" href="characters.php" role="button">View all records</a>
                    <a class="btn btn-light btn-outline-dark me-2 mb-2" href="index.html" role="button">Return home</a>
                </div> <!-- End of col-lg-6 -->

                <div id="form-container" class="col-lg-6 mt-5">
                    <form id="form" method="post" action="" autocomplete="off">

                        <div class="mb-3">
                            <!-- Text input field for ... -->
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" id="title" maxlength="60" required>
                        </div>

                        <div class="mb-3">
                            <!-- Text input field for ... -->
                            <label for="char_name" class="form-label">Character Name</label>
                            <input type="text" class="form-control" name="char_name" id="char_name" maxlength="40" required>
                        </div>

                        <div class="mb-3">
                            <!-- Text input field for ... -->
                            <label for="actor" class="form-label">Actor/Actress Name</label>
                            <input type="text" class="form-control" name="actor" id="actor" maxlength="40" required>
                        </div>
                        
                        <div class="mb-3">
                            <!-- Dropdown input field for ... -->
                            <label for="movie_or_tv" class="form-label">Movie or TV Series?</label>
                            <select class="form-select" name="movie_or_tv" id="movie_or_tv" required>
                                <option value="">Choose...</option>
                                <option value="Movie">Movie</option>
                                <option value="TV Series">TV Series</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <!-- Text input field for ... -->
                            <label for="genre" class="form-label">Genre</label>
                            <input type="text" class="form-control" name="genre" id="genre" maxlength="30" required>
                        </div>

                        <div class="mb-3">
                            <input type="submit" class="btn btn-dark mb-2" value="Submit">
                        </div>  
                    </form>
                </div> <!-- End of col-lg-6 -->

                <div class="col-lg-6 my-auto">
                    <div id="response" class="text-center mt-5 fs-5"></div>
                </div>
                      
            </div> <!-- End of row -->

        </div> <!-- End of container -->

        <footer class="bg-dark p-2">
            <p class="text-light text-center m-2 small">This database application was created by Zarin Ismail. View the Github repo <a href="https://github.com/zarinismail/protags-database" target="_blank">here</a>.</p>
        </footer>
        
        <!-- JS that "listens for" form submission -->
        <script src="js/enter.js"></script>
    </body>
</html>