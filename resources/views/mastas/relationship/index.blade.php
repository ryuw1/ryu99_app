      <!-- Table Section -->
      @extends('mastas.layout')
      @section('content')
      <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Card -->
        <div class="flex flex-col">
          <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
              <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">
                <!-- Header -->

                <!-- End Header -->
      
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
                          続　柄
                          </span>
                        </div>
                        <th scope="col" class="px-6 py-3 text-left">
                      </th>
                        <div class="row justify-content-center"> 
                          <a href="{{ route('relationship.create') }}" class="btn btn-outline-success flort-right">新規登録</a>
                           </div>
                      </th>
                    </tr>
                  </thead>
        @foreach($relationships as $relationship)
                  <tbody class="divide-y divide-gray-200">
                    <tr> 
                      <td class="h-px w-px whitespace-nowrap">
                        <div class="px-6 py-2">
                        {{$relationship->display_order}}
                        </div>
                      </td>
                          </div>
                        </div>
                      </td>
                      <td class="h-px w-px whitespace-nowrap">
                        <div class="px-6 py-2">
                              {{$relationship->name}}
                        </div>
                      </td>
                      <td class="h-px w-px whitespace-nowrap">
                        <div class="px-6 py-2 flex gap-x-1">
                           <span class="text-sm text-gray-600">
                            	
                              <a href="{{ route('relationship.edit', $relationship) }}" class="btn btn-outline-primary">編集</a>
                              <a href="{{ route('relationship.destroy', $relationship->id) }}" class="btn btn-outline-danger" onclick='return confirm("本当に削除しますか？")'>削除</a>

                          </span>
                        </div>
                      </td>
                    </tr>
                   @endforeach 
                  </tbody>
              </table>        
              {{ $relationships->appends(request()->query())->links('vendor.pagination.tailwind2') }}  
             <!-- End Table Section -->
             @endsection