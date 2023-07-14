<!doctype html>
<html>
<head>
    <meta charset='utf-8' />
    <metap name="viewport" content="width=device-width, onotial-scale=1.0">
    @vite('resources/css/app.css')
    <style>
        body {
            padding-top: 30px;
            padding-left: 30px;
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
{{ Breadcrumbs::render('about2') }}
  <body class="h-full">
    <body class="antialiased">
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
                寺院マスタ入力・修正
              </h2>
            </div>

            <div>
                <a class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800" href="#">
                  <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.63452 7.50001L13.6345 7.5M8.13452 13V2" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                  </svg>
                  新規登録
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
                      表示順
                    </span>
                  </div>
                </th>

                <th scope="col" class="px-6 py-3 text-left">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                    か　な<br/>  
                    施設名
                    </span>
                  </div>
                </th>

                <th scope="col" class="px-6 py-3 text-left">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                    宗旨/備考
                    </span>
                  </div>
                </th>

                <th scope="col" class="px-6 py-3 text-left">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                      TEL
                    </span>
                  </div>
                </th>

                <th scope="col" class="px-6 py-3 text-left">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                      FAX
                    </span>
                  </div>
                </th>
              </tr>
            </thead>
  @foreach($places as $place)
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
                  {{$place->id}}
                      </div>
                    </div>    
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-2">
                  {{$place->display_order}}
                  </div>
                </td>
                    </div>
                  </div>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-2">
                        {{$place->name_kana}}<br/>
                        {{$place->name}}
                  </div>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-2">
                    <span class="text-sm text-gray-600 dark:text-gray-400">{{$place->religion_group}}</span>
                  </div>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-2">
                    <span class="text-sm text-gray-600 dark:text-gray-400">
                        {{$place->tel}}
                    </span>
                  </div>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-2 flex gap-x-1">
                     <span class="text-sm text-gray-600 dark:text-gray-400">
                        {{$place->fax}}
                    </span>
                  </div>
                </td>
              </tr>
             @endforeach 
            </tbody>
        </table>          
<!-- End Table Section -->

</body>
</html>
