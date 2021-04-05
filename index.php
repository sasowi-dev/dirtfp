<!DOCTYPE HTML>
<html lang="ko">
<head>
<meta charset="utf-8">
<?php include 'dependencies.php';?>
  </head>
  <body>
<?php include 'event.php';?>
   <section class="min-h-screen flex flex-col bg-white">
<nav>
<div class="px-4 py-6">
<img src="https://flipstore.withun.link/identity/Group%201.svg">
</div>
</nav>
<div class="flex flex-1 items-center justify-center">
<div class="rounded-lg sm:border-2 px-4 lg:px-24 py-16 lg:max-w-xl sm:max-w-md w-full text-center">
<div class="text-center">
<h1 class="font-bold text-3xl mb-8 w-full text-gray-600">
앱 다운 받기
<p class="font-light text-gray-500 text-xs">앱으로 FP Play에서 다양한 어플리케이션, 게임을 다운로드하고 플레이하세요.</p>
</h1>
<div class="py-2">
<a href="https://downapi.cafe.naver.com/v1.0/cafes/article/file/9846d6d4-8fd4-11eb-9ffa-0050568d055f/download">
<button class=" border-2 border-gray-100 focus:outline-none bg-white-600 text-black font-bold block w-full p-2 rounded-full shadow-md ">
1.2 다운로드
</button>
  </a>
<a href="https://downapi.cafe.naver.com/v1.0/cafes/article/file/3b7bdf37-8f0e-11eb-a9a5-0050568d80e1/download">
<button class=" border-2 border-gray-100 focus:outline-none bg-white-600 text-black font-bold block w-full p-2 rounded-full shadow-md ">
브라우저 다운로드
</button>
  </a>
</div>
</div>
</div>
</div>
</section>
    <script>
      function appdown(package){
       window.open("https://flipstore.withun.link/application-cdn/"+package+".apk","_self"); 
      }
    </script>
<?php include 'footer.php';?>
</body>
</html>
