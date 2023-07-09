<!doctype html>
<html>
<head>
    <meta charset='utf-8' />
    <metap name="viewport" content="width=device-width, onotial-scale=1.0">
    @vite('resources/css/app.css')
    <style>
        body {
            padding-top: 70px;
            padding-left: 70px;
        }

    </style>
</head>
    <!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->

  <body class="h-full">
  <header class="text-gray-400 bg-gray-900 body-font">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-purple-500 rounded-full" viewBox="0 0 24 24">
        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
      </svg>
      <span class="ml-3 text-xl">Tailblocks</span>
    </a>
    <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
      <a class="mr-5 hover:text-white">First Link</a>
      <a class="mr-5 hover:text-white">Second Link</a>
      <a class="mr-5 hover:text-white">Third Link</a>
      <a class="mr-5 hover:text-white">Fourth Link</a>
    </nav>
    <button class="inline-flex items-center bg-gray-800 border-0 py-1 px-3 focus:outline-none hover:bg-gray-700 rounded text-base mt-4 md:mt-0" control-id="ControlID-83">Button
      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
        <path d="M5 12h14M12 5l7 7-7 7"></path>
      </svg>
    </button>
  </div>
</header>
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
    <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign in to your account</h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form class="space-y-6" action="#" method="POST">
      <div>
        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
        <div class="mt-2">
          <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>

      <div>
        <div class="flex items-center justify-between">
          <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
          <div class="text-sm">
            <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot password?</a>
          </div>
        </div>
        <div class="mt-2">
          <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>

      <div>
        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
      </div>
    </form>

    <p class="mt-10 text-center text-sm text-gray-500">
      Not a member?
      <a href="#" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Start a 14 day free trial</a>
    </p>
  </div>
</div>
<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -m-4">
      <div class="p-4 lg:w-1/3">
        <div class="h-full bg-gray-100 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
          <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>
          <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">Raclette Blueberry Nextious Level</h1>
          <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
          <a class="text-purple-500 inline-flex items-center">Learn More
            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
              <path d="M12 5l7 7-7 7"></path>
            </svg>
          </a>
          <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
            <span class="text-gray-400 mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
              <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                <circle cx="12" cy="12" r="3"></circle>
              </svg>1.2K
            </span>
            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
              <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
              </svg>6
            </span>
          </div>
        </div>
      </div>
      <div class="p-4 lg:w-1/3">
        <div class="h-full bg-gray-100 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
          <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>
          <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">Ennui Snackwave Thundercats</h1>
          <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
          <a class="text-purple-500 inline-flex items-center">Learn More
            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
              <path d="M12 5l7 7-7 7"></path>
            </svg>
          </a>
          <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
            <span class="text-gray-400 mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
              <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                <circle cx="12" cy="12" r="3"></circle>
              </svg>1.2K
            </span>
            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
              <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
              </svg>6
            </span>
          </div>
        </div>
      </div>
      <div class="p-4 lg:w-1/3">
        <div class="h-full bg-gray-100 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
          <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>
          <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">Selvage Poke Waistcoat Godard</h1>
          <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
          <a class="text-purple-500 inline-flex items-center">Learn More
            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
              <path d="M12 5l7 7-7 7"></path>
            </svg>
          </a>
          <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
            <span class="text-gray-400 mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
              <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                <circle cx="12" cy="12" r="3"></circle>
              </svg>1.2K
            </span>
            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
              <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
              </svg>6
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="text-gray-600 body-font relative">
  <div class="absolute inset-0 bg-gray-300">
    <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map" scrolling="no" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=%C4%B0zmir+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
  </div>
  <div class="container px-5 py-24 mx-auto flex">
    <div class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
      <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Feedback</h2>
      <p class="leading-relaxed mb-5 text-gray-600">Post-ironic portland shabby chic echo park, banjo fashion axe</p>
      <div class="relative mb-4">
        <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
        <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" control-id="ControlID-80">
      </div>
      <div class="relative mb-4">
        <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
        <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
      </div>
      <button class="text-white bg-purple-500 border-0 py-2 px-6 focus:outline-none hover:bg-purple-600 rounded text-lg">Button</button>
      <p class="text-xs text-gray-500 mt-3">Chicharrones blog helvetica normcore iceland tousled brook viral artisan.</p>
    </div>
  </div>
