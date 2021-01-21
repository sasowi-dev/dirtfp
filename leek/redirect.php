
<!doctype html>
<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <?php include '../dependencies.php'; ?>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    </head>

    <body>
	<?php include '../event.php'; ?>
 <div class="bg-red-700 text-red-200 md:text-center py-2 px-4">
리크봇의 링크는 절대 홍보가 아닙니다!
</div>
        <!-- 제목부분 -->
            <header  class="shadow bg-white index9 flex items-center justify-between flex-wrap p-6 sticky top-0"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <div class="flex items-center flex-shrink-0 text-black mr-6">
      <!--웹페이지 기본 정보 -->
<a href="index.php"><img src="leekbot-logo.png" class="logobox" alt="Unlink"></a></div>
<style>
.index9{
	z-index:9999!important;
}
.logobox{
	height:50px;
}
.outline-only {
  -webkit-text-stroke: 0.015em black;
  color:#fff;
}

</style>

</header>
<div>
   	    <section class="">
        <div class="max-w-6xl mx-auto px-5 py-24 ">
          <div class="text-center mb-20">
<div>
<!--
    <div class='flex max-w-sm w-full bg-white shadow-md rounded-lg overflow-hidden mx-auto'>
        <div class='w-2 bg-gray-800'></div>

        <div class='flex items-center px-2 py-3'>
            <img class='w-10 h-10 object-cover rounded-full' alt='User avatar' src='https://images.unsplash.com/photo-1477118476589-bff2c5c4cfbb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=200&q=200'>
            
            <div class='mx-3'>
                <p class='text-gray-600' id="metacon">리크봇</p>
            </div>
        </div>
    </div>
</div>-->
<br>
<br>
            <h1 class="mb-2 leading-tight tracking-tight font-bold text-gray-800 text-2xl md:text-3xl">2초 뒤에 웹페이지로 이동!</h1>
            <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto" >웹페이지의 주소는 <span class="text-green-500 text-xl font-semibold" id="goingurl"></span>입니다.</p>
            <p class="text-gray-500 text-sm">본 링크는 <a href="#" class="text-indigo-600 hover:underline">리크봇</a>에 의해 생성되었습니다.</p>
            <div class="flex mt-6 justify-center">
            </div>
            <button class="h-14 px-6 py-2 font-semibold rounded-xl bg-indigo-600 hover:bg-indigo-500 text-white" onclick="redirectnow()">
            지금 이동!
          </button>
			
          </div>
   </section>
   
	<script>
    var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = window.location.search.substring(1),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
        }
    }
};

    var redomain = getUrlParameter('redomain');

document.getElementById('goingurl').innerHTML = redomain;
setTimeout(function(){ redirectnow() }, 1000);
function redirectnow(){
  location.replace(redomain);
}

</script>
	  </body>

</html>