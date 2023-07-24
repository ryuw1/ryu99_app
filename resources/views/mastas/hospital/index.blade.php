      <!-- Table Section -->
      @extends('mastas.layout')
      @section('content')
      <div class="flort-left">  
        <h2 class="text-xl font-semibold text-gray-800">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;病院マスタ
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
                      <th scope="col" class="px-6 py-3 text-left">
                        <div class="flex items-center gap-x-2">
                          <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                            表示順
                          </span>
                        </div>
                      </th>
                      <th scope="col" class="px-6 py-3 text-left">
                        <div class="flex items-center gap-x-2">
                          <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                            地域名
                          </span>
                        </div>
                      </th>
                      <th scope="col" class="px-6 py-3 text-left">
                        <div class="flex items-center gap-x-2">
                          <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                          か　な<br/>  
                          病院名
                          </span>
                        </div>
                      </th>
                      <th scope="col" class="px-6 py-3 text-left">
                        <div class="flex items-center gap-x-2">
                          <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                          郵便番号
                          </span>
                        </div>
                      </th>
                      <th scope="col" class="px-6 py-3 text-left">
                        <div class="flex items-center gap-x-2">
                          <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                          住所1
                          </span>
                        </div>
                      </th>
                      <th scope="col" class="px-6 py-3 text-left">
                        <div class="flex items-center gap-x-2">
                          <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                          住所2
                          </span>
                        </div>
                      </th>
                      <th scope="col" class="px-6 py-3 text-left">
                        <div class="flex items-center gap-x-2">
                          <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                            TEL
                          </span>
                        </div>
                      </th>
                      <th scope="col" class="px-6 py-3 text-left">
                        <div class="flex items-center gap-x-2">
                          <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                            FAX
                          </span>
                        </div>
                      </th>
                      <th>
                        <div class="row justify-content-center"> 
                          <a href="{{ route('hospital.create') }}" class="btn btn-outline-success flort-right">新規登録</a>
                           </div>
                      </th>
                    </tr>
                  </thead>
        @foreach($hospitals as $hospital)
                  <tbody class="divide-y divide-gray-200">
                    <tr> 
                      <td class="h-px w-px whitespace-nowrap">
                        <div class="px-6 py-2">
                        {{$hospital->display_order}}
                        </div>
                      </td>
                          </div>
                        </div>
                      </td>
                      <td class="h-px w-px whitespace-nowrap">
                        <div class="px-6 py-2">
                        {{$hospital->area_name}}
                        </div>
                      </td>
                          </div>
                        </div>
                      </td>
                      <td class="h-px w-px whitespace-nowrap">
                        <div class="px-6 py-2">
                              {{$hospital->name_kana}}<br/>
                              {{$hospital->name}}
                        </div>
                      </td>
                      <td class="h-px w-px whitespace-nowrap">
                        <div class="px-6 py-2">
                          <span class="text-sm text-gray-600">{{$hospital->postal_code}}</span>
                        </div>
                      </td>
                      <td class="h-px w-px whitespace-nowrap">
                        <div class="px-6 py-2">
                          <span class="text-sm text-gray-600">{{$hospital->adress1}}</span>
                        </div>
                      </td>
                      <td class="h-px w-px whitespace-nowrap">
                        <div class="px-6 py-2">
                          <span class="text-sm text-gray-600">{{$hospital->adress2}}</span>
                        </div>
                      </td>
                      <td class="h-px w-px whitespace-nowrap">
                        <div class="px-6 py-2">
                          <span class="text-sm text-gray-600">
                              {{$hospital->tel}}
                          </span>
                        </div>
                      </td>
                      <td class="h-px w-px whitespace-nowrap">
                        <div class="px-6 py-2 flex gap-x-1">
                           <span class="text-sm text-gray-600">
                              {{$hospital->fax}}
                          </span>
                        </div>
                      </td>
                      <td class="h-px w-px whitespace-nowrap">
                        <div class="px-6 py-2 flex gap-x-1">
                           <span class="text-sm text-gray-600">
                            	
                              <a href="{{ route('hospital.edit', $hospital) }}" class="btn btn-outline-primary">編集</a>
                              <a href="{{ route('hospital.destroy', $hospital->id) }}" class="btn btn-outline-danger" onclick='return confirm("本当に削除しますか？")'>削除</a>

                          </span>
                        </div>
                      </td>
                    </tr>
                   @endforeach 
                  </tbody>
              </table>   
             <!-- End Table Section -->
             {{ $hospitals->appends(request()->query())->links('vendor.pagination.tailwind2') }}
             @endsection
               <!-- paginate-->
           