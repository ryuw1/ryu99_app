      <!-- Table Section -->
      @extends('mastas.layout')
      @section('content')
      {{ Breadcrumbs::render('about2') }}
      <div class="flort-left">  
        <h2 class="text-xl font-semibold text-gray-800">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;会社マスタ
          </h2>
           <div class="max-w-[85rem] px-4 py-4 sm:px-6 lg:px-8 lg:py-6 mx-auto">
        <!-- Card -->
        <div class="flex flex-col">
          <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
              <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">

                    <!-- Table -->
   <table class="min-w-full divide-y divide-gray-200">
    <thead class="bg-gray-50">
      <tr>
        <th scope="col" class="px-6 py-3 text-center">
          <div class="flex items-center gap-x-2">
            <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
              会社名
            </span>
          </div>
        </th>

        <th scope="col" class="px-6 py-3 text-center">
          <div class="flex items-center gap-x-2">
            <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
            郵便番号
            </span>
          </div>
        </th>

        <th scope="col" class="px-6 py-3 text-center">
          <div class="flex items-center gap-x-2">
            <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
            住　所
            </span>
          </div>
        </th>

        <th scope="col" class="px-6 py-3 text-center">
          <div class="flex items-center gap-x-2">
            <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
              TEL
            </span>
          </div>
        </th>

        <th scope="col" class="px-6 py-3 text-center">
          <div class="flex items-center gap-x-2">
            <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
              FAX
            </span>
          </div>
        </th>
        <th scope="col" class="px-6 py-3 text-center">
          <div class="flex items-center gap-x-2">
            <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
              銀行名
            </span>
          </div>
        </th>
        <th scope="col" class="px-6 py-3 text-center">
          <div class="flex items-center gap-x-2">
            <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
              銀行口座名
            </span>
          </div>
        </th>
      </tr>
    </thead>
 @foreach($companys as $company)
    <tbody class="divide-y divide-gray-200">
      <tr> 
        <td class="h-px w-px whitespace-nowrap">
          <div class="px-6 py-2">
          {{$company->name}}
          </div>
        </td>
            </div>
          </div>
        </td>
        <td class="h-px w-px whitespace-nowrap">
          <div class="px-6 py-2">
                {{$company->postal_code}}<br/>
          </div>
        </td>
        <td class="h-px w-px whitespace-nowrap">
          <div class="px-6 py-2">
            <span class="text-sm text-gray-600">{{$company->adress1}}</span>
          </div>
        </td>
        <td class="h-px w-px whitespace-nowrap">
          <div class="px-6 py-2">
            <span class="text-sm text-gray-600">
                {{$company->tel}}
            </span>
          </div>
        </td>
        <td class="h-px w-px whitespace-nowrap">
          <div class="px-6 py-2 flex gap-x-1">
             <span class="text-sm text-gray-600">
                {{$company->fax}}
            </span>
          </div>
        </td>
        <td class="h-px w-px whitespace-nowrap">
          <div class="px-6 py-2 flex gap-x-1">
             <span class="text-sm text-gray-600">
                {{$company->bank_name}}
            </span>
          </div>
        </td>
        <td class="h-px w-px whitespace-nowrap">
          <div class="px-6 py-2 flex gap-x-1">
             <span class="text-sm text-gray-600">
                {{$company->bank_account}}
            </span>
          </div>
        </td>
      <td class="h-px w-px whitespace-nowrap">
        <div class="px-6 py-2 flex gap-x-1">
           <span class="text-sm text-gray-600">
              
              <a href="{{ route('company.edit', $company) }}" class="btn btn-outline-primary">編集</a>
      </tr>
      @endforeach 
    </tbody>
    </table>
             <!-- End Table Section -->
             @endsection