<!DOCTYPE HTML>
<html lang="ko">
<head>
<meta charset="utf-8">
<?php include 'dependencies.php';?>
  </head>
  <body>
<?php include 'event.php';?>
<?php include 'header.php';?>
<style>
.star {
  position: absolute;
  width: 2px;
  height: 2px;
  border-radius: 5px;
}

@keyframes twinkle {
  0% {
    transform: scale(1, 1);
    background: rgba(255, 255, 255, 0);
    animation-timing-function: linear;
  }
  40% {
    transform: scale(0.8, 0.8);
    background: rgba(255, 255, 255, 1);
    animation-timing-function: ease-out;
  }
  80% {
    background: rgba(255, 255, 255, 0);
    transform: scale(1, 1);
  }
  100% {
    background: rgba(255, 255, 255, 0);
    transform: scale(1, 1);
  }
}
</style>

<section
      class="homescreen m-0 flex flex-col w-screen justify-center bg-gray-800 h-80 text-gray-100  "
    >
<h1 class="text-5xl  my-auto mx-auto  md:mx-48 ">
<span class="inline-block rounded-full text-white bg-indigo-500 px-2 py-1 font-bold mr-3">메시징</span>의 변화,<br><span class="text-purple-500"><strong>삶의 변화.</strong></span><br>
    <span class="inline-block rounded-full text-gray-600 bg-gray-100 px-2 py-1 text-sm mr-3">2018년부터 시작된 그 여정으로 오픈소스와 소프트웨어 사용자들에게 더 나은 선택을 드립니다.</span>
<br>
  <div>
  <a class="donate-with-crypto"
     href="https://commerce.coinbase.com/checkout/1264ef29-e338-4a77-80fd-f5e01ddf1f05">
    Donate with Crypto
  </a>
  <script src="https://commerce.coinbase.com/v1/checkout.js?version=201807">
  </script>
</div>
  </h1>
    </section>
<script>
/*for (var i = 0; i < 100; i++) {
  var star =
    '<div class="star m-0" style="animation: twinkle ' +
    (Math.random() * 5 + 5) +
    's linear ' +
    (Math.random() * 1 + 1) +
    's infinite; top: ' +
    Math.random() * $(window).height() +
    'px; left: ' +
    Math.random() * $(window).width() +
    'px;"></div>';
  $('.homescreen').append(star);
}*/

</script>

<div class="px-6 py-8 dark:bg-gray-800 dark:text-gray-600">
        <div class="flex justify-between container mx-auto">
            <div class="w-full lg:w-8/12">
                <div class="flex items-center justify-between">
                    <h1 class="text-xl font-bold text-gray-700 md:text-2xl">포스트</h1>
                    <div>
                        <select class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option>최신순</option>
                            
                        </select>
                    </div>
                </div>
                <!--
형태
<div class="mt-6">
                    <div class="max-w-4xl px-10 py-6 bg-white rounded-lg shadow-md">
                        <div class="flex justify-between items-center"><span class="font-light text-gray-600"></span><a href="#" class="px-2 py-1 bg-gray-600 text-gray-100 font-bold rounded hover:bg-gray-500">Laravel</a>
                        </div>
                        <div class="mt-2"><a href="#" class="text-2xl text-gray-700 font-bold hover:underline">Build
                                Your New Idea with Laravel Freamwork.</a>
                            <p class="mt-2 text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Tempora expedita dicta totam aspernatur doloremque. Excepturi iste iusto eos enim
                                reprehenderit nisi, accusamus delectus nihil quis facere in modi ratione libero!</p>
                        </div>
                        <div class="flex justify-between items-center mt-4"><a href="#" class="text-blue-500 hover:underline">Read more</a>
                            <div><a href="#" class="flex items-center"><img src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80" alt="avatar" class="mx-4 w-10 h-10 object-cover rounded-full hidden sm:block">
                                    <h1 class="text-gray-700 font-bold hover:underline">Alex John</h1>
                                </a></div>
                        </div>
                    </div>
                </div>-->
<?php
  try {
  $con= new PDO('mysql:host=localhost:3306;dbname=blogfake', "root", "leegyubin!Lee06");
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
              <!-- <div class="mt-8">
                    <div class="flex">
                        <a href="#" class="mx-1 px-3 py-2 bg-white text-gray-500 font-medium rounded-md cursor-not-allowed">
                            previous
                        </a>
                    
                        <a href="#" class="mx-1 px-3 py-2 bg-white text-gray-700 font-medium hover:bg-blue-500 hover:text-white rounded-md">
                            1
                        </a>
                    
                        <a href="#" class="mx-1 px-3 py-2 bg-white text-gray-700 font-medium hover:bg-blue-500 hover:text-white rounded-md">
                            2
                        </a>
                    
                        <a href="#" class="mx-1 px-3 py-2 bg-white text-gray-700 font-medium hover:bg-blue-500 hover:text-white rounded-md">
                            3
                        </a>
                    
                        <a href="#" class="mx-1 px-3 py-2 bg-white text-gray-700 font-medium hover:bg-blue-500 hover:text-white rounded-md">
                            Next
                        </a>
                    </div>
                </div>-->
            </div>
            <div class="-mx-8 w-4/12 hidden lg:block">
                
                
                
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php';?>
</body>
</html>
