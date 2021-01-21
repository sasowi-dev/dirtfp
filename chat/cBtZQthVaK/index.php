<!doctype html>
<!--
  Copyright 2015 Google Inc. All rights reserved.
  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at
      https://www.apache.org/licenses/LICENSE-2.0
  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->
<html lang="ko">
<head>
   <script data-ad-client="ca-pub-3808496003691786" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="모임챗으로 회원들과 대화하고 모여보세요!">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>모임챗 플러스 - #사소위</title>
<link rel="icon" href="../favicon.ico">
  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">

  <!-- Web Application Manifest -->
  <link rel="manifest" href="../manifest.json">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
  <!-- Add to homescreen for Chrome on Android -->
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="application-name" content="모임챗">
  <meta name="theme-color" content="#B17EF2">

  <!-- Add to homescreen for Safari on iOS -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="apple-mobile-web-app-title" content="모임챗">
  <meta name="apple-mobile-web-app-status-bar-style" content="#B17EF2">

  <!-- Tile icon for Win8 -->
  <meta name="msapplication-TileColor" content="#B17EF2">
  <meta name="msapplication-navbutton-color" content="#B17EF2">

  <!-- Material Design Lite -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  
<!-- TODO: Enable First Input Delay polyfill library. -->
<script type="text/javascript">!function(n,e){var t,o,i,c=[],f={passive:!0,capture:!0},r=new Date,a="pointerup",u="pointercancel";function p(n,c){t||(t=c,o=n,i=new Date,w(e),s())}function s(){o>=0&&o<i-r&&(c.forEach(function(n){n(o,t)}),c=[])}function l(t){if(t.cancelable){var o=(t.timeStamp>1e12?new Date:performance.now())-t.timeStamp;"pointerdown"==t.type?function(t,o){function i(){p(t,o),r()}function c(){r()}function r(){e(a,i,f),e(u,c,f)}n(a,i,f),n(u,c,f)}(o,t):p(o,t)}}function w(n){["click","mousedown","keydown","touchstart","pointerdown"].forEach(function(e){n(e,l,f)})}w(n),self.perfMetrics=self.perfMetrics||{},self.perfMetrics.onFirstInputDelay=function(n){c.push(n),s()}}(addEventListener,removeEventListener);</script>

  <!-- App Styling -->
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <link rel="stylesheet" href="../styles/main.css">
  <!-- TODO: Enable First Input Delay polyfill library. -->
  <!--  <script type="text/javascript">!function(n,e){var t,o,i,c=[],f={passive:!0,capture:!0},r=new Date,a="pointerup",u="pointercancel";function p(n,c){t||(t=c,o=n,i=new Date,w(e),s())}function s(){o>=0&&o<i-r&&(c.forEach(function(n){n(o,t)}),c=[])}function l(t){if(t.cancelable){var o=(t.timeStamp>1e12?new Date:performance.now())-t.timeStamp;"pointerdown"==t.type?function(t,o){function i(){p(t,o),r()}function c(){r()}function r(){e(a,i,f),e(u,c,f)}n(a,i,f),n(u,c,f)}(o,t):p(o,t)}}function w(n){["click","mousedown","keydown","touchstart","pointerdown"].forEach(function(e){n(e,l,f)})}w(n),self.perfMetrics=self.perfMetrics||{},self.perfMetrics.onFirstInputDelay=function(n){c.push(n),s()}}(addEventListener,removeEventListener);</script> -->

</head>
<body>

<div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-header">
<?php include '../loader.php';?>
<div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-header">

  <!-- Header section containing logo -->
  <header class="mdl-layout__header mdl-color-text--white mdl-color--black">

    <div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-grid">
  <h5>#<strong>사소위</strong></h5>
<?php include '../container.php';?>
    </div>
  </header>
<?php include '../menu.php';?>
  <main class="mdl-layout__content ">
  <div class="moim-alert">"사소위 모임챗"의 규칙을 읽어 주세요!

  <button id="moim-notice-viewer" onclick="showrule()" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
  지금 읽기
