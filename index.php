<!DOCTYPE HTML>
<html lang="ko">
<head>
<meta charset="utf-8">
<?php include 'dependencies.php';?>
  </head>
  <body>
<?php include 'event.php';?>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
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
<nav class="relative bg-gray-800 text-white border-gray-300 text-gray-900">
<div class="container mx-auto flex justify-between">
<a href="https://withun.link">
<div class="flex items-center flex-no-shrink relative block p-4 lg:p-6 text-xl text-blue-600 font-bold">
<img src="https://withun.link/identity/Group%201.svg" class="h-5" alt="페이퍼코어 로고">PaperCore</div></a>
<ul class="flex">



<li class="hoverable hover:bg-indigo-800 text-white">
<a href="#" class="relative block py-6 px-4 lg:p-6 text-sm lg:text-base font-bold hover:bg-blue-800 hover:text-white">서비스</a>
<div class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-indigo-800">
<div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
<div class="w-full text-white mb-8">
<h2 class="font-bold text-2xl">사용자를 위해 사용자 중심적으로 생각한 서비스</h2>
<p>리크봇부터 모임챗까지. 상상하지 못했던 혁신적인 서비스.</p>
</div>
<ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
<div class="flex items-center">
<svg class="h-8 mb-3 mr-3 fill-current text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
</svg>
<h3 class="font-bold text-xl text-white text-bold mb-2">리크봇</h3>
</div>
<p class="text-gray-100 text-sm">반년간 함께한, 반년간 함께할 방의 활력 충전 AI 봇.</p>
<div class="flex items-center py-3">
<svg class="h-6 pr-3 fill-current text-blue-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
<path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"></path>
</svg>
<a href="https://withun.link/leek" class="text-white bold border-b-2 border-blue-300 hover:text-blue-300">더 알아보기</a>
</div>
</ul>
<ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r-0 lg:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
<div class="flex items-center"> <svg class="h-8 mb-3 mr-3 fill-current text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
</svg>
<h3 class="font-bold text-xl text-white text-bold mb-2">Coming Soon</h3>
</div>
<p class="text-gray-100 text-sm">Coming Soon</p>
<div class="flex items-center py-3">
<svg class="h-6 pr-3 fill-current text-blue-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
<path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"></path>
</svg>
<a href="https://withun.link/#" class="text-white bold border-b-2 border-blue-300 hover:text-blue-300">Coming Soon</a>
</div>
</ul>
<ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-b-0 sm:border-r md:border-b-0 pb-6 pt-6 lg:pt-3">
<div class="flex items-center">
<svg class="h-8 mb-3 mr-3 fill-current text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
<path d="M2 4v14h14v-6l2-2v10H0V2h10L8 4H2zm10.3-.3l4 4L8 16H4v-4l8.3-8.3zm1.4-1.4L16 0l4 4-2.3 2.3-4-4z"></path>
</svg>
<h3 class="font-bold text-xl text-white text-bold mb-2">Unlink Developers</h3>
</div>
<p class="text-gray-100 text-sm">페이퍼코어와 함께하는 개발 API와 코딩 가이드</p>
<div class="flex items-center py-3">
<svg class="h-6 pr-3 fill-current text-blue-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
<path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"></path>
</svg>
<a href="#" class="text-white bold border-b-2 border-blue-300 hover:text-blue-300">Coming soon</a>
</div>
</ul>
<ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 pb-6 pt-6 lg:pt-3">
<div class="flex items-center">
<svg class="h-8 mb-3 mr-3 fill-current text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
<path d="M9 12H1v6a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-6h-8v2H9v-2zm0-1H0V5c0-1.1.9-2 2-2h4V2a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v1h4a2 2 0 0 1 2 2v6h-9V9H9v2zm3-8V2H8v1h4z"></path>
</svg>
<h3 class="font-bold text-xl text-white text-bold mb-2">더 스위치 WARP</h3>
</div>
<p class="text-gray-100 text-sm">다른 VPN보다 강력하지만 저가로 지원하는 인터넷의 스위치.</p>
<div class="flex items-center py-3">
<svg class="h-6 pr-3 fill-current text-blue-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
<path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"></path>
</svg>
<a href="#" class="text-white bold border-b-2 border-blue-300 hover:text-blue-300">Coming Soon</a>
</div>
</ul>
</div>
</div>
</li>

</ul>
</div>
</nav>
  <style>
  .mega-menu {
    display: none;
    left: 0;
    position: absolute;
    text-align: left;
    width: 100%;
  }
  .hoverable {
    position: static;
  }
  .hoverable > a:after {
    content: "\25BC";
    font-size: 10px;
    padding-left: 6px;
    position: relative;
    top: -1px;
  }
  .hoverable:hover .mega-menu {
    display: block;
  }
  .toggleable > label:after {
    content: "\25BC";
    font-size: 10px;
    padding-left: 6px;
    position: relative;
    top: -1px;
  }
  .toggle-input {
    display: none;
  }
  .toggle-input:not(checked) ~ .mega-menu {
    display: none;
  }
  .toggle-input:checked ~ .mega-menu {
    display: block;
  }
  .toggle-input:checked + label {
    color: white;
    background: #2c5282;
  }
  .toggle-input:checked ~ label:after {
    content: "\25B2";
    font-size: 10px;
    padding-left: 6px;
    position: relative;
    top: -1px;
  }

  </style>
<h1 class="text-5xl  my-auto mx-auto  md:mx-48 ">
<span class="inline-block rounded-full text-white bg-indigo-500 px-2 py-1 font-bold mr-3">메시징</span>의 변화,<br><span class="text-purple-500"><strong>삶의 변화.</strong></span><br>
    <span class="inline-block rounded-full text-gray-600 bg-gray-100 px-2 py-1 text-sm mr-3">2018년부터 시작된 그 여정으로 오픈소스와 소프트웨어 사용자들에게 더 나은 선택을 드립니다.</span>
</h1>
    </section>
<script>
for (var i = 0; i < 100; i++) {
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
}

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
