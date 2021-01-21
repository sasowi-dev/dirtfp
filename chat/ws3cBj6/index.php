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
  <title>모임챗 플러스 - #데모</title>
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
  <h5>#<strong>사용 신청하기</strong></h5>
<?php include '../container.php';?>
    </div>
  </header>
<?php include '../menu.php';?>
  <main class="mdl-layout__content ">
  <div class="moim-alert">"사용 신청하기 모임챗"의 규칙을 읽어 주세요!

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
    <p><h1>사용 신청하기</h1>모임챗은 언링크의 홈서버로 24시간 365일 운영되고 있습니다. 따라서 이자리에 당신의 모임챗을 세운다는것은 참 기념비적인 일입니다.<br>그러나 현재는 없지만 나중엔 이 채팅을 악용하는 유저가 점차 늘어날것이고 이에 따라 마땅한 가이드라인을 제시해야 합니다. 그래서, 이번엔 모임챗 생성 자격 요건을 안내드리겠습니다.<br><h5>기본적인 규칙</h5><ul><li>방의 주제가 운영정책에 위배되어선 안됩니다.</li><li>방의 개설자는 최근 6개월 내 반정부 사이트 및 음란물 배포 사이트에 접속한 기록이 없어야 합니다.( 일간 베스트 저장소 등)</li><li>방의 개설자는 언제나 이 방 개설 채팅에서 연락이 가능해야 하며 만약 이에 불응하고 6개월간 대화내용이 없다면 무기한 이용자 보호조치가 시행됩니다.</li></ul>이를 모두 읽고도 모임챗 사용 신청을 원하신다면 아래 신청란으로 신청해 주세요. 저희는 따뜻하게 당신을 맞을 준비가 되었습니다. 자! 이제 이 창을 닫고 신청을 시작해 보세요.</p>  </div>

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
<script src="ws3cBj6.js"></script>
</body>
</html>
