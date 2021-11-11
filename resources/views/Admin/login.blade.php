<html lang="en"><head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="msapplication-TileColor" content="#0ed3cf">
  <meta name="theme-color" content="#0ed3cf">

  <meta property="og:image" content="https://tailwindcomponents.com/storage/4483/conversions/temp79744-ogimage.jpg?v=2021-11-10 18:50:59">
  <meta property="og:image:width" content="1280">
  <meta property="og:image:height" content="640">
  <meta property="og:image:type" content="image/png">

  <meta property="og:url" content="https://tailwindcomponents.com/component/login-form-ui-by-tailwindcss/landing">
  <meta property="og:title" content="Login form Ui by Tailwindcss by aji">
  <meta property="og:description" content="Tailwind CSS Login screen design inspiration, ideas and examples">

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@TwComponents">
  <meta name="twitter:title" content="Login form Ui by Tailwindcss by aji">
  <meta name="twitter:description" content="Tailwind CSS Login screen design inspiration, ideas and examples">
  <meta name="twitter:image" content="https://tailwindcomponents.com/storage/4483/conversions/temp79744-ogimage.jpg?v=2021-11-10 18:50:59">

  <title>Admin Portal</title>

  <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.4/dist/tailwind.min.css">
</head>
<body class="bg-gray-200">
  <div class="bg-no-repeat bg-cover bg-center relative" style="background-image: url(https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1951&amp;q=80);"><div class="absolute bg-gradient-to-b from-green-500 to-green-400 opacity-75 inset-0 z-0"></div>
<div class="min-h-screen sm:flex sm:flex-row mx-0 justify-center">
    <div class="flex-col flex  self-center p-10 sm:max-w-5xl xl:max-w-2xl  z-10">
      <div class="self-start hidden lg:flex flex-col  text-white">
        <img src="" class="mb-3">
        <h1 class="mb-3 font-bold text-5xl">Hi 👋 Welcome Back Admin </h1>
        <p class="pr-3"></p>
      </div>
    </div>
    <div class="flex justify-center self-center  z-10">
      <div class="p-12 bg-white mx-auto rounded-2xl w-100 ">
          <div class="mb-4">
            <h3 class="font-semibold text-2xl text-gray-800">LOG IN </h3>
            <p class="text-gray-500">Please Enter Your Credebtials To LogIn.</p>
          </div>
          <form class="mt-6" action={{ route('adminlogin') }} method="POST">
            @csrf
          <div class="space-y-5">
                      <div class="space-y-2">
                            <label class="text-sm font-medium text-gray-700 tracking-wide">Email</label>
            <input type="email" name="Email" class=" w-full text-base px-4 py-2 border  border-gray-300 rounded-lg focus:outline-none focus:border-green-400" type="" placeholder="admin@gmail.com">
            </div>
                        <div class="space-y-2">
            <label class="mb-5 text-sm font-medium text-gray-700 tracking-wide"  for="password" minlength="6">
              Password
            </label>
            <input type="password" name="Password" class="w-full content-center text-base px-4 py-2 border  border-gray-300 rounded-lg focus:outline-none focus:border-green-400" type="" placeholder="Enter your password">
          </div>
            <div class="flex items-center justify-between">
            <div class="flex items-center">
              <input id="remember_me" name="remember_me" type="checkbox" class="h-4 w-4 bg-blue-500 focus:ring-blue-400 border-gray-300 rounded">
              <label for="remember_me" class="ml-2 block text-sm text-gray-800">
                Remember me
              </label>
            </div>
            
          </div>
          <div>
            <button type="submit" class="w-full flex justify-center bg-green-400  hover:bg-green-500 text-gray-100 p-3  rounded-full tracking-wide font-semibold  shadow-lg cursor-pointer transition ease-in duration-500">
              LOGIN
            </button>
          </div>
          </div>
        </form>
          <div class="pt-5 text-center text-gray-400 text-xs">
            <span>
              Copyright © 2021-2022 Developed by Jhenelle B. Mitchell
              </span>
          </div>
      </div>
    </div>
</div>
</div>


</body></html>