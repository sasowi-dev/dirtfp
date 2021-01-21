<!doctype html>
<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <?php include '../dependencies.php'; ?>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>

  <script>
    var cont=0;
function loopSlider(){
  var xx= setInterval(function(){
        switch(cont)
        {
        case 0:{
            $("#slider-1").fadeOut(400);
            $("#slider-2").delay(400).fadeIn(400);
            $("#sButton1").removeClass("bg-blue-800");
            $("#sButton2").addClass("bg-blue-800");
        cont=1;
        
        break;
        }
        case 1:
        {
        
            $("#slider-2").fadeOut(400);
            $("#slider-1").delay(400).fadeIn(400);
            $("#sButton2").removeClass("bg-blue-800");
            $("#sButton1").addClass("bg-blue-800");
           
        cont=0;
        
        break;
        }
        
        
        }},8000);

}

function reinitLoop(time){
clearInterval(xx);
setTimeout(loopSlider(),time);
}



function sliderButton1(){

    $("#slider-2").fadeOut(400);
    $("#slider-1").delay(400).fadeIn(400);
    $("#sButton2").removeClass("bg-blue-800");
    $("#sButton1").addClass("bg-blue-800");
    reinitLoop(4000);
    cont=0
    
    }
    
    function sliderButton2(){
    $("#slider-1").fadeOut(400);
    $("#slider-2").delay(400).fadeIn(400);
    $("#sButton1").removeClass("bg-blue-800");
    $("#sButton2").addClass("bg-blue-800");
    reinitLoop(4000);
    cont=1
    
    }

    $(window).ready(function(){
        $("#slider-2").hide();
        $("#sButton1").addClass("bg-blue-800");
        

        loopSlider();
     
        
    
    
    
    
    });

  
  </script>
	</head>

    <body>
	<?php include '../event.php'; ?>
<script src="https://www.gstatic.com/dialogflow-console/fast/messenger-cx/bootstrap.js?v=1"></script>
<df-messenger
  df-cx="true"
  location="asia-northeast1"
  chat-title="LeekBot"
  agent-id="d403fff2-b6e1-47ea-a78a-476f5a1aae68"
  language-code="ko"
></df-messenger>
 <!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-indigo-600">
  <div class="max-w-7xl mx-auto py-3 px-3 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between flex-wrap">
      <div class="w-0 flex-1 flex items-center">
        <span class="flex p-2 rounded-lg bg-indigo-800">
          <!-- Heroicon name: speakerphone -->
          <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
          </svg>
        </span>
        <p class="ml-3 font-medium text-white truncate">
          <span class="md:hidden">
            팀샐 팬방 VS 리크봇 로그를 문의하여 요청
          </span>
          <span class="hidden md:inline">
            팀샐 팬방에서의 리크봇 밴에 대해 로그를 투명하게 공개합니다. 요구시 Google Drive 링크를 전송합니다
          </span>
        </p>
      </div>

    </div>
  </div>
</div>
        <!-- 제목부분 -->
            <header  class="shadow bg-white index9 flex items-center justify-between flex-wrap p-6 sticky top-0"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <div class="flex items-center flex-shrink-0 text-black mr-6">
      <!--웹페이지 기본 정보 -->
