<?php include 'header.php'; ?>


      <div class="container">
      <div class="row">
        <div class="col-sm-1">
          </div>
          <div class="col-sm-4">

          
            <div style="padding-top: 0px;">
            
          <?php

          //faili nimi
          $allikas = 'palkamind.txt'; 
          //faili avamine
          $minu_fail = fopen($allikas, 'r'); 
          //faili sisu kuvamine
          $faili_sisu = fread($minu_fail, filesize($allikas)); 
         
         //echo $faili_sisu;

        $read = explode("\n", $faili_sisu);
         
         foreach ($read as $rida) {
            
           $osad = explode(" | ",$rida);

         if (!empty($osad) && count($osad) >= 4) {
              //ülemine pealkiri
              echo '<h1><b>' . $osad[0] . '</b></h1>';
              //alumine pealkiri
              echo '<h1 class="mb-3"><b>' . $osad[1] . '</b></h1>'; 
              //alapealkiri
              echo '<h5 class="mb-3">' . $osad[2] . '</h5>'; 
              //teksti kuvamine
              echo '<p class="mb-3">' . $osad[3] .'</p>'; 
             
          }
           }
        //faili sulgemine
          fclose($minu_fail); 

          ?>

          <a href="palkamind.txt" download="palkamind.txt">
            <button type="button" class="btn btn-primary btn-lg"> Palka mind <i class="bi bi-caret-right-fill"></i></button>
           </a>
          </div>  
         </div>
         <div class="col-sm-2">
        </div>
         
          <div class="col-sm-4">
            <div style="padding-top: 50px;">

            <?php

          $allikas = "palkamind.txt"; 
           //faili avamine
          $minu_fail = fopen($allikas, 'r');
          //faili sisu kuvamine
         $faili_sisu = fread($minu_fail, filesize($allikas)); 
          
        $read = explode("\n", $faili_sisu);

          foreach ($read as $rida) {

            $osad = explode("|", $rida);
          if (!empty($osad) && count($osad) >= 4) {

             if (isset($osad[4])) {
                //pildi nimi
                $pilt = $osad[4]; 
               // Pildi kuvamine
                echo '<img src="' . $pilt. '" alt="Pilt" style="border-radius: 95% 5% 93% 7% / 53% 63% 37% 47% ; width: 60%;">'; 
                
            }
          }
          }
        //faili sulgemine
         fclose($minu_fail); 

          ?>

          </div>
          </div>
          <div class="col-sm-1">
              </div>
          </div>
          
      

        <div class="col-sm-12 text-center">
        <div style="padding-top: 70px;">
        <h1 class="mb-3"><b>Minust</b></h1>
        </div>
        </div>
       
      <div class="col-sm-12 text-center">  
      <p class="mb-3">Minu parimad saavutused</p>
      </div>
      
      <div style="padding-bottom: 50px;">
      </div>

      <div class="row">
      <div class="col-sm-1">
          </div>
        <div class="col-sm-4">
          <div style="padding-bottom: 50px;">
          <img src="prill.jpg" alt="Pilt" style="width: 120%;">
          </div>
        </div>
        <div class="col-sm-2">
        </div>

        <div class="col-sm-4">
            <div style="padding-bottom: 50px;">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt necessitatibus nisi, soluta nulla, autem in dolores assumenda nobis tempore dolorem, rerum quas quaerat cum illum veniam magni quibusdam animi molestias.</p>  
          </div>  

          <div class="row sm-3">
            <div class="col-sm-4 text-center">
          <h1 class="my-1"><b>1+</b></h1>
            <p class="my-1">aastat</p>
            <p class="my-1">kogemust</p>
          </div>
          <div class="col-sm-4 text-center">
            <h1 class="my-1"><b>2+</b></h1>
              <p class="my-1">projekti</p>
              <p class="my-1">lõpetanud</p>
            </div>

            <div class="col-sm-4 text-center">
              <h1 class="my-1"><b>0</b></h1>
                <p class="my-1">ettevõttes</p>
                <p class="my-1">töötanud</p>
            </div>
          </div>

          <div class="row">
          <div class="col">
          <div style="padding-top: 20px;">
        </div>

        <?php

          $allikas = 'cv.txt';
          $minu_fail = fopen($allikas, 'a') or die("Ei saa faili avada");
        

         
          fclose($minu_fail);

          ?>
        <a href="cv.txt" download="cv.txt">
          <button type="button" class="btn btn-primary btn-lg"> Lae alla CV <i class="bi bi-box-arrow-in-down"></i></button>
         </a>  
        </div>
          </div>

        </div>
        <div class="col-sm-1">
        </div>
      </div>

     </div>
     <div style="padding-top: 50px;">
     </div>

     <div class="container-fluid bg-primary text-white py-4">
        <div class="row align-items-center">
          <div class="col sm-12 text-center">
            <br>
            <br>
            <br>
            
            <i class="bi bi-c-circle"></i>
            <p class="mb-0 d-inline">SinuNimi</p>
          </div>
          </div>
            <br>
           <div class="row">
            <div class="col-sm-12 d-flex justify-content-end">
            <p class="mb-0"><i class="bi bi-arrow-up"></i></p>
          </div>
          </div>
        
      </div>
     


    
      <?php include 'footer.php'; ?>