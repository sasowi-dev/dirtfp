
<div class="relative pt-6 px-4 sm:px-6 lg:px-8">
          <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start" aria-label="Global">
            <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
              <div class="flex items-center justify-between w-full md:w-auto">
                <a href="../index.php">
                  <img class="w-auto sm:h-10" src="https://www.withun.link/identity/ulogo_2gen.png" style="height:50px;">
                </a>

                <div class="-mr-2 flex items-center md:hidden">
                </div>
              </div>
            </div>
            <div class="">
<div class="group inline-block">
			<button
    class="outline-none focus:outline-none  px-3 py-1  flex items-center min-w-32"
  >
    <span class="pr-1 font-semibold flex-1">모든 서비스 보기</span>
    <span>
	<svg         class="fill-current h-4 w-4 transform 
        transition duration-150 ease-in-out"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 20 20">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
</svg>

    </span>
  </button>
  <ul
    class="bg-white border rounded-sm transform scale-0 group-hover:scale-100 absolute 
  transition duration-150 ease-in-out origin-top min-w-32"
  >
    <li class="rounded-sm px-3 py-1 hover:bg-gray-100">
	<a href="https://www.withun.link/covidr/">
	<span class="badge mb-3 bg-red-800 rounded-full px-2 py-1 text-center object-right-top text-white text-sm mr-1">신규</span>
	실시간</a></li>
    <li class="rounded-sm px-3 py-1 hover:bg-gray-100">
	<a href="https://www.withun.link/store.php">
	<span class="badge mb-3 bg-red-800 rounded-full px-2 py-1 text-center object-right-top text-white text-sm mr-1">신규</span>
	아카이브 다운로드</a></li>
	<li class="rounded-sm px-3 py-1 hover:bg-gray-100"><a href="https://www.withun.link/hcs/">자가진단</a></li>
	<li class="rounded-sm px-3 py-1 hover:bg-gray-100"><a href="https://www.withun.link/leek/">리크봇</a></li>
	<li class="rounded-sm px-3 py-1 hover:bg-gray-100"><a href="https://www.withun.link/chat/">채팅</a></li>
	<li class="rounded-sm px-3 py-1 hover:bg-gray-100"><a href="https://www.withun.link/s/">액세스</a></li>
	<li class="rounded-sm px-3 py-1 hover:bg-gray-100"><a href="https://www.withun.link/mediawiki/">위키</a></li>
	<!--
    <li class="rounded-sm relative px-3 py-1 hover:bg-gray-100">
      <button
        class="w-full text-left flex items-center outline-none focus:outline-none"
      >
        <span class="pr-1 flex-1">Langauges</span>
        <span class="mr-auto">
          <svg
            class="fill-current h-4 w-4
            transition duration-150 ease-in-out"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20"
          >
            <path
              d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
            />
          </svg>
        </span>
      </button>
      <ul
        class="bg-white border rounded-sm absolute top-0 right-0 
  transition duration-150 ease-in-out origin-top-left
  min-w-32
  "
      >
        <li class="px-3 py-1 hover:bg-gray-100">Javascript</li>
        <li class="rounded-sm relative px-3 py-1 hover:bg-gray-100">
          <button
            class="w-full text-left flex items-center outline-none focus:outline-none"
          >
            <span class="pr-1 flex-1">Python</span>
            <span class="mr-auto">
              <svg
                class="fill-current h-4 w-4
                transition duration-150 ease-in-out"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
              >
                <path
                  d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                />
              </svg>
            </span>
          </button>
          <ul
            class="bg-white border rounded-sm absolute top-0 right-0 
      transition duration-150 ease-in-out origin-top-left
      min-w-32
      "
          >
            <li class="px-3 py-1 hover:bg-gray-100">2.7</li>
            <li class="px-3 py-1 hover:bg-gray-100">3+</li>
          </ul>
        </li>
        <li class="px-3 py-1 hover:bg-gray-100">Go</li>
        <li class="px-3 py-1 hover:bg-gray-100">Rust</li>
      </ul>
    </li>
    <li class="rounded-sm px-3 py-1 hover:bg-gray-100">Testing</li>-->
  </ul>
</div>
<style>
  /* since nested groupes are not supported we have to use 
     regular css for the nested dropdowns 
  */
  li>ul                 { transform: translatex(100%) scale(0) }
  li:hover>ul           { transform: translatex(101%) scale(1) }
  li > button svg       { transform: rotate(-90deg) }
  li:hover > button svg { transform: rotate(-270deg) }

  /* Below styles fake what can be achieved with the tailwind config
     you need to add the group-hover variant to scale and define your custom
     min width style.
  	 See https://codesandbox.io/s/tailwindcss-multilevel-dropdown-y91j7?file=/index.html
  	 for implementation with config file
  */
  .group:hover .group-hover\:scale-100 { transform: scale(1) }
  .group:hover .group-hover\:-rotate-180 { transform: rotate(180deg) }
  .scale-0 { transform: scale(0) }
  .min-w-32 { min-width: 8rem }
</style>
			 </div>
          </nav>
        </div>
