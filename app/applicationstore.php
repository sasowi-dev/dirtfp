<!DOCTYPE HTML>
<html lang="ko">
<head>
<meta charset="utf-8">
<?php include '../dependencies.php';?>
  </head>
  <body>
<?php include '../event.php';?>
	  <?php include '../header.php';?>
    <div class="mt-16"  id="swup">
 <div class="glide herop">
    <div class="glide__track" data-glide-el="track">
      <ul class="glide__slides">
        <img class="glide__slide " src="../promo/1.png">
        <img class="glide__slide " src="../promo/2.png">
      </ul>
    </div>
  </div>
  <script>
    

var glideHeroPeek = new Glide('.herop', {
  type: 'carousel',
  animationDuration: 1000,
  autoplay: 3000,
  focusAt: '1',
  startAt: 1,
  perView: 1,
  gap: 0
});

glideHeroPeek.mount();
      </script>
      	<script>
		const modal = document.querySelector('.main-modal');
		const closeButton = document.querySelectorAll('.modal-close');

		const modalClose = () => {
			modal.classList.remove('fadeIn');
			modal.classList.add('fadeOut');
			setTimeout(() => {
				modal.style.display = 'none';
			}, 500);
		}

		function openModal(amnt,app) {
			document.getElementById("payamount").innerHTML = amnt;
			document.getElementById("prodnam").innerHTML = app;
			modal.classList.remove('fadeOut');
			modal.classList.add('fadeIn');
			modal.style.display = 'flex';
		}

		for (let i = 0; i < closeButton.length; i++) {

			const elements = closeButton[i];

			elements.onclick = (e) => modalClose();

			modal.style.display = 'none';

			window.onclick = function (event) {
				if (event.target == modal) modalClose();
			}
		}
	</script>
  
    <script>
      function appdown(package){
       window.open("https://flipstore.withun.link/application-cdn/"+package+".apk","_self"); 
      }
      function incompleteapp(){
	      alert('해당 어플리케이션은 아직 패키지 변조 대기열에 있습니다. 컴파일이 완료될 때 까지 기다려 주세요.');
      }
    </script>
	<div style="display:none;" class="main-modal fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster"
		style="background: rgba(0,0,0,.7);">
		<div
			class="border border-teal-500 shadow-lg modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
			<div class="modal-content py-4 text-left px-6">
				<!--Title-->
				<div class="flex justify-between items-center pb-3">
					<p class="text-2xl font-bold">결제 ($<span id="payamount"></span>)</p>
					<div class="modal-close cursor-pointer z-50">
						<svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
							viewBox="0 0 18 18">
							<path
								d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
							</path>
						</svg>
					</div>
				</div>
				<!--Body-->
				<div class="my-5">
					<div class="">
<div class="max-w-4xl  bg-white rounded-lg">
<div class="mt-2"><p class="text-2xl text-gray-700 font-bold hover:underline" id="prodnam"></p>
</div>
</div>
</div>
					<p class="text-xs text-gray-500 py-2 tracking-wider">결제 인증 방법</p>
					<figure class="flex rounded-xl  p-0">
  <div class="text-left ">
    <blockquote>
    </blockquote>
    <figcaption class="font-medium">
      <div class="text-gray-500">
       payments-fp@withun.link로 결제 관련 서류를 증명해 주세요.
      </div>
    </figcaption>
  </div>
</figure>
				</div>
				<!--Footer-->
				<div class="flex justify-end pt-2">
								</div>
			</div>
		</div>
	</div>
 <style>
		.animated {
			-webkit-animation-duration: 500ms;
			animation-duration: 500ms;
			-webkit-animation-fill-mode: both;
			animation-fill-mode: both;
		}

		.fadeIn {
			-webkit-animation-name: fadeIn;
			animation-name: fadeIn;
		}

		.fadeOut {
			-webkit-animation-name: fadeOut;
			animation-name: fadeOut;
		}

		@keyframes fadeIn {
			from {
				opacity: 0;
			}

			to {
				opacity: 1;
			}
		}

		@keyframes fadeOut {
			from {
				opacity: 1;
			}

			to {
				opacity: 0;
			}
		}
	</style>
      <?php
  try {
  $con= new PDO('mysql:host=localhost:3306;dbname=fpstre', "chocolatekos", "leegyubin!Lee06");
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $query = "SELECT * FROM skillgen2";
  //first pass just gets the column names
  print '<table class="min-w-full table-auto">';
  $result = $con->query($query);
  //return only the first row (we only need field names)
  $row = $result->fetch(PDO::FETCH_ASSOC);
  print " <tr>";
  foreach ($row as $field => $value){
   print ' <th></th>';
  } // end foreach
  print " </tr>";
  //second query gets the data
  $data = $con->query($query);
  $data->setFetchMode(PDO::FETCH_ASSOC);
  foreach($data as $row){
   print " <tr>";
   foreach ($row as $name=>$value){
   print " <td>$value</td>";
   } // end field loop
   print " </tr>";
  } // end record loop
  print "</table>";
  } catch(PDOException $e) {
   echo 'ERROR: ' . $e->getMessage();
  } // end try
 ?>
      <a href="../app-us/" class="text-xl py-4 bg-white shadow-md  rounded-3xl text-gray-800 text-sm font-semibold ml-3 border border-gray-200 hover:shadow-xl transition-all w-36  focus:outline-none w-full text-center ">미국 서버로 이동</a>
      <!--FP이외 제한구역 끝-->
</div>
    
<?php include '../footer.php';?>
</body>
</html>
