<!doctype html>
<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <?php include '../dependencies.php'; ?>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
		  <link rel='stylesheet' type='text/css' href='gridonly-bootstrap.css' />
    </head>

    <body>

	<?php include '../event.php'; ?>
<?php include '../header.php'; ?>
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
 </p>
  </center>
    </section>
		    <?php include '../footer.php'; ?>
	  </body>

	
</html>
