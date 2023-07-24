      <!-- Table Section -->
      @extends('mastas.layout')
      @section('content')
      <div class="flort-left">  
        <h2 class="text-xl font-semibold text-gray-800">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;商品マスタ
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
                            商品分類
                          </span>
                        </div>
                      </th>
                      <th scope="col" class="px-6 py-3 text-left">
                        <div class="flex items-center gap-x-2">
                          <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                          商品コード
                          </span>
                        </div>
                      </th>
                      <th scope="col" class="px-6 py-3 text-left">
                        <div class="flex items-center gap-x-2">
                          <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                          商品名
                          </span>
                        </div>
                      </th>
                      <th scope="col" class="px-6 py-3 text-left">
                        <div class="flex items-center gap-x-2">
                          <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                          税抜き単価
                          </span>
                        </div>
                      </th>
                      <th scope="col" class="px-6 py-3 text-left">
                        <div class="flex items-center gap-x-2">
                          <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                            税率
                          </span>
                        </div>
                      </th>
                      <th scope="col" class="px-6 py-3 text-left">
                        <div class="flex items-center gap-x-2">
                          <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                            数
                          </span>
                        </div>
                      </th>
                      <th>
                        <th scope="col" class="px-6 py-3 text-left">
                          <div class="flex items-center gap-x-2">
                            <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                              税込み単価
                            </span>
                          </div>
                        </th>
                        <th scope="col" class="px-6 py-3 text-left">
                          <div class="flex items-center gap-x-2">
                            <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                              その他
                            </span>
                          </div>
                        </th>
                        <th>
                        <div class="row justify-content-center"> 
                          <a href="{{ route('product.create') }}" class="btn btn-outline-success flort-right">新規登録</a>
                           </div>
                      </th>
                    </tr>
                  </thead>
        @foreach($products as $product)
                  <tbody class="divide-y divide-gray-200">
                    <tr> 
                      <td class="h-px w-px whitespace-nowrap">
                        <div class="px-6 py-2">
                              {{$product->group_by_product_code}}
                        </div>
                      </td>
                      <td class="h-px w-px whitespace-nowrap">
                        <div class="px-6 py-2">
                          <span class="text-sm text-gray-600">{{$product->code}}</span>
                        </div>
                      </td>
                      <td class="h-px w-px whitespace-nowrap">
                        <div class="px-6 py-2">
                          <span class="text-sm text-gray-600">{{$product->name}}</span>
                        </div>
                      </td>
                      <td class="h-px w-px whitespace-nowrap">
                        <div class="px-6 py-2">
                          <span class="text-sm text-gray-600">{{$product->unit_price}}</span>
                        </div>
                      </td>
                      <td class="h-px w-px whitespace-nowrap">
                        <div class="px-6 py-2">
                          <span class="text-sm text-gray-600">
                              {{$product->tax_rate}}
                          </span>
                        </div>
                      </td>
                      <td class="h-px w-px whitespace-nowrap">
                        <div class="px-6 py-2 flex gap-x-1">
                           <span class="text-sm text-gray-600">
                              {{$product->quantity}}
                          </span>
                        </div>
                      </td>
                      <td class="h-px w-px whitespace-nowrap">
                        <div class="px-6 py-2 flex gap-x-1">
                           <span class="text-sm text-gray-600">
                              {{$product->unit_price_including_tax}}
                          </span>
                        </div>
                      </td>
                      <td class="h-px w-px whitespace-nowrap">
                        <div class="px-6 py-2 flex gap-x-1">
                           <span class="text-sm text-gray-600">
                              {{$product->other}}
                          </span>
                        </div>
                      </td>
                      <td class="h-px w-px whitespace-nowrap">
                        <div class="px-6 py-2 flex gap-x-1">
                           <span class="text-sm text-gray-600">
                            	
                              <a href="{{ route('product.edit', $product) }}" class="btn btn-outline-primary">編集</a>
                              <a href="{{ route('product.destroy', $product->id) }}" class="btn btn-outline-danger" onclick='return confirm("本当に削除しますか？")'>削除</a>

                          </span>
                        </div>
                      </td>
                    </tr>
                   @endforeach 
                  </tbody>
              </table>   
             <!-- End Table Section -->
             {{ $products->appends(request()->query())->links('vendor.pagination.tailwind2') }}
             @endsection
               <!-- paginate-->
           