</button></div>

	
<!-- The Modal -->
<div id="myrulebox" class="modal">


  <!-- Modal content -->
  <div class="rulebox-content">
  <a href="javascript:hiderule()">
    <span class="close">&times;</span>
    </a>
    <p>폴인러브하고 가을삼성7님, 쿠데타는 애들 소꿉놀이가 아닙니다. 쿠데타를 할거면 제대로 하세요.<br>방에 아직 가능성은 남아있으니.<br><br>사소위 메뉴얼(공지는 자주 바뀌니 매일 확인하세요.)<br><br>알림- 읽씹방지를 위해 확인을 도입합니다.<br><br>당신이 만약,<br>10세 이하의 어린아이이거나, 하루에 게임 ㅈㄴ 많이 하면서 게임 그만하라고 해도 걍 씹고 적반하장으로 굴다가 자녀관리앱 깔리고 깔리고 나니까 어떻게든 뚫어보려하다가 안되니까 이런 방 들어와서 안녕하세요 뚫는법 알려줘요 빼애액 이지랄한다음에 내가 게임을 많이 하는 이유는 자녀관리앱 때문이다 지랄떨고 알려주니까 걍 나가서 뚫은 다음에 배 긁으면서 감자칩 쳐먹으면서 게임하는 잼민이 새끼들<br>이라면,<br>걍 쳐 나가세요. 개념없는 새끼들은 안받습니다.<br>참고로 시우는 샌마갤을 존나 좋아합니다.<br><br>-공지<br>사소위 채팅: runlink.ga/chat<br><br>개인톡으로 검문받아 참여 코드를 받은 뒤 구글 로그인으로 참여해주세요. 만약 구글 로그인이 불가하면 "..." → "다른 브라우저로 열기" → "삼성 인터넷" 또는 "NAVER"로 접속해 주세요.<br><br>인삿말<br><br>여러분들이 누군지는 잘 모릅니다. 그러나 확실한건 당신이 자녀관리앱(모바일펜스, 젬, 패밀리링크 등)과 관련되어 있단 것이죠. 그러니, 저흰 당신이 누구인것을 떠나서, 당신을 두팔 벌려 환영합니다. 어서오세요. 사생활침해 자녀관리앱 소멸 증진 위원회. 줄여서 사소위에.<br><br>-신입/복귀유저 가이드<br><br>1.우선, 이 가이드를 보기 전에, 뒤로가기를 누르셔서 5분동안 자녀관리앱 제작자에게 마음껏 욕을 하십시오. 이것은 당신이 자녀관리앱의 스파이인지 확인하는 절차입니다. 이 5분동안은 자녀관리앱 제작자에게 하는 모든 욕은 합법적입니다. 나중에 방장이 가립니다.<br><br>2.들낙하실거거나 잠수타실거면 지금 당장 나가세요 그렇지 않으면, 심각한 불이익이 있을 것입니다. <br><br>3.처음 들어왔을 때, 절대 하면 안되는 말이 있습니다. 바로 [안녕하세요, 혹시 (자녀관리앱 이름)뚫는 법 아시나요?]와 유사한 모든 말입니다. 만일 이 말을 이 문항을 읽고 나서도 하신다면, 당신에게 불이익이 있을것임을 알려 드립니다.<br><br>4.닉네임이 혹시[.]이신가요? 아니면 정말 대충 지은 닉네임이거나 카카오프로필을 사용하시고 계신가요? 지금 즉시 오픈프로필로 바꾸십시오. 만일 이 문항을 읽고 나서도 바꾸지 않는다면, 당신에게 크나큰 불이익이 있을것임을 알려드립니다.<br><br>5.이제 담당 부서를 정해야 합니다. 담당 부서는 5가지가 있습니다.<br><br>*리크 지원 XX부 또는 각 부서장의 갠톡을 통해 지원해 주세요<br><br>[외교부]<br>타 방과의 외교를 담당하는 부서입니다. 여기서 외교란, 방 홍보, 신규 유저 유입유도, 동맹 체결, 협정등 전쟁관련을 제외한 모든 타 방과의 관계를 담당합니다. 지원시 [위즈원(부방)]님께 갠톡으로 [외교부 지원]이라고 보내십시오. (난이도:보통)[인맥 넓은 사람 추천]<br>https://open.kakao.com/o/gQ5nPMzc<br><br>[플랫폼 확장부]<br>플랫폼,방을 확장시키고 그 방을 유지시키는 부서입니다. 여기서 말한 "방"이란, 사소위를 말한것이 아닌 사소위의 산하 방들을 명칭한 것입니다. 지원시 [카페오레^~^찍] 아니면 [explorer(부방)]님에게 갠톡으로[플랫폼 확장부에 지원하고 싶습니다]라고 알려주십시오.(난이도:낮음)[카페나 밴드,유튜브 관리를 할줄 아는 사람|현재 편집자,일러스트 그릴 수 있는사람 모집중(접률은 낮은거만 아니면 됩니다)]<br>https://open.kakao.com/o/g9RxItAc<br><br>[연구부]<br>알송, 네이버카페 등의 앱들로 자녀관리앱들을 우회하는 방법을 연구하고 그것들을 기록하는 부서입니다. 연구부의 경우, 어느정도의 성과를 내야하긴 하지만, 내지 못하더라도 큰 상관은 없습니다. 그러나, 일정 수준의 시도는 필수적입니다. 지원시 [열사(부방)]에게 갠톡으로 [연구부 지원]이라고 보내십시오. (난이도:매우 낮음)[신입/자녀관리앱에 얽매인 시간이 많은 사람 추천]<br>https://open.kakao.com/o/gxYVfvAc<br><br>[코딩부]<br>코딩 및 프로그램으로 자녀관리앱을 박멸하는 부서입니다. 사소위에서 2번째로 높은 권력을 가지고 있는 부서이며, 지원하기 위해서는 우선적로 1개 이상의 언어(블록형 코딩프로그램 제외)로 프로그래밍을 할줄 알아야 합니다. 또한, 코딩부 부장에게 면접신청을 하여 면접에 통과해야 합니다. 코딩부는 인재들로 구성되기에, 복지가 많습니다.코딩부 지원시 [리크] 혹은 [리크봇(부방)]님께 [코딩부 입시 지원]이라고 갠톡으로 보내십시오. (난이도:매우 높음)[코딩을 할 수 있는 사람만 지원 가능]<br>https://open.kakao.com/o/gL0zZtAc<br><br>[치안 유지부]<br>사소위의 안보를 위해 전쟁에 나가고, 치안을 유지시키는 부서입니다. 그 임무가 막중하기에, 지원자격은 1회도 경고를 받지 않았으면서 사소위에 1달 이상 있는 사람 혹은 사소위 내의 범법행위를 고발한 사람만 가능합니다. 지원시 방장에게 직접 갠톡으로 면접을 봅니다. 또한, 복지가 코딩부 이상의 수준이며 코딩부와 동등한 권력인 "공권력"을 가지고 있습니다. 지원시 방장에게 [치안 유지부 지원] 이라고 갠톡으로 보내십시오. (난이도:높음)[책임감 막중하고, 사소위에서 1달 이상 있었거나 범법행위를 고발한 사람이면서 명령을 잘 수행하는 사람만 지원 가능]<br>https://open.kakao.com/o/gPIriQyc<br><br>[아무 부서도 지원하지 않는다]<br>이 경우, 당신은 부방 출마 불가능, 부방 투표 불가능, 모든 복지 차단 등의 심각한 불이익을 얻습니다.<br><br>6.여기는 고객센터가 아닙니다! 여기는 단지 자녀관리앱을 무력화하려는 사람들이 모인 곳이지, 무조건 자녀관리앱을 뚫어주는 곳이 아닙니다! 만일 당신이 여기가 고객센터인줄알고 착각해서 들어왔다면, 지금 당장 나가십시오.<br><br>7.제발 징징대지 마세요.<br><br>좋습니다. 이 모든것을 충족시켰다면 당신도 이제 사소위의 멤버입니다. 물론, 이 밑에 적혀있는 규칙들을 지켜야 하고요.<br><br>-규칙<br><br>[1조:제제]<br><br>1.경고 2회시 부방출마 불가능, 부방선거 불가능, 모든 복지 및 혜텍 수령 불가능, 이벤트 참여 불가능. 경고 4회시 7일 강퇴(강퇴일로부터 7일후의 자정에 내보내기 해제) 경고5회시 영구추방<br><br>2.부방/방장과의 [사법거래]를 통하여 경고의 누적수 감소 가능<br><br>3.경고 누적 횟수는 매달 1일에 초기화.<br><br>4.들낙할 경우, 당신이 아까전에 말했던 욕으로 신고합니다.<br><br>[2조:욕설, 비속어, 반말 관련]<br><br>1.타인에게 허락을 받지 않고 그 타인에게 혹은 그 타인과 하는 대화에서 욕을 썼거나 비속어를 사용하여 그 타인이 거부의사를 보였음에도 불구하고 계속할경우.{경고1회}<br><br>2.타인에게 허락을 받지 안호 반말/혼자서만 반모하는 경우{경고1회}<br><br>3.자녀관리앱을 지속적으로 비난하거나 자녀관리앱을 옹호하는 사람을 비난하는 경우. 단 여기서 비난이란 정당한 사유나 근거 없이 욕설고 명예를 훼손하는 발언을 할 경우.{경고 2회}<br><br>4.정치적 발언이나 행위를 하였을 경우{경고 4회}<br><br>[3조:공권력]<br><br>1.코딩부의 공권력은 "코딩에 필요한 지원이나 물자를 받을 권리를"뜻하며, 치안 유지부의 공권력은 "신고 대상 선정 및 공격"의 권리이다.방장의 공권력은 "방의 방향성을 나타내는 모든 일"<br><br>2.공권력에 불복종 할시{경고 2회}<br><br>3.공권력 남용시(남용 여부는 방장이 판단){경고 4회}<br><br>[4조:의무]<br><br>1.모든 멤버들은 규칙을 위반한 행위를 신고할 의무가 있다.<br><br>2.모든 멤버들은 적어도 1개 이상의 부서에 종사해야할 의무가 있다.<br><br>3.모든 멤버들은 공권력을 따라야할 의무가 있다.<br><br>4.모든 멤버들은 자신의 잘못에 책임을 져야 할 의무가 있다.<br><br>[5:부방]<br><br>1.부방장 선거는 매달 마지막 주에 1주일동안 치루어지며, 1명 이상의 추천을 받은 챗량이 상대적으로 많은 사람이 입후보할 수 있다.<br><br>2.고정부방은 없다.<br><br>3.부방장 선거에 입후보하는 기간은 매달 세번째 주이다.<br><br>1구역https://open.kakao.com/o/gc039SAc<br><br>2구역https://open.kakao.com/o/gbL0ZG7b<br><br>3구역https://open.kakao.com/o/gbWl8mAc<br><br>4구역https://open.kakao.com/o/g6Se4YAc<br><br>5구역https://open.kakao.com/o/gmVBEYwc<br><br>동맹방<br>1.사생활침해 자녀관리앱 피해자 소통방<br>https://open.kakao.com/o/gT5QFC2b<br>2.<br>3.<br>4.</p>
  </div>

