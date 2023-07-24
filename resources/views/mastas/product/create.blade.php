      <!-- Table Section -->
      @extends('mastas.layout')
      @section('content')
                  <div>
                    <div class="inline-flex gap-x-2">
                    
                        <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M2.63452 7.50001L13.6345 7.5M8.13452 13V2" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>

                      </div>
                  </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 mt-1 mr-1">
                            <div class="float-left">
                                <a class="btn btn-primary" href="{{ route('product.index') }}"> Back</a>
                            </div>
                        </div>    
                <!-- End Header -->
                @if ($errors->any())
                <div class="alert alert-danger align align-center">
                    <strong>ご確認下さい</strong> 入力の内容に間違いがあります。<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <!-- Table -->
                <table class="min-w-full divide-y divide-gray-200">
                  <thead class="bg-gray-50">
                    <tr>
                      <th scope="col" class="pl-6 py-3 text-center">

                      </th>
                      <th scope="col" class="px-6 py-3 text-center">
                        <div class="flex items-center gap-x-2">
                          <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                            商品分類
                          </span>
                        </div>
                      </th>
                      <th scope="col" class="px-6 py-3 text-center">
                        <div class="flex items-center gap-x-2">
                          <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                          商品コード
                          </span>
                        </div>
                      </th>
                      <th scope="col" class="px-6 py-3 text-center">
                        <div class="flex items-center gap-x-2">
                          <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                          商品名
                          </span>
                        </div>
                      </th>
                      <th scope="col" class="px-6 py-3 text-center">
                        <div class="flex items-center gap-x-2">
                          <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                          税抜き単価
                          </span>
                        </div>
                      </th>
                      <th scope="col" class="px-6 py-3 text-center">
                        <div class="flex items-center gap-x-2">
                          <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                          税率
                          </span>
                        </div>
                      </th>   
                      <th scope="col" class="px-6 py-3 text-center">
                        <div class="flex items-center gap-x-2">
                          <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                          数
                          </span>
                        </div>
                      </th>
                      <th scope="col" class="px-6 py-3 text-center">
                        <div class="flex items-center gap-x-2">
                          <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                          税込み単価
                          </span>
                        </div>
                      </th>
                      <th scope="col" class="px-6 py-3 text-center">
                        <div class="flex items-center gap-x-2">
                          <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                            その他
                          </span>
                        </div>
                      </th>
                    </tr>
                  </thead>
                  <form action="{{ route('product.store') }}" method="POST">
                    @csrf
                  <tbody class="divide-y divide-gray-200">
                    <tr>
                      <td class="h-px w-px whitespace-nowrap">
                        <div class="pl-6 py-2">
                           
                        </div>
                      </td>
                      <td class="h-px w-px whitespace-nowrap">
                          @csrf
                        <div class="px-6 py-2">
                          <input type="text" name="group_by_product_code" size="3" class="form-control" placeholder=""value="{{ old('group_by_product_code') }}">
                        </div>
                      </td>
                      <td class="h-px w-px whitespace-nowrap">
                        <div class="px-6 py-2">
                          <span class="text-sm text-gray-600">
                            <input type="text" name="code" size="12"  class="form-control" placeholder="" value="{{ old('code') }}">
                          </span>
                        </div>
                      </td>
                      <td class="h-px w-px whitespace-nowrap">
                        <div class="px-6 py-2">
                            <input type="text" name="name" size="30" class="form-control" placeholder="" value="{{ old('name') }}">
                        </div>
                      </td>
                      <td class="h-px w-px whitespace-nowrap">
                        <div class="px-6 py-2">
                            <input type="text" name="unit_price" size="20" class="form-control" placeholder="" value="{{ old('unit_price')}}">
                        </div>
                      </td>
                      <td class="h-px w-px whitespace-nowrap">
                        <div class="px-6 py-2">
                          <span class="text-sm text-gray-600">
                            <input type="text" name="tax_rate" size="12"  class="form-control" placeholder="" value="{{ old('tax_rate') }}">
                          </span>
                        </div>
                      </td>
                      <td class="h-px w-px whitespace-nowrap">
                        <div class="px-6 py-2">
                          <span class="text-sm text-gray-600">
                            <input type="text" name="quantity" size="12"  class="form-control" placeholder="" value="{{ old('quantity') }}">
                          </span>
                        </div>
                      </td>
                      <td class="h-px w-px whitespace-nowrap">
                        <div class="px-6 py-2">
                          <span class="text-sm text-gray-600">
                            <input type="text" name="unit_price_including_tax" size="12"  class="form-control" placeholder="" value="{{ old('unit_price_including_tax') }}">
                          </span>
                        </div>
                      </td>
                      <td class="h-px w-px whitespace-nowrap">
                        <div class="px-6 py-2 flex gap-x-1">
                           <span class="text-sm text-gray-600">
                            <input type="text" name="other" size="12" class="form-control" placeholder="" value="{{ old('other') }}">
                          </span>
                        </div>
                      </td>
                      <div class="col-lg-12 mt-1 mr-1">
                        <div class="float-right">
                      <input type="submit" value="登　録" class="btn btn-outline-primary">
                      </div>
                    </div>
                    </form>
                    </tr>
                  </tbody>
              </table> 
      <!-- End Table Section -->
      @endsection
 
  