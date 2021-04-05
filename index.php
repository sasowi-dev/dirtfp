<!DOCTYPE HTML>
<html lang="ko">
<head>
<meta charset="utf-8">
<?php include 'dependencies.php';?>
  </head>
  <body>
<?php include 'event.php';?>
<?php include 'header.php';?>

    <div class="mt-16">
 <div class="glide heropeek">
    <div class="glide__track" data-glide-el="track">
      <ul class="glide__slides">
        <img class="glide__slide" src="promo/1.png">
        <img class="glide__slide" src="promo/2.png">
        <img class="glide_slide" src="promo/3.png">
      </ul>
    </div>
  </div>
  <script>
    

var glideHeroPeek = new Glide('.heropeek', {
  type: 'carousel',
  animationDuration: 1000,
  autoplay: 3000,
  focusAt: '1',
  startAt: 1,
  perView: 1,
   // set a value to show the previous and next slides peeking in
  peek: {
    before: 20,
    after: 20
  },
  gap: 0
});

glideHeroPeek.mount();
      </script>
      <?php
  try {
  $con= new PDO('mysql:host=localhost:3306;dbname=fpstre', "chocolatekos", "leegyubin!Lee06");
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $query = "SELECT * FROM skills";
  //first pass just gets the column names
  print '<table class="min-w-full table-auto">';
  $result = $con->query($query);
  //return only the first row (we only need field names)
  $row = $result->fetch(PDO::FETCH_ASSOC);
  print " <tr>";
  foreach ($row as $field => $value){
   print ' <th></th>';
  } // end foreach
  print " </tr>";
  //second query gets the data
  $data = $con->query($query);
  $data->setFetchMode(PDO::FETCH_ASSOC);
  foreach($data as $row){
   print " <tr>";
   foreach ($row as $name=>$value){
   print " <td>$value</td>";
   } // end field loop
   print " </tr>";
  } // end record loop
  print "</table>";
  } catch(PDOException $e) {
   echo 'ERROR: ' . $e->getMessage();
  } // end try
 ?>
      
      <!--FP이외 제한구역 끝-->
</div>
    
<?php include 'footer.php';?>
</body>
</html>
