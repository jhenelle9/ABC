<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@2.2.4/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/cou.css">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script defer src="https://unpkg.com/alpinejs@3.2.2/dist/cdn.min.js"></script>
    @livewireStyles
    <title>@yield('title')</title>
</head>
<body style="background: #edf2f7;">
    <div class="min-h-screen flex">
      <div class="px-10 w-1/4" style="
      background-color: aliceblue;
      width: 585px;
  ">
      <div class="flex space-2 items-center border-b-2 pb-4">
        <div>
          <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
        </div>
        <div class="ml-3">
          <h1 class="text-3xl font-bold text-indigo-600">ABC's</h1>
          <p class="text-center text-sm text-indigo-600 mt-1 font-serif">DASHBOARD</p>
        </div>
      </div>
      <a href="/dashboard"><div class="flex items-center space-x-4 mt-6 p-2 bg-indigo-600 rounded-md">
        <div>
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 10a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 01-1-1v-4z"></path>
          </svg>
        </div>
       
       <div>
          <p class="text-lg text-white font-semibold">Dashboard</p>
        </div>
      </div></a>
      <div class="mt-8">
        <ul class="space-y-10">
          <li>
            <a href="/courses" class="flex items-center text-sm font-semibold text-gray-500 hover:text-indigo-600 transition duration-200" hover:text-indigo-600="">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-4 text-gray-400 hover:text-indigo-600 transition duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
              </svg>
              Courses</a>
          </li>
  
          <a href="/teachers" class="flex items-center text-sm font-semibold text-gray-500 hover:text-indigo-600 transition duration-200">
          </a><div class="mr-4 my-auto"><a href="/livewire/teacher" class="flex items-center text-sm font-semibold text-gray-500 hover:text-indigo-600 transition duration-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg> </a>
  <div class="flex-auto my-1">
  <a href="/teachers" class="flex items-center text-sm font-semibold text-gray-500 hover:text-indigo-600 transition duration-200" hover:text-indigo-600="" style="position: relative;left: 39px;bottom: 24px;">
         Teachers</a>
      </div>
        
        
  <a href="/student" class="flex items-center text-sm font-semibold text-gray-500 hover:text-indigo-600 transition duration-200">
           </a><div class="mr-4 my-auto"><a href="/students" class="flex items-center text-sm font-semibold text-gray-500 hover:text-indigo-600 transition duration-200">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
              </svg> </a>
  <div class="flex-auto my-1">
    <a href="/student" class="flex items-center text-sm font-semibold text-gray-500 hover:text-indigo-600 transition duration-200" hover:text-indigo-600="" style="position: relative;left: 39px;bottom: 24px;">
           Students</a>
        </div>
        <a href="/class" class="flex items-center text-sm font-semibold text-gray-500 hover:text-indigo-600 transition duration-200">
              
          </a><div class="mr-4 my-auto"><a href="/classes" class="flex items-center text-sm font-semibold text-gray-500 hover:text-indigo-600 transition duration-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
            </svg> </a>
  <div class="flex-auto my-1">
  <a href="/class" class="flex items-center text-sm font-semibold text-gray-500 hover:text-indigo-600 transition duration-200" hover:text-indigo-600="" style="position: relative;left: 39px;bottom: 24px;">
         Classes</a>
      </div>
         
          <a href="/sschedules" class="flex items-center text-sm font-semibold text-gray-500 hover:text-indigo-600 transition duration-200">
              
          </a><div class="mr-4 my-auto"><a href="aactivity" class="flex items-center text-sm font-semibold text-gray-500 hover:text-indigo-600 transition duration-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg> </a>
  <div class="flex-auto my-1">
  <a href="/sschedules" class="flex items-center text-sm font-semibold text-gray-500 hover:text-indigo-600 transition duration-200" hover:text-indigo-600="" style="position: relative;left: 39px;bottom: 24px;">
         Student Schedules</a>
      </div>
        </div></div></div></div></ul>
      </div>
      <div class="flex mt-20 space-x-4 items-center">
        <div>
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400 hover:text-indigo-600 transition duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
          </svg>
        </div>
        <a href="/login" class="block font-semibold text-gray-500 hover:text-indigo-600 transition duration-200">Logout</a>
      </div>
    </div>
  <div  style=" width: 1230px;" class="bg-indigo-50 flex-grow py-12 px-10">
    <div class="flex justify-between">
      <div>
        <h4 class="text-sm font-bold text-indigo-600">Hi User,</h4>
        <h1 class="text-4xl font-bold text-indigo-900 mt-">Welcome To ABC Evening Institute Admin Pannel!</h1>
      </div>
      
      
    </div>
    <div class="pt-5 text-center text-gray-400 text-xs">
      <span>
        Copyright © 2021-2022 Developed by Jhenelle B. Mitchell
        </span>
    </div>
    @yield('main')
    
  </div>
</div>

@livewireScripts
</body></html>