</section>
<!-- Table Section -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <!-- Card -->
  <div class="flex flex-col">
    <div class="-m-1.5 overflow-x-auto">
      <div class="p-1.5 min-w-full inline-block align-middle">
        <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-slate-900 dark:border-gray-700">
          <!-- Header -->
          <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-gray-700">
            <div>
              <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">
                Sales
              </h2>
            </div>

            <div>
              <div class="inline-flex gap-x-2">
                <a class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-red-600 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-red-500 dark:focus:ring-offset-gray-800" href="#">
                  <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                  </svg>
                  Delete (2)
                </a>

                <a class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800" href="#">
                  View all
                </a>

                <a class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800" href="#">
                  <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.63452 7.50001L13.6345 7.5M8.13452 13V2" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                  </svg>
                  Create
                </a>
              </div>
            </div>
          </div>
          <!-- End Header -->

          <!-- Table -->
          <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
            <thead class="bg-gray-50 dark:bg-slate-900">
              <tr>
                <th scope="col" class="pl-6 py-3 text-left">
                  <label for="hs-at-with-checkboxes-main" class="flex">
                    <input type="checkbox" class="shrink-0 border-gray-200 rounded text-blue-600 pointer-events-none focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-at-with-checkboxes-main">
                    <span class="sr-only">Checkbox</span>
                  </label>
                </th>

                <th scope="col" class="px-6 py-3 text-left">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                      Lead
                    </span>
                  </div>
                </th>

                <th scope="col" class="px-6 py-3 text-left">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                      Next Meeting
                    </span>
                  </div>
                </th>

                <th scope="col" class="px-6 py-3 text-left">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                      Last Interaction
                    </span>
                  </div>
                </th>

                <th scope="col" class="px-6 py-3 text-left">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                      Email
                    </span>
                  </div>
                </th>

                <th scope="col" class="px-6 py-3 text-left">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                      Rating
                    </span>
                  </div>
                </th>
              </tr>
            </thead>

            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
              <tr>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="pl-6 py-2">
                    <label for="hs-at-with-checkboxes-1" class="flex">
                      <input type="checkbox" class="shrink-0 border-gray-200 rounded text-blue-600 pointer-events-none focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-at-with-checkboxes-1" checked>
                      <span class="sr-only">Checkbox</span>
                    </label>
                  </div>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-2">
                    <div class="flex items-center gap-x-2">
                      <svg class="inline-block h-5 w-5" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.0355 1.75926C10.6408 1.75926 5.30597 1.49951 0.0111241 1C-0.288584 7.23393 5.50578 13.1282 12.7987 14.5668L13.9975 14.7266C14.3372 12.4289 15.9956 3.7773 16.595 1.73928C16.4152 1.75926 16.2353 1.75926 16.0355 1.75926Z" fill="#A49DFF"/>
                        <path d="M16.615 1.75926C16.615 1.75926 25.2266 7.9932 28.5234 16.3451C30.0419 11.3499 31.1608 6.15498 32 1C26.8051 1.49951 21.71 1.75926 16.615 1.75926Z" fill="#28289A"/>
                        <path d="M13.9975 14.7466L13.8177 15.9455C13.8177 15.9455 12.2592 28.4133 23.1886 31.9699C25.2266 26.8748 27.0049 21.6599 28.5234 16.3251C21.9698 15.8456 13.9975 14.7466 13.9975 14.7466Z" fill="#5ADCEE"/>
                        <path d="M16.6149 1.75927C16.0155 3.79729 14.3571 12.4089 14.0175 14.7466C14.0175 14.7466 21.9897 15.8456 28.5233 16.3251C25.1866 7.9932 16.6149 1.75927 16.6149 1.75927Z" fill="#7878FF"/>
                      </svg>
                      <div class="grow">
                        <span class="text-sm text-gray-600 dark:text-gray-400">Guideline</span>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-2">
                    <span class="text-sm text-gray-600 dark:text-gray-400">In 2 days</span>
                  </div>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-2">
                    <span class="text-sm text-gray-600 dark:text-gray-400">45 minutes ago</span>
                  </div>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-2">
                    <span class="text-sm text-gray-600 dark:text-gray-400">
                      amanda@site.com
                    </span>
                  </div>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-2 flex gap-x-1">
                    <svg class="w-3 h-3 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg class="w-3 h-3 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg class="w-3 h-3 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg class="w-3 h-3 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg class="w-3 h-3 text-gray-300 dark:text-gray-700" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                  </div>
                </td>
              </tr>

              <tr>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="pl-6 py-2">
                    <label for="hs-at-with-checkboxes-2" class="flex">
                      <input type="checkbox" class="shrink-0 border-gray-200 rounded text-blue-600 pointer-events-none focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-at-with-checkboxes-2" checked>
                      <span class="sr-only">Checkbox</span>
                    </label>
                  </div>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-2">
                    <div class="flex items-center gap-x-2">
                      <svg class="inline-block h-5 w-5" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_4132_5800)">
                        <path d="M16 32.0022C24.8366 32.0022 32 24.8388 32 16.0022C32 7.16569 24.8366 0.00225067 16 0.00225067C7.16344 0.00225067 0 7.16569 0 16.0022C0 24.8388 7.16344 32.0022 16 32.0022Z" fill="#1977F3"/>
                        <path d="M22.2281 20.6283L22.9369 16.0023H18.4998V13.0007C18.4998 11.7362 19.1185 10.5009 21.1076 10.5009H23.1259V6.56335C23.1259 6.56335 21.2943 6.2506 19.5438 6.2506C15.8897 6.2506 13.5002 8.46463 13.5002 12.4764V16.0023H9.43665V20.6283H13.5002V31.8087C14.3147 31.937 15.1495 32.0023 16 32.0023C16.8505 32.0023 17.6853 31.9347 18.4998 31.8087V20.6283H22.2281Z" fill="white"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_4132_5800">
                        <rect width="32" height="32" fill="white"/>
                        </clipPath>
                        </defs>
                      </svg>
                      <div class="grow">
                        <span class="text-sm text-gray-600 dark:text-gray-400">Facebook</span>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-2">
                    <span class="text-sm text-gray-600 dark:text-gray-400">Yesterday 09:12 am</span>
                  </div>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-2">
                    <span class="text-sm text-gray-600 dark:text-gray-400">In 1 hour</span>
                  </div>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-2">
                    <span class="text-sm text-gray-600 dark:text-gray-400">
                      christina@site.com
                    </span>
                  </div>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-2 flex gap-x-1">
                    <svg class="w-3 h-3 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg class="w-3 h-3 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg class="w-3 h-3 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg class="w-3 h-3 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg class="w-3 h-3 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                  </div>
                </td>
              </tr>

              <tr>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="pl-6 py-2">
                    <label for="hs-at-with-checkboxes-3" class="flex">
                      <input type="checkbox" class="shrink-0 border-gray-200 rounded text-blue-600 pointer-events-none focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-at-with-checkboxes-3">
                      <span class="sr-only">Checkbox</span>
                    </label>
                  </div>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-2">
                    <div class="flex items-center gap-x-2">
                      <svg class="inline-block h-5 w-5" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_6173_178913)">
                        <path d="M16 32C7.16 32 0 24.84 0 16C0 7.16 7.16 0 16 0C24.84 0 32 7.16 32 16C32 24.84 24.84 32 16 32Z" fill="#FFE01B"/>
                        <path d="M11.72 19.28C11.74 19.3 11.74 19.34 11.72 19.38C11.64 19.52 11.48 19.6 11.32 19.58C11.02 19.54 10.8 19.3 10.82 19C10.82 18.8 10.86 18.62 10.92 18.42C11.02 18.18 10.92 17.92 10.72 17.78C10.6 17.7 10.44 17.68 10.3 17.7C10.16 17.72 10.04 17.82 9.96001 17.94C9.90001 18.04 9.86001 18.14 9.84001 18.24C9.84001 18.26 9.82001 18.28 9.82001 18.28C9.78001 18.4 9.70001 18.44 9.64001 18.44C9.62001 18.44 9.58001 18.42 9.56001 18.36C9.50001 18.02 9.62001 17.68 9.84001 17.42C10.04 17.2 10.32 17.1 10.62 17.14C10.92 17.18 11.2 17.38 11.32 17.66C11.46 18 11.42 18.38 11.24 18.7C11.22 18.72 11.22 18.76 11.2 18.78C11.14 18.9 11.12 19.06 11.2 19.18C11.26 19.26 11.34 19.3 11.44 19.3C11.48 19.3 11.52 19.3 11.56 19.28C11.64 19.24 11.7 19.24 11.72 19.28ZM24.94 19.6C24.92 20.22 24.78 20.82 24.56 21.4C23.44 24.1 20.76 25.6 17.56 25.5C14.58 25.42 12.04 23.84 10.94 21.26C10.24 21.24 9.56001 20.96 9.06001 20.5C8.52001 20.04 8.18001 19.4 8.10001 18.7C8.04001 18.22 8.10001 17.74 8.28001 17.28L7.66001 16.76C4.78001 14.36 13.72 4.4 16.56 6.9C16.58 6.92 17.54 7.86 17.54 7.86C17.54 7.86 18.06 7.64 18.08 7.64C20.58 6.6 22.62 7.1 22.62 8.76C22.62 9.62 22.08 10.62 21.2 11.54C21.56 11.9 21.8 12.34 21.92 12.82C22.02 13.16 22.06 13.5 22.08 13.86C22.1 14.22 22.12 15.04 22.12 15.04C22.14 15.04 22.4 15.12 22.48 15.14C23 15.26 23.46 15.48 23.86 15.82C24.08 16.02 24.2 16.3 24.26 16.58C24.32 16.96 24.22 17.34 24 17.64C24.06 17.78 24.1 17.9 24.16 18.04C24.24 18.28 24.28 18.48 24.3 18.5C24.52 18.54 24.94 18.86 24.94 19.6ZM12.34 18.12C12.14 16.86 11.3 16.42 10.72 16.38C10.58 16.38 10.44 16.38 10.28 16.42C9.26001 16.62 8.66001 17.5 8.78001 18.64C8.96001 19.7 9.82001 20.5 10.88 20.56C10.98 20.56 11.08 20.56 11.18 20.54C12.24 20.38 12.5 19.24 12.34 18.12ZM14.1 10.12C14.98 9.4 15.9 8.76 16.88 8.2C16.88 8.2 16.1 7.3 15.86 7.22C14.42 6.82 11.3 8.98 9.30001 11.84C8.50001 13 7.34001 15.04 7.90001 16.08C8.10001 16.32 8.32001 16.52 8.56001 16.72C8.92001 16.2 9.48001 15.84 10.12 15.72C10.9 13.54 12.28 11.6 14.1 10.12ZM17.22 20.1C17.3 20.44 17.56 20.72 17.9 20.8C18.08 20.86 18.24 20.92 18.44 20.94C20.72 21.34 22.86 20.02 23.34 19.7C23.38 19.68 23.4 19.7 23.38 19.74C23.36 19.76 23.34 19.78 23.34 19.8C22.76 20.56 21.18 21.44 19.12 21.44C18.22 21.44 17.32 21.12 17 20.64C16.48 19.88 16.98 18.78 17.82 18.9C17.82 18.9 18.12 18.94 18.2 18.94C19.52 19.06 20.86 18.86 22.08 18.32C23.24 17.78 23.68 17.18 23.62 16.7C23.6 16.56 23.52 16.42 23.42 16.3C23.1 16.04 22.72 15.86 22.32 15.78C22.14 15.72 22.02 15.7 21.88 15.66C21.64 15.58 21.52 15.52 21.5 15.06C21.48 14.86 21.46 14.18 21.44 13.88C21.42 13.38 21.36 12.7 20.94 12.42C20.84 12.34 20.7 12.3 20.58 12.3C20.5 12.3 20.44 12.3 20.36 12.32C20.14 12.36 19.96 12.48 19.8 12.64C19.4 13 18.88 13.18 18.34 13.14C18.04 13.12 17.74 13.08 17.38 13.06C17.32 13.06 17.24 13.06 17.18 13.04C16.22 13.06 15.44 13.78 15.32 14.74C15.12 16.16 16.14 16.88 16.44 17.32C16.48 17.38 16.52 17.44 16.52 17.52C16.52 17.6 16.48 17.68 16.42 17.72C15.6 18.64 15.3 19.92 15.62 21.12C15.66 21.26 15.7 21.4 15.76 21.54C16.5 23.28 18.82 24.1 21.08 23.36C21.38 23.26 21.66 23.14 21.94 23C22.44 22.76 22.88 22.42 23.26 22.02C23.84 21.44 24.22 20.68 24.36 19.86C24.42 19.4 24.32 19.24 24.2 19.16C24.1 19.1 24 19.08 23.88 19.1C23.82 18.74 23.72 18.4 23.58 18.08C22.94 18.56 22.2 18.94 21.42 19.16C20.48 19.42 19.52 19.52 18.54 19.48C17.92 19.42 17.5 19.24 17.34 19.76C18.28 20.08 19.28 20.18 20.28 20.06C20.3 20.06 20.34 20.08 20.34 20.1C20.34 20.12 20.32 20.14 20.3 20.16C20.22 20.14 19.06 20.68 17.22 20.1ZM13.84 11.88C14.6 11.34 15.48 10.96 16.38 10.76C17.42 10.52 18.48 10.52 19.52 10.76C19.56 10.76 19.58 10.7 19.54 10.68C19 10.4 18.42 10.24 17.8 10.22C17.78 10.22 17.76 10.2 17.76 10.18V10.16C17.86 10.04 17.96 9.92 18.08 9.84C18.1 9.82 18.1 9.8 18.08 9.8L18.06 9.78C17.32 9.86 16.62 10.1 15.98 10.52C15.96 10.52 15.94 10.52 15.94 10.52V10.5C15.98 10.32 16.06 10.14 16.16 9.96C16.16 9.94 16.16 9.92 16.14 9.92H16.12C15.22 10.42 14.42 11.08 13.76 11.86C13.74 11.88 13.74 11.9 13.76 11.9C13.8 11.9 13.82 11.9 13.84 11.88ZM19.84 16.7C19.96 16.78 20.14 16.76 20.24 16.64C20.3 16.52 20.22 16.38 20.06 16.3C19.94 16.22 19.76 16.24 19.66 16.36C19.6 16.46 19.68 16.62 19.84 16.7ZM20.34 14.88C20.38 15.08 20.46 15.28 20.58 15.44C20.7 15.42 20.84 15.42 20.96 15.44C21.04 15.22 21.04 14.98 20.98 14.76C20.88 14.34 20.76 14.1 20.52 14.14C20.26 14.18 20.24 14.48 20.34 14.88ZM20.88 15.84C20.72 15.8 20.54 15.88 20.48 16.06C20.44 16.22 20.52 16.4 20.7 16.46C20.88 16.52 21.04 16.42 21.1 16.24C21.1 16.22 21.12 16.18 21.12 16.16C21.12 16 21.02 15.86 20.88 15.84Z" fill="black"/>
                        <path d="M16.66 15.8C16.62 15.8 16.6 15.78 16.6 15.76C16.58 15.68 16.7 15.58 16.8 15.48C17.14 15.22 17.6 15.18 17.98 15.34C18.16 15.42 18.32 15.54 18.42 15.7C18.46 15.76 18.46 15.82 18.44 15.84C18.4 15.88 18.3 15.84 18.12 15.76C17.92 15.66 17.68 15.6 17.46 15.62C17.2 15.66 16.92 15.72 16.66 15.8ZM18.38 16.16C18.22 16 18 15.92 17.8 15.96C17.64 15.98 17.5 16.04 17.38 16.14C17.32 16.18 17.28 16.24 17.28 16.32C17.28 16.34 17.28 16.36 17.3 16.36C17.32 16.36 17.32 16.38 17.34 16.38C17.4 16.38 17.46 16.36 17.5 16.34C17.74 16.26 17.98 16.22 18.22 16.26C18.34 16.28 18.38 16.28 18.42 16.24C18.4 16.2 18.4 16.18 18.38 16.16Z" fill="black"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_6173_178913">
                        <rect width="32" height="32" fill="white"/>
                        </clipPath>
                        </defs>
                      </svg>
                      <div class="grow">
                        <span class="text-sm text-gray-600 dark:text-gray-400">Mailchimp</span>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-2">
                    <span class="text-sm text-gray-600 dark:text-gray-400">Monday 12:12 pm</span>
                  </div>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-2">
                    <span class="text-sm text-gray-600 dark:text-gray-400">In 3 days</span>
                  </div>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-2">
                    <span class="text-sm text-gray-600 dark:text-gray-400">
                      brian@site.com
                    </span>
                  </div>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-2 flex gap-x-1">
                    <svg class="w-3 h-3 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg class="w-3 h-3 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg class="w-3 h-3 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg class="w-3 h-3 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg class="w-3 h-3 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                  </div>
                </td>
              </tr>

              <tr>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="pl-6 py-2">
                    <label for="hs-at-with-checkboxes-4" class="flex">
                      <input type="checkbox" class="shrink-0 border-gray-200 rounded text-blue-600 pointer-events-none focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-at-with-checkboxes-4">
                      <span class="sr-only">Checkbox</span>
                    </label>
                  </div>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-2">
                    <div class="flex items-center gap-x-2">
                      <svg class="inline-block h-5 w-5" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M27.2192 10.9088C27.0336 11.0528 23.7568 12.8992 23.7568 17.0048C23.7568 21.7536 27.9264 23.4336 28.0512 23.4752C28.032 23.5776 27.3888 25.776 25.8528 28.016C24.4832 29.9872 23.0528 31.9552 20.8768 31.9552C18.7008 31.9552 18.1408 30.6912 15.6288 30.6912C13.1808 30.6912 12.3104 31.9968 10.32 31.9968C8.3296 31.9968 6.9408 30.1728 5.344 27.9328C3.4944 25.3024 2 21.216 2 17.3376C2 11.1168 6.0448 7.8176 10.0256 7.8176C12.1408 7.8176 13.904 9.2064 15.232 9.2064C16.496 9.2064 18.4672 7.7344 20.8736 7.7344C21.7856 7.7344 25.0624 7.8176 27.2192 10.9088ZM19.7312 5.1008C20.7264 3.92 21.4304 2.2816 21.4304 0.6432C21.4304 0.416 21.4112 0.1856 21.3696 0C19.7504 0.0608 17.824 1.0784 16.6624 2.4256C15.7504 3.4624 14.8992 5.1008 14.8992 6.7616C14.8992 7.0112 14.9408 7.2608 14.96 7.3408C15.0624 7.36 15.2288 7.3824 15.3952 7.3824C16.848 7.3824 18.6752 6.4096 19.7312 5.1008Z" fill="black"/>
                      </svg>
                      <div class="grow">
                        <span class="text-sm text-gray-600 dark:text-gray-400">Apple</span>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-2">
                    <span class="text-sm text-gray-600 dark:text-gray-400">Wednesday 06:45 pm</span>
                  </div>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-2">
                    <span class="text-sm text-gray-600 dark:text-gray-400">In 3 days</span>
                  </div>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-2">
                    <span class="text-sm text-gray-600 dark:text-gray-400">
                      jackob@site.com
                    </span>
                  </div>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-2 flex gap-x-1">
                    <svg class="w-3 h-3 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg class="w-3 h-3 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg class="w-3 h-3 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg class="w-3 h-3 text-gray-300 dark:text-gray-700" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg class="w-3 h-3 text-gray-300 dark:text-gray-700" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                  </div>
                </td>
              </tr>

              <tr>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="pl-6 py-2">
                    <label for="hs-at-with-checkboxes-5" class="flex">
                      <input type="checkbox" class="shrink-0 border-gray-200 rounded text-blue-600 pointer-events-none focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-at-with-checkboxes-5">
                      <span class="sr-only">Checkbox</span>
                    </label>
                  </div>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-2">
                    <div class="flex items-center gap-x-2">
                      <svg class="inline-block h-5 w-5" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.022522 25.602H4.0222V23.0837H9.1218V25.602H13.1215V6.31556H0.022522V25.602Z" fill="#1F2E5C"/>
                        <path d="M20.121 0.939339C19.521 0.939339 19.0211 1.43899 19.0211 2.03856C19.0211 2.63814 19.521 3.13779 20.121 3.13779C20.7209 3.13779 21.2209 2.63814 21.2209 2.03856C21.2209 1.43899 20.7209 0.939339 20.121 0.939339Z" fill="#1F2E5C"/>
                        <path d="M20.121 5.99578C19.521 5.99578 19.0211 6.49543 19.0211 7.095C19.0211 7.69458 19.521 8.19423 20.121 8.19423C20.7209 8.19423 21.2209 7.69458 21.2209 7.095C21.2209 6.47544 20.7209 5.99578 20.121 5.99578Z" fill="#1F2E5C"/>
                        <path d="M20.121 11.0322C19.521 11.0322 19.0211 11.5319 19.0211 12.1315C19.0211 12.731 19.521 13.2307 20.121 13.2307C20.7209 13.2307 21.2209 12.731 21.2209 12.1315C21.2209 11.5319 20.7209 11.0322 20.121 11.0322Z" fill="#1F2E5C"/>
                        <path d="M25.2606 0.939339C24.6606 0.939339 24.1606 1.43899 24.1606 2.03856C24.1606 2.63814 24.6606 3.13779 25.2606 3.13779C25.8605 3.13779 26.3605 2.63814 26.3605 2.03856C26.3605 1.43899 25.8805 0.939339 25.2606 0.939339Z" fill="#1F2E5C"/>
                        <path d="M25.2606 5.99578C24.6606 5.99578 24.1606 6.49543 24.1606 7.095C24.1606 7.69458 24.6606 8.19423 25.2606 8.19423C25.8605 8.19423 26.3605 7.69458 26.3605 7.095C26.3605 6.47544 25.8805 5.99578 25.2606 5.99578Z" fill="#1F2E5C"/>
                        <path d="M25.2606 11.0322C24.6606 11.0322 24.1606 11.5319 24.1606 12.1315C24.1606 12.731 24.6606 13.2307 25.2606 13.2307C25.8605 13.2307 26.3605 12.731 26.3605 12.1315C26.3605 11.5319 25.8805 11.0322 25.2606 11.0322Z" fill="#1F2E5C"/>
                        <path d="M30.3201 0.939339C29.7202 0.939339 29.2202 1.43899 29.2202 2.03856C29.2202 2.63814 29.7202 3.13779 30.3201 3.13779C30.9201 3.13779 31.42 2.63814 31.42 2.03856C31.44 1.43899 30.9401 0.939339 30.3201 0.939339Z" fill="#1F2E5C"/>
                        <path d="M30.3201 5.99578C29.7202 5.99578 29.2202 6.49543 29.2202 7.095C29.2202 7.69458 29.7202 8.19423 30.3201 8.19423C30.9201 8.19423 31.42 7.69458 31.42 7.095C31.44 6.47544 30.9401 5.99578 30.3201 5.99578Z" fill="#1F2E5C"/>
                        <path d="M30.3201 11.0322C29.7202 11.0322 29.2202 11.5319 29.2202 12.1315C29.2202 12.731 29.7202 13.2307 30.3201 13.2307C30.9201 13.2307 31.42 12.731 31.42 12.1315C31.42 11.5319 30.9401 11.0322 30.3201 11.0322Z" fill="#1F2E5C"/>
                        <path d="M6.722 18.8867C3.10228 18.8068 0.102519 21.6648 0.00252728 25.2822C-0.0974652 28.8997 2.78231 31.8975 6.40202 31.9975C10.0217 32.0974 13.0215 29.2194 13.1215 25.602C13.2015 21.9845 10.3417 18.9667 6.722 18.8867ZM8.76184 27.7804H4.36219V23.4035H8.74185V27.7804H8.76184Z" fill="#DE2179"/>
                        <path d="M6.56204 13.1108C10.1847 13.1108 13.1215 10.1758 13.1215 6.55539C13.1215 2.93494 10.1847 0 6.56204 0C2.93934 0 0.00256348 2.93494 0.00256348 6.55539C0.00256348 10.1758 2.93934 13.1108 6.56204 13.1108Z" fill="#42BA9B"/>
                        <path d="M18.4811 17.6476V31.1581H32V17.6476H18.4811ZM29.2602 27.4407H21.2409V25.7619H29.2602V27.4407ZM29.2602 23.0238H21.2409V21.345H29.2602V23.0238Z" fill="#42BA9B"/>
                      </svg>
                      <div class="grow">
                        <span class="text-sm text-gray-600 dark:text-gray-400">Capsule</span>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-2">
                    <span class="text-sm text-gray-600 dark:text-gray-400">January 15</span>
                  </div>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-2">
                    <span class="text-sm text-gray-600 dark:text-gray-400">In 1 week</span>
                  </div>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-2">
                    <span class="text-sm text-gray-600 dark:text-gray-400">
                      amanda@site.com
                    </span>
                  </div>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-2 flex gap-x-1">
                    <svg class="w-3 h-3 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg class="w-3 h-3 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg class="w-3 h-3 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg class="w-3 h-3 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg class="w-3 h-3 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                  </div>
                </td>
              </tr>

              <tr>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="pl-6 py-2">
                    <label for="hs-at-with-checkboxes-6" class="flex">
                      <input type="checkbox" class="shrink-0 border-gray-200 rounded text-blue-600 pointer-events-none focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-at-with-checkboxes-6">
                      <span class="sr-only">Checkbox</span>
                    </label>
                  </div>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-2">
                    <div class="flex items-center gap-x-2">
                      <svg class="inline-block h-5 w-5" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 2L0 7.27424L8 12.471L15.9999 7.27424L8 2ZM23.9999 2L15.9999 7.27424L23.9999 12.471L31.9998 7.27424L23.9999 2ZM0 17.7451L8 23.0194L15.9999 17.7451L8 12.471L0 17.7451ZM23.9999 12.471L15.9999 17.7451L23.9999 23.0194L31.9998 17.7451L23.9999 12.471ZM8 24.7258L15.9999 30L23.9999 24.7258L15.9999 19.5291L8 24.7258Z" fill="#0062FF"/>
                      </svg>
                      <div class="grow">
                        <span class="text-sm text-gray-600 dark:text-gray-400">Dropbox</span>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-2">
                    <span class="text-sm text-gray-600 dark:text-gray-400">January 19</span>
                  </div>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-2">
                    <span class="text-sm text-gray-600 dark:text-gray-400">In 2 weeks</span>
                  </div>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-2">
                    <span class="text-sm text-gray-600 dark:text-gray-400">
                      baba@site.com
                    </span>
                  </div>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-2 flex gap-x-1">
                    <svg class="w-3 h-3 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg class="w-3 h-3 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg class="w-3 h-3 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg class="w-3 h-3 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg class="w-3 h-3 text-gray-300 dark:text-gray-700" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                  </div>
                </td>
              </tr>

              <tr>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="pl-6 py-2">
                    <label for="hs-at-with-checkboxes-7" class="flex">
                      <input type="checkbox" class="shrink-0 border-gray-200 rounded text-blue-600 pointer-events-none focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-at-with-checkboxes-7">
                      <span class="sr-only">Checkbox</span>
                    </label>
                  </div>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-2">
                    <div class="flex items-center gap-x-2">
                      <svg class="inline-block h-5 w-5" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M28.6156 25.8849C28.3919 27.5493 27.2718 28.9884 25.7044 29.6283C24.9363 29.9475 24.1041 30.0444 23.2719 29.9475C22.4725 29.852 21.6716 29.5955 20.8409 29.1167C19.6895 28.4754 18.5367 27.4851 17.193 26.0131C19.3047 23.421 20.5844 21.0542 21.0647 18.9424C21.2884 17.9506 21.3212 17.0542 21.2242 16.222C21.0959 15.4227 20.8081 14.6858 20.3607 14.0461C19.3689 12.6069 17.7045 11.7747 15.8492 11.7747C13.9938 11.7747 12.3295 12.6381 11.3377 14.0461C10.8902 14.6858 10.6024 15.4227 10.4741 16.222C10.3459 17.0542 10.3787 17.9819 10.6337 18.9424C11.114 21.0542 12.4249 23.4538 14.5054 26.0444C13.193 27.5164 12.0103 28.5082 10.8574 29.1481C10.0253 29.6283 9.22585 29.8848 8.42644 29.9802C7.60169 30.0727 6.768 29.9623 5.99545 29.6611C4.42798 29.0213 3.30794 27.5806 3.08423 25.9176C2.98878 25.1183 3.0529 24.3189 3.37207 23.4225C3.46752 23.1019 3.62859 22.7827 3.78817 22.3994C4.01188 21.8879 4.2684 21.3435 4.52343 20.7992L4.55624 20.735C6.76352 15.967 9.13185 11.1036 11.5957 6.3683L11.6911 6.17591C11.9476 5.69717 12.2027 5.18413 12.4592 4.7039C12.7157 4.19234 13.0036 3.71211 13.3556 3.29601C14.0281 2.52793 14.923 2.11183 15.9148 2.11183C16.9066 2.11183 17.8029 2.52793 18.4741 3.29601C18.826 3.71211 19.1138 4.19234 19.3704 4.7039C19.6269 5.18413 19.8819 5.69568 20.1384 6.17442L20.2354 6.36681C22.6664 11.1333 25.0347 15.9968 27.242 20.7649V20.7961C27.4985 21.3077 27.7223 21.8849 27.9773 22.3964C28.1369 22.7813 28.2979 23.1004 28.3934 23.4195C28.6484 24.2533 28.7438 25.0527 28.6156 25.8849ZM15.8492 24.38C14.1221 22.2041 13.0021 20.1564 12.6173 18.4293C12.4577 17.6926 12.4249 17.0527 12.5218 16.477C12.586 15.9655 12.7784 15.5166 13.0334 15.1333C13.6419 14.2698 14.665 13.7254 15.8492 13.7254C17.0333 13.7254 18.0893 14.2384 18.665 15.1333C18.9215 15.5181 19.1124 15.9655 19.1765 16.477C19.2719 17.0527 19.2407 17.7253 19.081 18.4293C18.6978 20.125 17.5777 22.1727 15.8492 24.38ZM30.28 22.7171C30.1204 22.3338 29.9594 21.9177 29.7998 21.5658C29.5432 20.9901 29.2882 20.4457 29.063 19.9341L29.0317 19.9028C26.8244 15.1035 24.4561 10.24 21.961 5.44065L21.8655 5.24826C21.609 4.76802 21.3539 4.25648 21.0974 3.74492C20.7768 3.16924 20.4576 2.56074 19.9461 1.98506C18.9215 0.703944 17.4495 0 15.882 0C14.2817 0 12.8425 0.703944 11.7851 1.91944C11.3049 2.49512 10.9529 3.10361 10.6337 3.6793C10.3772 4.19085 10.1221 4.7024 9.86562 5.18263L9.77022 5.37354C7.30639 10.1729 4.90672 15.0364 2.69944 19.8357L2.66812 19.8998C2.44441 20.4114 2.18789 20.9558 1.93137 21.5314C1.75986 21.9103 1.60028 22.295 1.45114 22.6828C1.03503 23.867 0.906774 24.987 1.06635 26.1384C1.41833 28.5381 3.0186 30.5544 5.22588 31.4493C6.05809 31.8012 6.92162 31.9609 7.81795 31.9609C8.07447 31.9609 8.39363 31.9295 8.65014 31.8967C9.70607 31.7684 10.7933 31.418 11.8493 30.8095C13.1616 30.0742 14.4085 29.0183 15.8164 27.4821C17.2243 29.0183 18.5038 30.0742 19.7835 30.8095C20.8394 31.418 21.9267 31.7684 22.9826 31.8967C23.2391 31.9295 23.5583 31.9609 23.8148 31.9609C24.7111 31.9609 25.606 31.8012 26.4068 31.4493C28.6469 30.5529 30.2144 28.5052 30.5664 26.1384C30.8229 25.0198 30.6947 23.9013 30.28 22.7171Z" fill="#E0565B"/>
                      </svg>
                      <div class="grow">
                        <span class="text-sm text-gray-600 dark:text-gray-400">Airbnb</span>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-2">
                    <span class="text-sm text-gray-600 dark:text-gray-400">In 2 days</span>
                  </div>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-2">
                    <span class="text-sm text-gray-600 dark:text-gray-400">45 minutes ago</span>
                  </div>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-2">
                    <span class="text-sm text-gray-600 dark:text-gray-400">
                      amanda@site.com
                    </span>
                  </div>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-2 flex gap-x-1">
                    <svg class="w-3 h-3 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg class="w-3 h-3 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg class="w-3 h-3 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg class="w-3 h-3 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg class="w-3 h-3 text-gray-300 dark:text-gray-700" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                  </div>
                </td>
              </tr>

              <tr>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="pl-6 py-2">
                    <label for="hs-at-with-checkboxes-8" class="flex">
                      <input type="checkbox" class="shrink-0 border-gray-200 rounded text-blue-600 pointer-events-none focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-at-with-checkboxes-8">
                      <span class="sr-only">Checkbox</span>
                    </label>
                  </div>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-2">
                    <div class="flex items-center gap-x-2">
                      <svg class="inline-block h-5 w-5" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 16C13.8 16 12 14.2 12 12C12 9.8 13.78 8 16 8C18.2 8 20 9.78 20 12C20 14.22 18.22 16 16 16ZM16 0C9.38 0 4 5.38 4 12C4 18.64 9.38 24 16 24C22.62 24 28 18.64 28 12.02C28 12.02 28 12.02 28 12C28 5.38 22.64 0 16 0Z" fill="#5C54FF"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8 24C5.8 24 4 25.78 4 28C4 30.2 5.78 32 8 32C10.2 32 12 30.22 12 28C12 25.78 10.22 24 8 24Z" fill="#5C54FF"/>
                      </svg>
                      <div class="grow">
                        <span class="text-sm text-gray-600 dark:text-gray-400">Prosperops</span>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-2">
                    <span class="text-sm text-gray-600 dark:text-gray-400">January 19</span>
                  </div>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-2">
                    <span class="text-sm text-gray-600 dark:text-gray-400">In 2 weeks</span>
                  </div>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-2">
                    <span class="text-sm text-gray-600 dark:text-gray-400">
                      baba@site.com
                    </span>
                  </div>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-2 flex gap-x-1">
                    <svg class="w-3 h-3 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg class="w-3 h-3 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg class="w-3 h-3 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg class="w-3 h-3 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg class="w-3 h-3 text-gray-300 dark:text-gray-700" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                  </div>
                </td>
              </tr>

              <tr>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="pl-6 py-2">
                    <label for="hs-at-with-checkboxes-9" class="flex">
                      <input type="checkbox" class="shrink-0 border-gray-200 rounded text-blue-600 pointer-events-none focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-at-with-checkboxes-9">
                      <span class="sr-only">Checkbox</span>
                    </label>
                  </div>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-2">
                    <div class="flex items-center gap-x-2">
                      <svg class="inline-block h-5 w-5" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M20.7756 0.817807C21.0668 1.14874 21.2152 1.59531 21.5122 2.48848L28 22C25.6013 20.8608 22.9936 20.0392 20.2435 19.5959L16.0194 6.52725C15.9502 6.31342 15.7357 6.16673 15.4921 6.16673C15.2479 6.16673 15.033 6.31419 14.9644 6.52876L10.7914 19.5893C8.02853 20.0306 5.40898 20.8537 3 21.997L9.51961 2.48395H9.51964C9.81754 1.59235 9.96647 1.14655 10.2577 0.8162C10.5147 0.52457 10.8491 0.298081 11.2289 0.158314C11.6592 -7.84748e-08 12.1684 0 13.1868 0H17.8435C18.8633 0 19.3731 -6.53957e-08 19.8038 0.158646C20.1839 0.298701 20.5185 0.525645 20.7756 0.817807Z" fill="url(#paint0_linear_6174_181132)"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M21.7702 22.5899C20.6488 23.4013 18.4105 23.9547 15.8322 23.9547C12.6678 23.9547 10.0155 23.1211 9.31169 22C9.06009 22.6425 9.00367 23.3778 9.00367 23.8476C9.00367 23.8476 8.8379 26.154 10.7339 27.7585C10.7339 26.9254 11.532 26.2503 12.5165 26.2503C14.204 26.2503 14.2021 27.4959 14.2005 28.5065C14.2005 28.5368 14.2004 28.5668 14.2004 28.5966C14.2004 30.1306 15.3084 31.4455 16.8842 32C16.6489 31.5904 16.5168 31.1303 16.5168 30.6444C16.5168 29.1814 17.5319 28.6364 18.7116 28.0033C19.6503 27.4996 20.6933 26.94 21.412 25.8173C21.787 25.2314 22 24.5606 22 23.8476C22 23.4091 21.9195 22.9866 21.7702 22.5899Z" fill="#FF5D01"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M21.7702 22.5899C20.6488 23.4013 18.4105 23.9547 15.8322 23.9547C12.6678 23.9547 10.0155 23.1211 9.31169 22C9.06009 22.6425 9.00367 23.3778 9.00367 23.8476C9.00367 23.8476 8.8379 26.154 10.7339 27.7585C10.7339 26.9254 11.532 26.2503 12.5165 26.2503C14.204 26.2503 14.2021 27.4959 14.2005 28.5065C14.2005 28.5368 14.2004 28.5668 14.2004 28.5966C14.2004 30.1306 15.3084 31.4455 16.8842 32C16.6489 31.5904 16.5168 31.1303 16.5168 30.6444C16.5168 29.1814 17.5319 28.6364 18.7116 28.0033C19.6503 27.4996 20.6933 26.94 21.412 25.8173C21.787 25.2314 22 24.5606 22 23.8476C22 23.4091 21.9195 22.9866 21.7702 22.5899Z" fill="url(#paint1_linear_6174_181132)"/>
                        <defs>
                        <linearGradient id="paint0_linear_6174_181132" x1="22.8116" y1="-1.03449" x2="16.6052" y2="22.2941" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#000014"/>
                        <stop offset="1" stop-color="#150426"/>
                        </linearGradient>
                        <linearGradient id="paint1_linear_6174_181132" x1="26.8194" y1="15.9897" x2="21.801" y2="28.406" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FF1639"/>
                        <stop offset="1" stop-color="#FF1639" stop-opacity="0"/>
                        </linearGradient>
                        </defs>
                      </svg>
                      <div class="grow">
                        <span class="text-sm text-gray-600 dark:text-gray-400">Astro</span>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-2">
                    <span class="text-sm text-gray-600 dark:text-gray-400">Monday 12:12 pm</span>
                  </div>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-2">
                    <span class="text-sm text-gray-600 dark:text-gray-400">In 3 days</span>
                  </div>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-2">
                    <span class="text-sm text-gray-600 dark:text-gray-400">
                      brian@site.com
                    </span>
                  </div>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-2 flex gap-x-1">
                    <svg class="w-3 h-3 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg class="w-3 h-3 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg class="w-3 h-3 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg class="w-3 h-3 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg class="w-3 h-3 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
          <!-- End Table -->

          <!-- Footer -->
          <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200 dark:border-gray-700">
            <div class="inline-flex items-center gap-x-2">
              <p class="text-sm text-gray-600 dark:text-gray-400">
                Showing:
              </p>
              <div class="max-w-sm space-y-3">
                <select class="py-2 px-3 pr-9 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option selected>9</option>
                  <option>20</option>
                </select>
              </div>
              <p class="text-sm text-gray-600 dark:text-gray-400">
                of 20
              </p>
            </div>

            <div>
              <div class="inline-flex gap-x-2">
                <button type="button" class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                  <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                  </svg>
                  Prev
                </button>

                <button type="button" class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                  Next
                  <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                  </svg>
                </button>
              </div>
            </div>
          </div>
          <!-- End Footer -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Card -->
</div>
<!-- End Table Section -->
</body>
</html>