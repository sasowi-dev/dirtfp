<!doctype html>
<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <?php include '../dependencies.php'; ?>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
		  <link rel='stylesheet' type='text/css' href='gridonly-bootstrap.css' />
    </head>

    <body>
	<?php include '../event.php'; ?>
 <script src="tra/translate_meta.js"></script>
        <!-- 제목부분 -->
            <header  class="shadow text-white bg-gray-800  index9 flex items-center justify-between flex-wrap p-6 sticky top-0"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <div class="flex items-center flex-shrink-0  mr-6 text-white bg-gray-800">
      <!--웹페이지 기본 정보 -->
<a href="index.php"><img src="leekbot-logo.png" class="logobox code-highlight bg-code-highlight" alt="Unlink"></a></div>
<style>
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
.code-highlight {
    border-radius: .1875rem;
    padding: .0625rem .1875rem;
    margin: 0 -.1875rem;
}
.bg-code-highlight {
    background-color: rgba(134,239,172,.25);
}
</style>

</header>

   	    <section class="text-white bg-gray-800 ">
        <div class="max-w-6xl mx-auto px-5 py-24 ">
          <div class="text-center mb-20">
            <h1 class=" title-font  mb-4 text-4xl font-extrabold leading-10 tracking-tight sm:text-5xl sm:leading-none md:text-6xl code-highlight bg-code-highlight">방장봇과 리크봇 연동 방법</h1>
            <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto">방장봇과 리크봇을 연동해봅시다.</p>
            <div class="flex mt-6 justify-center">
              <div class="w-16 h-1 rounded-full bg-blue-700 inline-flex"></div>
            </div>
          </div>
		  <div class="text-white bg-gray-800 font-mono">
 방장봇은 최근 떠오르는 카카오톡 오픈채팅의 라이징 스타로서, 리크봇과 같은 오픈채팅 팬이 만든 봇을 그대로 정지 먹이고 걷어차며 카카오에서 독자 개발한 AI 기능도 없고 자동 응답에 불과한 무능한 카카오톡 봇입니다.<br><br>
 해괴망측한 프로필 사진과 구시대의 산물 니니즈 팬다 JR. 캐릭터를 그대로 버리면서 유저들이 관심을 가지고 언론에도 뉴스를 타게 되었습니다.<br>
 물론 봇 개발자인 저로서는 굉장히 실망인 일이지만 어쩔수 없는 일이잖아요? 그래서 방장봇의 마지막 한 조각도 버리지 않고 리크봇과 연동하여 활용하는 방법을 알아봅시다.<br><br>
 <strong>1. 방장봇 환영 메시지를 이용해 리크봇이 인사를 하게 만들어 보자</strong><br>
 <img src="https://i.imgur.com/KL8b2TR.png" alt="방장봇 인사말 설정 후 방장봇이 특정한 신호를 보내면 리크봇이 반응하는 이미지입니다."><br>
 보다시피 방장봇이 <td class="py-2 pr-2 font-mono text-xs text-violet-600 whitespace-nowrap border-t border-gray-200">🖐😀</td>이라는 메시지를 전송하자 리크봇이 환영 메시지를 전송했습니다.<br>
 방장봇의 설정 페이지에서 "<td class="py-2 pr-2 font-mono text-xs text-violet-600 whitespace-nowrap border-t border-gray-200">🖐😀</td>"를 환영 메시지로 설정하면 유저가 알아채지 못하게 리크봇이 인사말을 자동으로 응답합니다.<br>
 방장봇을 이렇게 연동하면 리크봇의 마케팅 효과와 환영기능이 배가 되며 이용자가 따뜻하게 인사를 받을 수 있습니다.<br><br>
  <strong>2. 빠놀이</strong><br>
  오픈채팅을 자주 사용하는 유저라면 빠놀이는 아시죠? 일종의 눈치 게임인데 새벽 12시 00분 00초 자정에 누가 먼저 도착하는지를 대결하는 게임입니다.<br>
  이를 방지하기 위해 유튜브에서는 <td class="py-2 pr-2 font-mono text-xs text-violet-600 whitespace-nowrap border-t border-gray-200">자신의 친구 수</td>나 <td class="py-2 pr-2 font-mono text-xs text-violet-600 whitespace-nowrap border-t border-gray-200">머리카락 수</td> 등으로 비꼬거나 크리에이터가 나서서 1을 먼저 외치는 등의 경우가 있으나<br>
  오픈채팅에서는 불가능하기 때문에 방장봇이 12시에 <td class="py-2 pr-2 font-mono text-xs text-violet-600 whitespace-nowrap border-t border-gray-200">자정입니다.</td>라고 메시지를 매일 보내게 하면 리크봇이 빠놀이를 우선적으로 방지하기 위해 <td class="py-2 pr-2 font-mono text-xs text-violet-600 whitespace-nowrap border-t border-gray-200">---빠놀이 금지선---</td>을 전송합니다.
  </div>
    </section>
	  </body>

</html>