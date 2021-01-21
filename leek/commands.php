<!doctype html>
<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <?php include '../dependencies.php'; ?>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
		  <link rel='stylesheet' type='text/css' href='gridonly-bootstrap.css' />
    </head>

    <body>
	<?php include '../event.php'; ?>

            <header  class="shadow bg-white index9 flex items-center justify-between flex-wrap p-6 sticky top-0"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <div class="flex items-center flex-shrink-0 text-black mr-6">
<a href="index.php"><img src="leekbot-logo.png" class="logobox" alt="리크봇"></a></div>
<style>

.index9{
	z-index:5!important;
}
.logobox{
	height:50px;
}

.floating {   
    animation-name: floating; 
    animation-duration: 3s; 
    animation-iteration-count: infinite; 
    animation-timing-function: ease-in-out; 
    margin-top: 5px; 
} 
  
@keyframes floating { 
    0% { transform: translate(0,  0px); } 
    50%  { transform: translate(0, 5px); } 
    100%   { transform: translate(0, -0px); }     
} 
.greyscale {
  -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
  filter: grayscale(100%);
}
.outline-only {
  -webkit-text-stroke: 0.015em black;
  color:#fff;
}
.hovbtn:hover {
  box-shadow: 0 0 11px rgba(33,33,33,.2); 
}
</style>

</header>

          <div class="container mx-auto px-6 sm:px-12 flex flex-col-reverse sm:flex-row items-center">
        <div class="sm:w-2/5 flex flex-col items-start mt-8 sm:mt-0">
    <br><br><br><br>
            <h1 class="text-4xl lg:text-6xl leading-none mb-4"><strong class="font-black">리크봇</strong> 스킬</h1>
            <p class="lg:text-lg mb-4 sm:mb-12">대화를 자유롭게. 기능을 유용하게.</p>
            <a href="https://open.kakao.com/me/leekryty" class="font-semibold text-lg bg-blue-500 hover:bg-blue-400 text-white py-3 px-10 rounded-full">서드파티 리크 스킬 신청하기</a>
        </div>
        <div class="sm:w-3/5">
            
        </div>
    </div>
   	    <section class="">
        <div class="max-w-6xl mx-auto px-5 py-24 ">
          <div class="text-center mb-20">
            <div class="flex mt-6 justify-center">
            </div>
          </div>

		  <center>
<p>
 <?php
  try {
  $con= new PDO('mysql:host=localhost:3306;dbname=leekcommands', "root", "leegyubin!Lee06");
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $query = "SELECT * FROM skills";
  //first pass just gets the column names
  print '<table class="min-w-full table-auto">';
  $result = $con->query($query);
  //return only the first row (we only need field names)
  $row = $result->fetch(PDO::FETCH_ASSOC);
  print " <tr>";
  foreach ($row as $field => $value){
   print ' <th><h1 class="text-4xl lg:text-6xl leading-none mb-4">오늘은 무엇을 할까요?</h1></th>';
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
 </p>
  </center>
    </section>
	  </body>

</html>
