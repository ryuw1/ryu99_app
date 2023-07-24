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
                                <a class="btn btn-primary" href="{{ route('temple.index') }}"> Back</a>
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
                            表示順
                          </span>
                        </div>
                      </th>
      
                      <th scope="col" class="px-6 py-3 text-center">
                        <div class="flex items-center gap-x-2">
                          <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                          か　な<br/>  
                          寺院名
                          </span>
                        </div>
                      </th>
      
                      <th scope="col" class="px-6 py-3 text-center">
                        <div class="flex items-center gap-x-2">
                          <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                          宗　旨
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
                            その他
                          </span>
                        </div>
                      </th>
                    </tr>
                  </thead>
                  <form action="{{ route('temple.update', $temple->id) }}" method="POST">
                    @csrf
                  <tbody class="divide-y divide-gray-200">
                    <tr>
                      <td class="h-px w-px whitespace-nowrap">
                        <div class="pl-6 py-2">
                           
                        </div>
                      </td>
                      <td class="h-px w-px whitespace-nowrap">
                        <div class="px-6 py-2">
                          <input type="hidden" name="id" class="form-control" placeholder="" value=" {{ $temple->id }} ">  
                          <input type="text" name="display_order" size="3" class="form-control" placeholder=""value="{{ $temple->display_order }}">
                        </div>
                      </td>
                      <td class="h-px w-px whitespace-nowrap">
                        <div class="px-6 py-2">
                            <input type="text" name="name_kana" size="30" class="form-control" placeholder="" value="{{ $temple->name_kana }}">
                            <input type="text" name="name" size="30" class="form-control" placeholder="" value="{{ $temple->name }}">
                        </div>
                      </td>
                      <td class="h-px w-px whitespace-nowrap">
                        <div class="px-6 py-2">
                            <input type="text" name="religion_group" size="20" class="form-control" placeholder="" value="{{ $temple->religion_group }}">
                        </div>
                      </td>
                      <td class="h-px w-px whitespace-nowrap">
                        <div class="px-6 py-2">
                          <span class="text-sm text-gray-600">
                            <input type="text" name="tel" size="12"  class="form-control" placeholder="" value="{{ $temple->tel }}">
                          </span>
                        </div>
                      </td>
                      <td class="h-px w-px whitespace-nowrap">
                        <div class="px-6 py-2 flex gap-x-1">
                           <span class="text-sm text-gray-600">
                            <input type="text" name="fax" size="12" class="form-control" placeholder="" value="{{ $temple->fax }}">
                          </span>
                        </div>
                      </td>
                      <td class="h-px w-px whitespace-nowrap">
                        <div class="px-6 py-2 flex gap-x-1">
                           <span class="text-sm text-gray-600">
                            <input type="text" name="other" size="30" class="form-control" placeholder="" value="{{ $temple->other }}">
                          </span>
                        </div>
                      </td>
                      <div class="col-lg-12 mt-1 mr-1">
                        <div class="float-right">
                      <input type="submit" value="変　更" class="btn btn-outline-primary">
                      </div>
                    </div>
                    </form>
                    </tr>
                  </tbody>
              </table> 
      <!-- End Table Section -->
      @endsection