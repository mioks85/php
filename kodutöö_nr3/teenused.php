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
                        <a class="nav-link" href="teenused.php">Teenused</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link">Kontakt</a>
                        </li>
                        </ul>
                        <form class="d-flex">
                            <button class="btn btn-primary" type="submit">Login</button>
                        </form>
                </div>
            </div>
        </nav>
    </div>
    <div class="container mt-5">
        <br>
        <h2 class="mb-4">TEENUSE KALKULAATOR</h2>

        <?php
            
            $error_message = '';
            $result = '';

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // kogu sisestatud andmed
                $input_value1 = $_POST['input_value1'];
                $input_value2 = $_POST['input_value2'];
                $select_option = $_POST['select_option']; // näide rippmenüüst

                //piirangud negatiivse väärtuse jaoks
                $input_value1 = max(0, $input_value1);
                $input_value2 = max(0, $input_value2);


                // kontrolli kas väljad on täidetud
                if ($input_value1 !== '' && $input_value2 !== '') {
                  // kui on valitud "Vali siit", annab veateate
                  if ($select_option === 'Vali siit') {
                    $error_message = 'Viga: Vormi täitmiseks on vajalikud kõik väljad.';
                  } else {
                    // kalkulatsioon (korrutamine) 
                    $result = number_format($input_value1 * $input_value2) . ' €';
                    // kui on valitud sülearvutite vahel
                    if ($select_option !== '') {
                      $result .= ' (' . $select_option . ')';
                    }
                  }  
                } else {
                    $error_message = 'Viga: Vormi täitmiseks on vajalikud kõik väljad.';
                }
            }
            ?>

            <!-- vormi kuvamine -->
            <form action="" method="POST">

                <div class="form-group">
                    <label class="mb-4" for="select_option">JÄÄTIS</label>
                    <br>
                    <select class="form-control" id="select_option" name="select_option">
                        <option value="Vali siit">Vali siit</option>
                        <option value="Valio">Valio</option>
                        <option value="Premium">Premium</option>
                        <option value="Balbiino">Balbiino</option>
                    </select>
                </div>
                <br>

                <div class="form-group">
                    <label for="input_value1">Hind €</label>
                    <input type="number" class="form-control" id="input_value1" name="input_value1" required min="1">
                </div>
                <br>

                <div class="form-group">
                    <label for="input_value2">Kogus</label>
                    <input type="number" class="form-control" id="input_value2" name="input_value2" required min="1">
                </div>
               <br>
                
                <button type="submit" class="btn btn-primary">Arvuta</button>
            </form>

            <!-- kalkulatsiooni tulemus või vead -->
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if ($result !== '') {
                    echo '<div class="alert alert-success mt-4" role="alert">KOKKU: ' . $result . ' </div>';
                } elseif ($error_message !== '') {
                    echo '<div class="alert alert-danger mt-4" role="alert">' . $error_message . '</div>';
                }
            }
        
            ?>
        </div>



      








      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+Wy1q5L4LOhG9cAtI/KD5SBrXbYB/JQOp6u" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  </body>
</html>