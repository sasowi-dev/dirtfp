<!DOCTYPE HTML>
<html lang="ko">
<head>
<meta charset="utf-8">
<?php include '../dependencies.php';?>
  </head>
  <body>
<?php include '../event.php';?>
<?php include '../header.php';?>
   
<div>

      <main
        aria-labelledby="pageTitle"
        class="flex items-center justify-center h-screen bg-gray-100 dark:bg-dark dark:text-light"
      >
      
        <div class="p-4 space-y-4">
          <div class="flex flex-col items-start space-y-3 sm:flex-row sm:space-y-0 sm:items-center sm:space-x-3">

            <div class="space-y-2">
              <h1 id="pageTitle" class="flex items-center space-x-2">

                <span class="text-xl font-medium text-gray-600 sm:text-2xl dark:text-light">
                다운로드중 입니다...
                </span>
              </h1>
              <p class="text-base font-normal text-gray-600 ">앱을 사용한다면 PC에서 <span class="text-blue-500 underline hover:text-blue-700 ">flipstore.withun.link/down?package=<span id="package"></span></span>을 입력하세요.<br>
                PC라면, 팝업차단을 끄시거나 자바스크립트를 활성화 한 후 새로고침 하세요.<br>
                창이 닫히지 않는다면 <a href="javascript:history.back()" class="text-blue-500 underline hover:text-blue-700 ">이전 페이지</a>로 돌아가세요.
              </p>
            </div>
          </div>

        </div>
      </main>
 

    </div>
    <script>
      const queryString = window.location.search;
     const urlParams = new URLSearchParams(queryString);
      const package = urlParams.get('package');
      document.getElementById("package").innerHTML = package;
      window.open('https://quik.flipstore.withun.link/'+package);
    </script>
<?php include '../footer.php';?>
</body>
</html>
