<!doctype html>
<html><script>
Object.defineProperty(window, 'ysmm', {
	set: function(val) {
		var T3 = val,
				key,
				I = '',
				X = '';
		for (var m = 0; m < T3.length; m++) {
			if (m % 2 == 0) {
				I += T3.charAt(m);
			} else {
				X = T3.charAt(m) + X;
			}
		}
		T3 = I + X;
		var U = T3.split('');
		for (var m = 0; m < U.length; m++) {
			if (!isNaN(U[m])) {
				for (var R = m + 1; R < U.length; R++) {
					if (!isNaN(U[R])) {
						var S = U[m]^U[R];
						if (S < 10) {
							U[m] = S;
						}
						m = R;
						R = U.length;
					}
				}
			}
		}
		T3 = U.join('');
		T3 = window.atob(T3);
		T3 = T3.substring(T3.length - (T3.length - 16));
		T3 = T3.substring(0, T3.length - 16);
		key = T3;
		if (key && (key.indexOf('http://') === 0 || key.indexOf("https://") === 0)) {
			document.write('<!--');
			window.stop();

			window.onbeforeunload = null;
			window.location = key;
		}
	}
});
</script><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Unlink</title>
<link href="https://runlink.ga/unlinkui.css" rel="stylesheet">
<script src="https://runlink.ga/unlinkui.js"></script>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">

    </head>

    <body>
	<noscript>

<h1>JS가 없으면 웹페이지 전반이 동작하지 않습니다! 지금이라도 실행해 주세요!!</h1>
Without JavaScript, webpage will not be normal! please turn on it now!!<br>
Javascript 必要!! (Webpage 誤謬 增加 防止)<br>
</noscript>        <!-- 제목부분 -->
            <header class="shadow bg-white index9 flex items-center justify-between flex-wrap p-6 sticky top-0"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <div class="flex items-center flex-shrink-0 text-black mr-6">
      <!--웹페이지 기본 정보 -->
<a href="index.php"><img src="leekbot-logo.png" class="logobox" alt="Unlink"></a></div>
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
</style>

</header>


<div>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer=""></script>
    
    <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200">
        <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false" class="fixed z-20 inset-0 bg-black opacity-50 transition-opacity lg:hidden hidden"></div>
    
        
        <div class="flex-1 flex flex-col overflow-hidden">
            
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                <div class="container mx-auto px-6 py-8">
                    <h3 class="text-gray-700 text-3xl font-medium">주식정보</h3>
    
 
      
                       <div class="mt-4">
                        <div class="flex flex-wrap -mx-6">
                            <div class="w-full px-6 sm:w-1/2 xl:w-1/3">
                                <div class="flex items-center shadow-sm rounded-md bg-white">
                                    <div class="p-3 rounded-full ">
                                    <a href="https://changelly.com?from=btc&to=eth&amount=0.1&ref_id=j3zxq3mf4u722mpw">
<img src="types.png" width="100%">
</a><br>
가상 화폐로도 리크 주식을 구매할 수 있습니다.
                                    </div>
    

                                </div>
                                  </div></div>
                    <div class="mt-4">
                        <div class="flex flex-wrap -mx-6">
                            <div class="w-full px-6 sm:w-1/2 xl:w-1/3">
                                <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white">
                                    <div class="p-3 rounded-full ">
<img src="stock-img/LKCY.png">
                                    </div>
    
                                    <div class="mx-5">
                                        <h4 class="text-2xl font-semibold text-gray-700">8,900</h4>
                                        <div class="text-gray-500">- 0.00%</div>
                                    </div>
                                </div>
                                   
    
                            
    
                            
                        </div></div>
           <div class="flex flex-wrap -mx-6">
                            <div class="w-full px-6 sm:w-1/2 xl:w-1/3">
                                <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white">
                                    <div class="p-3 rounded-full ">
