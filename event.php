<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
<style>
@import url(https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css);
@-webkit-keyframes fadeIn {
  from { opacity:0 }
  to { opacity:1 }
}
@keyframes fadeIn {
  from { opacity:0 }
  to { opacity:1 }
}
@-webkit-keyframes fadeInUp {
  from { opacity:0; transform:translate3d(0,10%,0) }
  to { opacity:1; transform:translate3d(0,0,0) }
}
@keyframes fadeInUp {
  from { opacity:0; transform:translate3d(0,10%,0) }
  to { opacity:1; transform:translate3d(0,0,0) }
}

dialog[open] { -webkit-animation-duration:0.3s; animation-duration:0.3s; -webkit-animation-fill-mode:both; animation-fill-mode:both; -webkit-animation-name:fadeInUp; animation-name:fadeInUp }
dialog::backdrop { background: rgba(0, 0, 0, 0.3); backdrop-filter: blur(3px); -webkit-animation-duration:0.3s; animation-duration:0.3s; -webkit-animation-fill-mode:both; animation-fill-mode:both; -webkit-animation-name:fadeIn; animation-name:fadeIn  }
</style>

<div class="w-screen h-screen bg-gray-100 flex items-center justify-center px-5 py-5 relative" x-data="{showCookieBanner:true}">
    <section class="w-full p-5 lg:px-24 absolute top-0 bg-gray-600" x-show="showCookieBanner">
        <div class="md:flex items-center -mx-3">
            <div class="md:flex-1 px-3 mb-5 md:mb-0">
                <p class="text-center md:text-left text-white text-xs leading-tight md:pr-12">2021년 1분기 목표 모금액은 4만원입니다! 더 나은 서비스로 보답하기 위하여, 기부를 생각해 보세요.</p>
          <div class="mt-2 bg-gray-600 rounded-full">
    <div class="w-1/8 mt-2 bg-indigo-800 py-1 rounded-full"></div>
  </div>
          </div>
            <div class="px-3 text-center">
                <button id="btn" class="py-2 px-8 bg-indigo-800 hover:bg-indigo-900 text-white rounded font-bold text-sm shadow-xl mr-3" @click.prevent="document.getElementById('cookiesModal').showModal()">기부하기</button>
                <button id="btn" class="py-2 px-8 bg-gray-400 hover:bg-gray-500 text-white rounded font-bold text-sm shadow-xl" @click.prevent="showCookieBanner=!showCookieBanner">닫기</button>
            </div>
        </div>
    </section>
    <dialog id="cookiesModal" class="h-auto w-11/12 md:w-1/2 bg-white overflow-hidden rounded-md p-0">
        <div class="flex flex-col w-full h-auto">
            <div class="flex w-full h-auto items-center px-5 py-3">
                <div class="w-10/12 h-auto text-lg font-bold">
                   기부 방법
                </div>
                <div class="flex w-2/12 h-auto justify-end">
                    <button @click.prevent="document.getElementById('cookiesModal').close();" class="cursor-pointer focus:outline-none text-gray-400 hover:text-gray-800">
                        <i class="mdi mdi-close-circle-outline text-2xl"></i>
                    </button>
                </div>
            </div>
            <div class="flex w-full items-center bg-gray-100 border-b border-gray-200 px-5 py-3 text-sm">
                <div class="flex-1">
                    <p>기프트카드와 문화 상품권으로 후원 받습니다. 후원금은 모두 비영리로 사용합니다.</p>
                </div>
            </div>
          
            <div class="flex w-full px-5 py-3 justify-end">
                <button @click.prevent="document.getElementById('cookiesModal').close();" class="py-2 px-8 bg-gray-800 hover:bg-gray-900 text-white rounded font-bold text-sm shadow-xl">닫기</button>
           <a href="https://open.kakao.com/me/leek"><button class="py-2 px-8 bg-gray-800 hover:bg-gray-900 text-white rounded font-bold text-sm shadow-xl">1:1 채팅으로 이동</button></a>
 
          </div>
        </div>
    </dialog>
</div>
