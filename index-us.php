<!DOCTYPE HTML>
<html lang="ko">
<head>
<meta charset="utf-8">
<?php include 'dependencies.php';?>
  </head>
  <body>
<?php include 'event.php';?>
<?php include 'header.php';?>
<style>

@layer utilities {
  .text-gradient {
    background-clip: text;
    -webkit-text-fill-color: transparent;
  }
}
</style>

<section
      class="homescreen m-0 flex flex-col w-screen justify-center bg-gray-800 h-80 text-gray-100  "
    >
<h1 class="text-5xl  my-auto mx-auto  md:mx-48 ">
<img src="https://avatars.githubusercontent.com/u/58584157?s=460&amp;u=204ece99ed17a2061b46570ac65677af9a4bb654&amp;v=4" class="rounded-full border-solid border-white border-2 -mt-3 h-16"><strong><span class="text-gradient bg-gradient-to-r from-pink-400 via-purple-400 to-indigo-500 font-mono">PaperCore</span></strong>-dev<br>
<span class="inline-block rounded-full text-white text-lg tracking-tight  mr-3">Hello! I'm papercore, random dev from south korea. </span>
<br>
  
<a href="https://github.com/papercore-dev" target="_blank">
<button type="button" class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-blue-500 hover:bg-blue-600 hover:shadow-lg">Follow Me!</button>
</a>
</h1>
    </section>
<div class="px-6 py-8 dark:bg-gray-800 dark:text-gray-600">
        <div class="flex justify-between container mx-auto">
            <div class="w-full lg:w-8/12">
                <div class="flex items-center justify-between">
                    <h1 class="text-xl font-bold text-gray-700 md:text-2xl">Projects</h1>
                    <div>
                        <select class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option>Oldest First</option>
                            
                        </select>
                    </div>
                </div>
jhj
            </div>
            <div class="-mx-8 w-4/12 hidden lg:block">
                
                
                
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php';?>
</body>
</html>