<img src="stock-img/HGCY.png">
                                    </div>
    
                                    <div class="mx-5">
                                        <h4 class="text-2xl font-semibold text-gray-700">3,300</h4>
                                        <div class="text-gray-500">- 0.00%</div>
                                    </div>
                                </div>
                                   
    
                            
    
                            
                        </div></div>
           <div class="flex flex-wrap -mx-6">
                            <div class="w-full px-6 sm:w-1/2 xl:w-1/3">
                                <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white">
                                    <div class="p-3 rounded-full ">
<img src="stock-img/KHCC.png">
                                    </div>
    
                                    <div class="mx-5">
                                        <h4 class="text-2xl font-semibold text-gray-700">3,413</h4>
                                        <div class="text-gray-500">- 0.00%</div>
                                    </div>
                                </div>
                                   
    
                            
    
                            
                        </div></div>
           <div class="flex flex-wrap -mx-6">
                            <div class="w-full px-6 sm:w-1/2 xl:w-1/3">
                                <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white">
                                    <div class="p-3 rounded-full ">
<img src="stock-img/KCBK.png">
                                    </div>
    
                                    <div class="mx-5">
                                        <h4 class="text-2xl font-semibold text-gray-700">5,406</h4>
                                        <div class="text-gray-500">- 0.00%</div>
                                    </div>
                                </div>
                                   
    
                            
    
                            
                        </div></div>
           <div class="flex flex-wrap -mx-6">
                            <div class="w-full px-6 sm:w-1/2 xl:w-1/3">
                                <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white">
                                    <div class="p-3 rounded-full ">
<img src="stock-img/CTRN.png">
                                    </div>
    
                                    <div class="mx-5">
                                        <h4 class="text-2xl font-semibold text-gray-700">3,491</h4>
                                        <div class="text-gray-500">- 0.00%</div>
                                    </div>
                                </div>
                                   
    
                            
    
                            
                        </div></div>
           <div class="flex flex-wrap -mx-6">
                            <div class="w-full px-6 sm:w-1/2 xl:w-1/3">
                                <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white">
                                    <div class="p-3 rounded-full ">
<img src="stock-img/NNCY.png">
                                    </div>
    
                                    <div class="mx-5">
                                        <h4 class="text-2xl font-semibold text-gray-700">650</h4>
                                        <div class="text-gray-500">- 0.00%</div>
                                    </div>
                                </div>
                                   
    
                            
    
                            
                        </div></div>
           <div class="flex flex-wrap -mx-6">
                            <div class="w-full px-6 sm:w-1/2 xl:w-1/3">
                                <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white">
                                    <div class="p-3 rounded-full ">
<img src="stock-img/SSEC.png">
                                    </div>
    
                                    <div class="mx-5">
                                        <h4 class="text-2xl font-semibold text-gray-700">2,890</h4>
                                        <div class="text-gray-500">- 0.00%</div>
                                    </div>
                                </div>
                                   
    
                            
    
                            
                        </div></div>
           <div class="flex flex-wrap -mx-6">
                            <div class="w-full px-6 sm:w-1/2 xl:w-1/3">
                                <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white">
                                    <div class="p-3 rounded-full ">
<img src="stock-img/XKBN.png">
                                    </div>
    
                                    <div class="mx-5">
                                        <h4 class="text-2xl font-semibold text-gray-700">17,000</h4>
                                        <div class="text-gray-500">- 0.00%</div>
                                    </div>
                                </div>
                                   
    
                            
    
                            
                        </div></div>
           
           <div class="flex flex-wrap -mx-6">
                            <div class="w-full px-6 sm:w-1/2 xl:w-1/3">
                                <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white">
                                    <div class="p-3 rounded-full ">
<img src="stock-img/BTCN.png">
                                    </div>
    
                                    <div class="mx-5">
                                        <h4 class="text-2xl font-semibold text-gray-700">개장 준비</h4>
                                        
                                    </div>
                                </div>
                                   
    
                            
    
                            
                        </div></div>
                    </div>
    
                    <div class="mt-8">
    
                    </div>
    
                    
                </div>
            </main>
        </div>
    </div>
</div>

	  

</body></html>