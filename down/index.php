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

              <p class="text-base font-normal text-gray-600 ">
                <center>
                  <img id="url2qr">
                  <br>
                  <small>PC에서 QR코드를 스캔하거나</small><br>
                  <small>fpcdn.withun.link/<br><span id="url"></span><br>방문하세요.</small>
                </center>
                창이 닫히지 않는다면 <a href="javascript:history.back()" class="text-blue-500 underline hover:text-blue-700 ">이전 페이지</a>로,<br>
                '이름 바꾸기'이용해서<br>이름 뒤에 '.apk'를 붙이세요.
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
      document.getElementById("url2qr").setAttribute("src", "https://api.qrserver.com/v1/create-qr-code/?size=150x150&data="+"http://fpcdn.withun.link/"+package);
      document.getElementById("url").innerHTML = package;
    </script>
<?php include '../footer.php';?>
</body>
</html>
