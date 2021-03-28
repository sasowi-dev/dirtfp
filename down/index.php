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
                  <br><br><br><br>
                  <img id="url2qr">
                  <br>
                  <small>PC에서 QR코드를 스캔하세요</small><br>
                </center>
                <button onclick="installer()" class="flex items-center align-middle py-2 bg-white shadow-md  rounded-3xl text-gray-800 text-sm font-semibold ml-3 border border-gray-200 hover:shadow-xl transition-all w-36  focus:outline-none">   <svg class="h-8 px-4" viewBox="0 0 36 36"><path class="ng-tns-c17-1" d="M16 16v14h4V20z" fill="#34A853"></path><path class="ng-tns-c17-1" d="M30 16H20l-4 4h14z" fill="#4285F4"></path><path class="ng-tns-c17-1" d="M6 16v4h10l4-4z" fill="#FBBC05"></path><path class="ng-tns-c17-1" d="M20 16V6h-4v14z" fill="#EA4335"></path><path class="ng-tns-c17-1" d="M0 0h36v36H0z" fill="none"></path></svg>설치</button>
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
      document.getElementById("url2qr").setAttribute("src", "https://api.qrserver.com/v1/create-qr-code/?size=150x150&data="+"http://fpcdn.withun.link/"+package+".apk");
   function installer(){
           const queryString = window.location.search;
     const urlParams = new URLSearchParams(queryString);
      const package = urlParams.get('package');
     window.open("https://fpcdn.withun.link/"+package+".apk","_self"); 
   }
      
       
    </script>
<?php include '../footer.php';?>
</body>
</html>
