<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://unpkg.com/pdf-lib"></script>
    <script src="pdfData.js"></script>
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
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "data";
        $conn = new mysqli($servername, $username, $password, $dbname);


        $name = "demo";

        $sql = "SELECT `sum` FROM pages WHERE name = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $name);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        $number = $row["sum"];

        
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

    <script src="script.js"></script>
    
  </body>
</html>
