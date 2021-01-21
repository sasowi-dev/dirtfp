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
  <h5>#<strong>모임챗 메인</strong></h5>
      <div id="user-container">
        <div hidden id="user-pic"></div>
        <div hidden id="user-name"></div>
        <button hidden id="sign-out" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-color-text--white">
         로그아웃
        </button>
           <button hidden id="sign-in" class="mdl-js-ripple-effect mdl-button mdl-js-button mdl-button--raised mdl-color--white mdl-color-text--black googlesso">
          <img src="https://i.imgur.com/ILEFZSl.png" width="18px" alt="Google Icon">Google로 로그인
        </button>
      </div>
    </div>
  </header>
<?php include '../menu.php';?>
  <main class="mdl-layout__content ">


	
<!-- The Modal -->
<div id="myrulebox" class="modal">


  <!-- Modal content -->
  <div class="rulebox-content">
  <a href="javascript:hiderule()">
    <span class="close">&times;</span>
    </a>
    <p>규칙을 여기에 입력</p>  </div>

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
<script src="Nmgnpud.js"></script>
</body>
</html>
