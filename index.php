<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://unpkg.com/pdf-lib"></script>
    <script
    src="https://kit.fontawesome.com/22e77351d3.js"
    crossorigin="anonymous"
    ></script>
    <title>Book</title>
  </head>
  <body>

    <button id="prevBtn">
      <i class="fa-solid fa-arrow-left"></i>
    </button>

    <!-- Book -->
    <div id="book" class="book">
      <!-- Paper -->
      <?php
        include('myData.php');
        $number = date('data');
        for ($i = 1; $i < $number; $i++) {
          echo'
          <div id="p'.$i.'" class="paper">
          <!-- Front -->
          <div class="front">
            <!-- Contact -->
            <div class="frontCont">
              <h1>' . $i . '</h1>
            </div>
          </div>
          <!-- Back -->
          <div class="back">
            <!-- Contact -->
            <div class="backCont">
              <h1>' . $i . ',5</h1>
            </div>
          </div>
        </div>
        <style>
          #p'. $i .' {
            z-index: '. $number - $i .';
          }
        </style>
        ';
        }
      ?>
      <div id="pF" class="paper">
          <!-- Front -->
          <div class="front">
            <!-- Contact -->
            <div class="frontCont">
              <h1>F</h1>
            </div>
          </div>
          <!-- Back -->
          <div class="back">
            <!-- Contact -->
            <div class="backCont">
              <h1>F,5</h1>
            </div>
          </div>
        </div>
        <style>
          #pF {
            z-index:0;
          }
        </style>
    </div>
    
    <button id="nextBtn">
      <i class="fa-solid fa-arrow-right"></i>
    </button>

    <script src="myScript.js"></script>
    <script src="pdfData.js"></script>
    
  </body>
</html>
