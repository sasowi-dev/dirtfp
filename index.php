<!DOCTYPE HTML>
<html lang="ko">
<head>
<meta charset="utf-8">
<?php include 'dependencies.php';?>
  </head>
  <body>
<?php include 'event.php';?>
<?php include 'header.php';?>
<div class="lg:2/6 xl:w-2/4 mt-20 lg:mt-40 lg:ml-16 text-left">
            <div class="text-4xl font-semibold text-gray-900 leading-none">
<img src="identity/slogan-1.png" alt="메시징의 변화를," class="h-14">
<img src="identity/slogan-2.png" alt="삶의 변화를," class="h-14">
  </div>
            <div class="mt-6 text-xl font-light text-true-gray-500 antialiased">PaperCore는 여태껏 경험하지 못한 메시징과 글자의 가능성을 2020년부터 나타냈습니다. 그리고, 그 여정은 오늘까지도 이어집니다.</div>
            <button class="mt-6 px-8 py-4 rounded-full font-normal tracking-wide bg-indigo-700 text-white outline-none focus:outline-none hover:shadow-lg hover:from-blue-700 transition duration-200 ease-in-out">
              자세히 알아보기
            </button>
          </div>
   <div class="mt-12 lg:mt-32 lg:ml-20 text-left">
            <bottom type="button" class="flex items-center justify-center w-12 h-12 rounded-full bg-cool-gray-100 text-gray-800 animate-bounce hover:text-gray-900 hover:bg-cool-gray-50 transition duration-300 ease-in-out cursor-pointer">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
            </bottom>
          </div>

<div class="px-6 py-8">
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
