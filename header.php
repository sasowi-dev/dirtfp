<style>
  .mega-menu {
    display: none;
    left: 0;
    position: absolute;
    text-align: left;
    width: 100%;
  }
  .hoverable {
    position: static;
  }
  .hoverable > a:after {
    content: "\25BC";
    font-size: 10px;
    padding-left: 6px;
    position: relative;
    top: -1px;
  }
  .hoverable:hover .mega-menu {
    display: block;
  }
  .toggleable > label:after {
    content: "\25BC";
    font-size: 10px;
    padding-left: 6px;
    position: relative;
    top: -1px;
  }
  .toggle-input {
    display: none;
  }
  .toggle-input:not(checked) ~ .mega-menu {
    display: none;
  }
  .toggle-input:checked ~ .mega-menu {
    display: block;
  }
  .toggle-input:checked + label {
    color: white;
    background: #2c5282;
  }
  .toggle-input:checked ~ label:after {
    content: "\25B2";
    font-size: 10px;
    padding-left: 6px;
    position: relative;
    top: -1px;
  }

  </style>

<nav class="relative bg-white border-b-2 border-gray-300 text-gray-900">
  <div class="container mx-auto flex justify-between">
	     <a href="https://withun.link">
    <div class="flex items-center flex-no-shrink relative block p-4 lg:p-6 text-xl text-blue-600 font-bold">
	 <img src="https://withun.link/identity/Group%201.svg" class="h-5" alt="페이퍼코어 로고">PaperCore</div></a>
    <ul class="flex">
	
      <!--Regular Link-->
	    <!--
      <li class="hover:bg-blue-800 hover:text-white">
        <a href="#" class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold">Normal</a>
      </li>-->
	
		  
          <!--Hoverable Link-->
          <li class="hoverable hover:bg-indigo-800 hover:text-white">
            <a href="#" class="relative block py-6 px-4 lg:p-6 text-sm lg:text-base font-bold hover:bg-blue-800 hover:text-white">서비스</a>
            <div class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-indigo-800">
              <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
                <div class="w-full text-white mb-8">
                  <h2 class="font-bold text-2xl">사용자를 위해 사용자 중심적으로 생각한 서비스</h2>
                  <p>리크봇부터 모임챗까지. 상상하지 못했던 혁신적인 서비스.</p>
                </div>
                <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                  <div class="flex items-center">
                    <svg class="h-8 mb-3 mr-3 fill-current text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
</svg>
                    <h3 class="font-bold text-xl text-white text-bold mb-2">리크봇</h3>
                  </div>
                  <p class="text-gray-100 text-sm">반년간 함께한, 반년간 함께할 방의 활력 충전 AI 봇.</p>
                  <div class="flex items-center py-3">
                    <svg class="h-6 pr-3 fill-current text-blue-300"
                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                      <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                    </svg>
                    <a href="https://withun.link/leek" class="text-white bold border-b-2 border-blue-300 hover:text-blue-300">더 알아보기</a>
                  </div>
                </ul>
                <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r-0 lg:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                  <div class="flex items-center"> <svg class="h-8 mb-3 mr-3 fill-current text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
</svg>
                    <h3 class="font-bold text-xl text-white text-bold mb-2">Coming Soon</h3>
                  </div>
                  <p class="text-gray-100 text-sm">Coming Soon</p>
                  <div class="flex items-center py-3">
                    <svg class="h-6 pr-3 fill-current text-blue-300"
                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                      <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                    </svg>
                    <a href="https://withun.link/#" class="text-white bold border-b-2 border-blue-300 hover:text-blue-300">Coming Soon</a>
                  </div>
                </ul>
                <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-b-0 sm:border-r md:border-b-0 pb-6 pt-6 lg:pt-3">
                  <div class="flex items-center">
                    <svg class="h-8 mb-3 mr-3 fill-current text-white"
                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                      <path d="M2 4v14h14v-6l2-2v10H0V2h10L8 4H2zm10.3-.3l4 4L8 16H4v-4l8.3-8.3zm1.4-1.4L16 0l4 4-2.3 2.3-4-4z"/>
                    </svg>
                    <h3 class="font-bold text-xl text-white text-bold mb-2">Unlink Developers</h3>
                  </div>
                  <p class="text-gray-100 text-sm">페이퍼코어와 함께하는 개발 API와 코딩 가이드</p>
                  <div class="flex items-center py-3">
                    <svg class="h-6 pr-3 fill-current text-blue-300"
                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                      <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                    </svg>
                    <a href="#" class="text-white bold border-b-2 border-blue-300 hover:text-blue-300">Coming soon</a>
                  </div>
                </ul>
                <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 pb-6 pt-6 lg:pt-3">
                  <div class="flex items-center">
                    <svg class="h-8 mb-3 mr-3 fill-current text-white"
                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                      <path d="M9 12H1v6a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-6h-8v2H9v-2zm0-1H0V5c0-1.1.9-2 2-2h4V2a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v1h4a2 2 0 0 1 2 2v6h-9V9H9v2zm3-8V2H8v1h4z"/>
                    </svg>
                    <h3 class="font-bold text-xl text-white text-bold mb-2">더 스위치 WARP</h3>
                  </div>
                  <p class="text-gray-100 text-sm">다른 VPN보다 강력하지만 저가로 지원하는 인터넷의 스위치.</p>
                  <div class="flex items-center py-3">
                    <svg class="h-6 pr-3 fill-current text-blue-300"
                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                      <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                    </svg>
                    <a href="#" class="text-white bold border-b-2 border-blue-300 hover:text-blue-300">Coming Soon</a>
                  </div>
                </ul>
              </div>
            </div>
          </li>
		  
          <!-- ## Hoverable Link Template ##
      
		  <li class="hoverable hover:bg-blue-800 hover:text-white"><a href="#" class="relative block">x</a><div class="mega-menu">
			Add your mega menu content
			</div></li>
		  
		  -->
        </ul>
      </div>
    </nav>
<div>
<div class="text-center flex flex-col p-4 md:text-left md:flex-row md:items-center md:justify-between md:p-12 bg-purple-100 rounded-md">
<div class="text-2xl font-semibold">
<div class="text-gray-900">기부를 시작하여 페이퍼코어의 서버비를 도와주세요!</div>
<div class="text-purple-500">페이퍼코어가 2021년 1분기(2021.03까지)까지 필요한 기부금액은 40,000원입니다. 기프트카드, 문화상품권, BitCoin으로 기부하세요.</div>
    <div class="bg-gray-900 rounded h-6 mt-5" role="progressbar" :aria-valuenow="width" aria-valuemin="0" aria-valuemax="100" aria-valuenow="50">
                <div class="bg-blue-800 rounded h-6 text-center text-white text-sm transition" :style="`width: ${width}%; transition: width 2s;`" x-text="`${width}%`" style="width: 12.5%; transition: width 2s;">5000원</div>
            </div>
</div>
<div class="mt-3 md:mt-0 md:ml-2">
<a href="https://open.kakao.com/me/leek">
<div class="inline-block rounded-md text-lg font-semibold py-2 px-4 text-white bg-purple-500">
기부하기
</div></a>
</div>
</div>
</div>
