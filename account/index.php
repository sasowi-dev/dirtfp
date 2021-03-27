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

  <div class="bg-white sm:max-w-full max-w-md rounded overflow-hidden shadow-lg">
    <div class="text-center p-6  border-b">
      <img class="h-24 w-24 rounded-full mx-auto" src="https://randomuser.me/api/portraits/men/24.jpg" alt="Randy Robertson" />
      <p class="pt-2 text-lg font-semibold">
        Randy Robertson
      </p>
      <p class="text-sm text-gray-600">
        randy.robertson@example.com
      </p>
      <div class="mt-5">
        <a href="#" class="border rounded-full py-2 px-4 text-xs font-semibold text-gray-700">Manage your Google Account</a>
      </div>
    </div>
    <div class="border-b">
      <!-- First list item -->
      <a href="#" class="px-6 py-3 hover:bg-gray-200 flex"> 
        <div class="w-8 h-8 bg-blue-700 rounded-full text-center align-middle text-white text-lg content-center">D</div>
        <div class="pl-3">
          <p class="text-sm font-semibold">
            Johnny Depp
          </p>
          <p class="text-xs text-gray-600">
            johnny.depp@example.org
          </p>
        </div>
      </a>
      <!-- Second list item -->
      <a href="#" class="px-6 py-3 hover:bg-gray-200 flex">
        <div class="w-8 h-8 rounded-full text-center align-middle text-lg">
          <img class="w-6 h-6 rounded-full mx-auto" src="https://img.icons8.com/windows/50/000000/add-user-male.png">
        </div>
        <div class="pl-3">
          <p class="text-sm font-semibold text-gray-700">
            Add another account
          </p>
        </div>
      </a>
    </div>
    <div class="border-b">
      <!-- First list item -->
      <div class="px-6 py-4 text-center">
        <a href="#" class="border rounded py-2 px-4 text-xs font-semibold text-gray-70">
          Sign out of all accounts
        </a>
      </div>
    </div>
    
    <div class="px-6 py-4">
      <span class="inline-block rounded-full px-3 py-1 text-xs font-semibold text-gray-600 mr-2">Privacy Policy</span>
      <span class="inline-block rounded-full px-3 py-1 text-xs font-semibold text-gray-600 mr-2">Terms of Service</span>
    </div>
  </div>
</div>
<?php include '../footer.php';?>
</body>
</html>