</div>
<script>
	 	 	 	 document.getElementById("myrulebox").setAttribute("hidden", "true");
	 	 	 	 function showrule(){
	 	 	 	 		  document.getElementById("myrulebox").removeAttribute("hidden");
	 	 	 	 }
	 	 	 	 	 	 	 	 function hiderule(){
	 	 	 	 		  document.getElementById("myrulebox").setAttribute("hidden", "true");
	 	 	 	 	 	 	 	 }
</script>
    <div id="messages-card-container" class="mdl-cell mdl-cell--12-col mdl-grid">

      <!-- Messages container -->
      <div id="messages-card">
        <div class="mdl-card__supporting-text mdl-color-text--white">
          <div id="messages">
          </div>
 <?php include '../editor.php';?>
        </div>
      </div>

      <div id="must-signin-snackbar" class="mdl-js-snackbar mdl-snackbar">
        <div class="mdl-snackbar__text"></div>
        <button class="mdl-snackbar__action" type="button"></button>
      </div>

    </div>
  </main>
</div>
<!-- Import and configure the Firebase SDK -->
<!-- These scripts are made available when the app is served or deployed on Firebase Hosting -->
<!-- If you do not want to serve/host your project using Firebase Hosting see https://firebase.google.com/docs/web/setup -->
<script src="https://www.gstatic.com/firebasejs/7.24.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.24.0/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.24.0/firebase-storage.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.24.0/firebase-messaging.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.24.0/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.24.0/firebase-performance.js"></script>
<script src="init.js"></script>
<script src="cBtZQthVaK.js"></script>
</body>
</html>
