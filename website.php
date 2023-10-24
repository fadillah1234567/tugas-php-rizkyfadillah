<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan Soal Algoritma Bahasa PHP</title>
  <style>
    body   { text-align: center; font-family: "Trebuchet MS", serif; }
    h1,h2  { margin-bottom: 0; }
    hr     { width: 80%; }
    form   { margin-top: 2rem; }
    canvas { margin: 1.4rem; }
    p      { margin:0.1rem }
    .result {
      margin: 1rem auto; 
      padding: 0.25rem 0.25rem 1rem 0.25rem;
      background-color: ghostwhite;
      width: 50%;
      display: flex;
      flex-direction: column;
      align-items: center;
    }
  </style>
</head>
<body>
  <h1>Kode Program PHP - Keliling dan Luas Persegi Panjang</h1>
  <hr>
  <form action="" method="post">
    <div>
      Panjang Persegi: <input type="text" name="panjang" size="1">
      Lebar Persegi: <input type="text" name="lebar" size="1">
      <input type="submit" name="submit">
    </div>
  </form>
   
    <?php
      if (isset($_POST['submit'])) {
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];
 
        echo "<div class='result'>";
        echo "<h2>Hasil Kode Program</h2>";
        echo "<span>(panjang: $panjang, lebar: $lebar)</span>";
    ?>
        <canvas id="myCanvas" width="200px" height="100px"></canvas>
        <script>
          var c = document.getElementById("myCanvas");
          var ctx = c.getContext("2d");
          ctx.beginPath();
          ctx.rect(0, 0, 200, 100);
          ctx.stroke();
        </script> 
    <?php
        $keliling_persegi_panjang = (2 * $panjang) + (2 * $lebar); 
        $luas_persegi_panjang = $panjang * $lebar;
 
        echo "<p>Keliling persegi panjang = (2 * $panjang) + (2 * $lebar) 
        = $keliling_persegi_panjang </p>";
        echo "<p>Luas persegi panjang = $panjang * $lebar
        = $luas_persegi_panjang </p>";
        echo "</div>";
      }
    ?>
   
</body>
</html>