<a href="index.php"><img src="leekbot-logo.png" class="logobox" alt="Unlink"></a></div>
<style>
html{
	  scroll-behavior: smooth;
}
.index9{
	z-index:9999!important;
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
 <div class="sliderAx h-auto">
      <div id="slider-1" class="container mx-auto">
        <div class="bg-cover bg-center  h-auto text-white py-24 px-10 object-fill" style="background-image: url(bg-1.png)">
       <div class="md:w-1/2">
        <p class="font-bold text-sm uppercase text-black ">AI랑 대화하자!</p>
        <p class="text-4xl tracking-tight font-extrabold text-black sm:text-5xl md:text-6xl">리크봇</p>
        <p class="text-2xl mb-10 leading-none text-black ">"리크야"를 입력해 보세요.</p>
		<div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
              <div class="rounded-md shadow">
                <button class="opacity-50 w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-500 hover:bg-blue-700 md:py-4 md:text-lg md:px-10 shadow-md" disabled>
                  <i class="far fa-plus-square"></i> 초대하기
                </button>
              </div>
              <div class="mt-3 sm:mt-0 sm:ml-3">
                <a href="commands.php" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-blue-700 bg-blue-100 hover:bg-blue-200 md:py-4 md:text-lg md:px-10 shadow">
                 <i class="fas fa-list"></i> 가이드 읽어보기
                </a>
              </div>
            </div>
        </div>  
    </div>
      <br>
      </div>

      <div id="slider-2" class="container mx-auto">
        <div class="bg-cover bg-top  h-auto text-white py-24 px-10 object-fill" style="background-image: url(bg_profile_openchat_bot.png)">
       
  <div class="md:w-1/2">
        <p class="font-bold text-sm uppercase">AI랑 대화하자!</p>
        <p class="text-4xl tracking-tight font-extrabold text-white sm:text-5xl md:text-6xl">리크봇</p>
        <p class="text-2xl mb-10 leading-none">역대 최대 스케일의 카카오톡 봇</p>
		<div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
              <div class="rounded-md shadow">
                <button class="opacity-50 w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-500 hover:bg-blue-700 md:py-4 md:text-lg md:px-10 shadow-md" disabled>
                  <i class="far fa-plus-square"></i> 초대하기
                </button>
              </div>
              <div class="mt-3 sm:mt-0 sm:ml-3">
                <a href="commands.php" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-blue-700 bg-blue-100 hover:bg-blue-200 md:py-4 md:text-lg md:px-10 shadow">
                 <i class="fas fa-list"></i> 가이드 읽어보기
                </a>
              </div>
            </div>
        </div>  
         
    </div> 
      <br>
      </div>
    </div>
 <div  class="flex justify-between w-12 mx-auto pb-2">
        <button id="sButton1" onclick="sliderButton1()" class="bg-blue-400 rounded-full w-4 pb-2 " ></button>
    <button id="sButton2" onclick="sliderButton2() " class="bg-blue-400 rounded-full w-4 p-2"></button>
  </div>


	<section
      class=""
    >



<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>



<link href="https://unpkg.com/pattern.css" rel="stylesheet">

   </section>

   	    <section class="" id="onemorething">
        <div class="max-w-6xl mx-auto px-5 py-24 ">
          <div class="text-center mb-20">
            <h1 class=" title-font  mb-4 text-4xl font-extrabold leading-10 tracking-tight sm:text-5xl sm:leading-none md:text-6xl">언제 어디서나 메신저만 있다면</h1>
            <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto">“리크야”라고 보내세요. 리크봇은 언제든지 도울 준비가 되어 있습니다.</p>
            <div class="flex mt-6 justify-center">
			
            </div>
			<img src="bg-1.png">
          </div>

    </section>
      	    <section class="">
        <div class="max-w-6xl mx-auto px-5 py-24 ">
          <div class="text-center mb-20">
            <h1 class=" title-font  mb-4 text-4xl font-extrabold leading-10 tracking-tight sm:text-5xl sm:leading-none md:text-6xl">리크봇을 통해 내 채팅방을 빛내보세요!</h1>
            <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto">1월 12일부터 오픈한 리크봇은 그 만큼 발전도 많이 되었습니다. 좋아하는 기능을 봇에서 즐기세요!</p>
            <div class="flex mt-6 justify-center">
            </div>
          </div>
		 <div class="container mx-auto p-8">
		 <div class="flex flex-row flex-wrap -mx-2">
<div class="w-full sm:w-1/3 h-32 md:h-48 mb-4 sm:mb-0 px-2">
      <a class="block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-cover" href="#" title="Link" style="background-image: url(skill-img/kartrider.png);">
        
      </a>
    </div>
	<div class="w-full sm:w-1/3 h-32 md:h-48 mb-4 sm:mb-0 px-2">
      <a class="block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-cover" href="#" title="Link" style="background-image: url(skill-img/petition.png);">
        
      </a>
    </div>
<div class="w-full sm:w-1/3 h-32 md:h-48 mb-4 sm:mb-0 px-2">
      <a class="block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-cover" href="#" title="Link" style="background-image: url(skill-img/kakaoi.png);">
        
      </a>
    </div>
	</div>
	</div>
			 <div class="container mx-auto p-8">
		 <div class="flex flex-row flex-wrap -mx-2">
<div class="w-full sm:w-1/3 h-32 md:h-48 mb-4 sm:mb-0 px-2">
      <a class="block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-cover" href="#" title="Link" style="background-image: url(skill-img/movie.png);">
        
      </a>
    </div>
<div class="w-full sm:w-1/3 h-32 md:h-48 mb-4 sm:mb-0 px-2">
      <a class="block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-cover" href="#" title="Link" style="background-image: url(skill-img/stamp.png);">
        
      </a>
    </div>
<div class="w-full sm:w-1/3 h-32 md:h-48 mb-4 sm:mb-0 px-2">
      <a class="block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-cover" href="#" title="Link" style="background-image: url(skill-img/youtube.png);">
        
      </a>
    </div>
	</div></div>
    </section>
	
      	    <section class="">
        <div class="max-w-6xl mx-auto px-5 py-24 ">
          <div class="text-center mb-20">
            <h1 class=" title-font  mb-4 text-4xl font-extrabold leading-10 tracking-tight sm:text-5xl sm:leading-none md:text-6xl">왜 리크봇인가?</h1>
            <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto">리크봇은 2020년 10월 12일 오픈 이후 1달 안에 <strong>300명이 넘는</strong> 회원수를 모았습니다. </p>
            <div class="flex mt-6 justify-center">
              <div class="w-16 h-1 rounded-full bg-blue-700 inline-flex"></div>
            </div>
          </div>


    </section>
    <section class="">
        <div class="max-w-6xl mx-auto px-5 py-24 ">
          <div class="text-center mb-20">
            <h1 class=" title-font  mb-4 text-4xl font-extrabold leading-10 tracking-tight sm:text-5xl sm:leading-none md:text-6xl">사용자들의 평가</h1>
            <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto">리크봇을 사용한 유저들의 의견입니다..</p>
            <div class="flex mt-6 justify-center">
              <div class="w-16 h-1 rounded-full bg-blue-700 inline-flex"></div>
            </div>
          </div>
          <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 ">
            <div class="p-10 md:w-1/3 md:mb-0 mb-6 flex flex-col ">
              <div class="pattern-dots-md gray-light">
                <div class="rounded bg-white p-4 transform translate-x-6 -translate-y-6  "  >
                  <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-green-100 text-green-500 mb-5 flex-shrink-0 p-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path></svg>                </div>
                  <div class="flex-grow ">
                    <h2 class=" text-xl title-font font-medium mb-3">디자인에 관하여</h2>
                    <p class="leading-relaxed text-sm text-justify"></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="p-10 md:w-1/3 md:mb-0 mb-6 flex flex-col ">
              <div class="pattern-dots-md gray-light">
                <div class="rounded  bg-white  p-4 transform translate-x-6 -translate-y-6 ">
                  <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-blue-100 text-blue-500 mb-5 flex-shrink-0">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                  </div>
                  <div class="flex-grow">
                    <h2 class=" text-xl title-font font-medium mb-3">안정성에 관하여</h2>
                    <p class="leading-relaxed text-sm text-justify">
					</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="p-10 md:w-1/3 md:mb-0 mb-6 flex flex-col ">
              <div class="pattern-dots-md gray-light">
                <div class="rounded  bg-white  p-4 transform translate-x-6 -translate-y-6 ">
                  <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-yellow-100 text-yellow-500 mb-5 flex-shrink-0">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path></svg>
                  </div>
                  <div class="flex-grow">
                    <h2 class=" text-xl title-font font-medium mb-3">기능에 관하여</h2>
                    <p class="leading-relaxed text-sm text-justify">
                     방장봇이나 판다봇 같은경우 10개밖에 못쓰는데 리크봇은 더 많습니다.
					 </p>
                  </div>
                </div>
        </div>
    </section>
	   <section class="">
        <div class="max-w-6xl mx-auto px-5 py-24 ">
          <div class="text-center mb-20">
            <h1 class=" title-font  mb-4 text-4xl font-extrabold leading-10 tracking-tight sm:text-5xl sm:leading-none md:text-6xl">리크봇 지원 센터</h1>
            <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto">리크봇 사용 중 불편함을 해결하는 지원 센터입니다.</p>
            <div class="flex mt-6 justify-center">
              <div class="w-16 h-1 rounded-full bg-blue-700 inline-flex"></div>
            </div>
          </div>
		  <center>
      <div class="flex flex-wrap mt-10 justify-center">
        <div class="m-3">
          <a href="https://www.facebook.com/leekbotsupport" title="리크봇 공식 지원 센터"
             class="md:w-32 bg-white tracking-wide text-gray-800 font-bold rounded border-2 border-blue-600 hover:border-blue-600 hover:bg-blue-600 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
            <span class="mx-auto">페이스북</span>
          </a>
        </div>
        <div class="m-3">
          <a href="https://open.kakao.com/me/leekryty" title="Leekryty"
             class="md:w-32 bg-white tracking-wide text-gray-800 font-bold rounded border-2 border-yellow-500 hover:border-yellow-500 hover:bg-yellow-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
            <span class="mx-auto">카카오톡</span>
          </a>
        </div>
      </div>
  </center>
    </section>
	<!--<div class=" mt-8 w-full text-center">
<h1 class="text-3xl">리크봇을 사용하는 회원분들께 죄송합니다.</h1><br><br>
<p>2021.01.10까지 문제 해결을 위해 최대한 노력할것이며 이에 대한 일환으로 봇 "AI 시스템 변경" 및 "욕설 감지" 필터를 적용하겠습니다.
<br><br>
그리고 방장의 동의 없이 리크봇을 초대한 사용자에게는 적절한 제재를 가하겠습니다.</p>
</div>-->
	  </body>

</html>