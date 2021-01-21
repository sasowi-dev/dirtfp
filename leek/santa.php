
<!doctype html>
<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <?php include '../dependencies.php'; ?>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    </head>

    <body>
	<?php include '../event.php'; ?>

        <!-- 제목부분 -->
            <header  class="shadow bg-white index9 flex items-center justify-between flex-wrap p-6 sticky top-0"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <div class="flex items-center flex-shrink-0 text-black mr-6">
      <!--웹페이지 기본 정보 -->
<a href="index.php"><img src="leekbot-logo.png" class="logobox" alt="Unlink"></a><span class="logobox">× Spotify</span></div>
<style>
.index9{
	z-index:9999!important;
}
.logobox{
	height:50px!important;
	font-size:25px;
}
.logobox-skills{
	height:25px!important;
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
<center>
            <h1 class="mb-2 leading-tight tracking-tight font-bold text-gray-800 text-2xl md:text-3xl">자, 여기 곡입니다.</h1>
			※ 본 리크봇 스킬은 국가에 따라 작동하지 않을 수도 있습니다
			
			<div id="christmas"></div>
			</center>
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

    var redomain = getUrlParameter('spotify');

document.getElementById('christmas').innerHTML = '<iframe src="https://open.spotify.com/embed/'+redomain+'" width="300" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>';

</script>
	  </body>

</html>