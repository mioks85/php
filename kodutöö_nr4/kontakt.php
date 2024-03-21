<!doctype html>
<html lang="et">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kodutöö_nr3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  </head>
  <body>
    <div class="container-sm text-center">
        <div class="row g-0">
            <div class="col-sm-6 col-md-8 text-start">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                  </svg>
                sinu@nimi.ee 
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-headphones" viewBox="0 0 16 16">
                    <path d="M8 3a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V8a6 6 0 1 1 12 0v5a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h1V8a5 5 0 0 0-5-5"/>
                  </svg>                +372 555 6666
            </div>
            <div class="col-sm-6 col-md-4 text-end">
                Est | Eng | Rus 
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                  </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                    <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                  </svg>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Mihkel Oks</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse nav justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">Avaleht</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Tooted</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="teenused.php">Teenused</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="kontakt.php">Kontakt</a>
                        </li>
                        </ul>
                        <form class="d-flex">
                            <button class="btn btn-primary" type="submit">Login</button>
                        </form>
                </div>
            </div>
        </nav>
    </div>
    <div class="container">
      <div class="row justify-content-center">
      <div class="col-md-12 text-center">
            <h2 class="mb-2">Minu oskused</h2>

            <?php
    //massivid oma oskustest
    $skills = array("HTML", "CSS", "Bootstrap", "PHP");
    $colors = array("primary", "secondary", "success", "danger", "warning", "info", "dark");
    
    //tsükkel oskuste ribade jaoks ja juhusliku värvi ssamine
    foreach ($skills as $skill) {
    
    $random_color = $colors[array_rand($colors)];
    
    //juhuslik täisarv
    $random_number = rand(10, 100);

    //ribad
    echo '<div class="progress w-50 mb-3 mx-auto">';
    echo '<div class="progress-bar bg-' . $random_color . '" role="progressbar" style="width: ' . $random_number . '%" aria-valuenow="' . $random_number . '" aria-valuemin="0" aria-valuemax="100">' . $skill . '</div>';
    echo '</div>';

    }
      
    ?>
</div>
</div>


<br>


        <div class="row justify-content-center">
        <div class="col-md-12 text-center">
         <h2 class="mb-2">Meie töötajad</h2>
        <div class="row d-flex justify-content-center">



            <?php
      //profiilipildid
            $imageDirectory = 'img';
            
      //automaatne avastamine
            function getImages($directory) {
              $images = glob($directory . '/*.jpg');
              return $images;
            }

      //pildid kataloogist
            $images =getImages($imageDirectory);

            foreach ($images as $image) {
              
      //töötajanimi
              $employeeName = ucfirst(pathinfo($image, PATHINFO_FILENAME));

      //eposti aadress nimiest
              $employeeEmail = strtolower(pathinfo($image, PATHINFO_FILENAME)) . '@sinunimi.ee';

      //pildi kuvamine
              echo '<div class="col-md-2 mb-4">';
              echo '<img src="' . $image . '" class="img-fluid rounded-circle" alt="' . $employeeName . '">';
              echo '<h4 class="mt-2">' . $employeeName . '</h4>';
              echo '<p>' . $employeeEmail . '</p>';
              echo '</div>';
            }


            ?>

          </div>
         </div>
       </div>
      </div>