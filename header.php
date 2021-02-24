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
.socialicons{
	height:1rem;
	}
  </style>

<nav class="relative bg-white border-b-2 border-gray-300 text-gray-900">
  <div class="container mx-auto flex justify-between">
	     <a href="https://withun.link">
    <div class="flex items-center flex-no-shrink relative block p-4 lg:p-6 text-xl text-blue-600 font-bold">
	 <img src="https://withun.link/identity/Group%201.svg" class="h-5" alt="페이퍼코어 로고">PaperCore</div></a>
    <ul class="flex">
	
      <!--Regular Link-->
	    
      <li class="hover:bg-blue-800 hover:text-white flex">
        <a href="https://github.com/papercore-dev" class="flex relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold"><img src="socialicons/gh-mini.png" alt="깃허브 옥토캣" class="socialicons flex">GitHub</a>
      </li>	
		  
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
                    <img class="h-8 mb-3 mr-3 fill-current text-white" src="identity/lkbt.svg">
                    <h3 class="font-bold text-xl text-white text-bold mb-2">리크봇</h3>
                  </div>
                  <p class="text-gray-100 text-sm">50명이 신뢰한 카카오톡 메신저 봇.</p>
                  <div class="flex items-center py-3">                <svg class="h-6 pr-3 fill-current text-blue-300"
                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                      <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                    </svg>
                    <a href="https://withun.link/leek" class="text-white bold border-b-2 border-blue-300 hover:text-blue-300">더 알아보기</a>
                  </div>
                </ul>
                <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r-0 lg:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                  <div class="flex items-center"> <img class="h-8 mb-3 mr-3 fill-current text-white" src="identity/dman.svg">
                    <h3 class="font-bold text-xl text-white text-bold mb-2">도메인</h3>
                  </div>
                  <p class="text-gray-100 text-sm">페이퍼코어가 보유한 다양한 도메인으로 나만의 웹페이지를 만들어보세요.</p>
                  <div class="flex items-center py-3">
                    <svg class="h-6 pr-3 fill-current text-blue-300"
                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                      <path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
                    </svg>
                    <a href="https://withun.link/#" class="text-white bold border-b-2 border-blue-300 hover:text-blue-300">내 도메인 얻기</a>
                  </div>
                </ul>
               <!-- <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-b-0 sm:border-r md:border-b-0 pb-6 pt-6 lg:pt-3">
                  <div class="flex items-center">
                    <img class="h-8 mb-3 mr-3 fill-current text-white" src="identity/gitb.svg">
                    <h3 class="font-bold text-xl text-white text-bold mb-2">Developers</h3>
                  </div>
                  <p class="text-gray-100 text-sm">임시</p>
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
                </ul>-->
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
<script async src="https://cse.google.com/cse.js?cx=fbbecc76b4f4ba643"></script>
<div class="gcse-search"></div>
