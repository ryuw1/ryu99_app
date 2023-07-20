      <!-- Table Section -->
      @extends('mastas.layout')

      @section('content')
                  <div>
                    <div class="inline-flex gap-x-2">
                    
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
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
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
                      <th scope="col" class="pl-6 py-3 text-left">

                      </th>
      
                      <th scope="col" class="px-6 py-3 text-left">
                        <div class="flex items-center gap-x-2">
                          <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                            ID
                          </span>
                        </div>
                      </th>
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
                          か　な<br/>  
                          寺院名
                          </span>
                        </div>
                      </th>
      
                      <th scope="col" class="px-6 py-3 text-left">
                        <div class="flex items-center gap-x-2">
                          <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                          宗　旨
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
                    </tr>
                  </thead>
                  <form action="{{ route('temple.store') }}" method="POST">
                    @csrf
                  <tbody class="divide-y divide-gray-200">
                    <tr>
                      <td class="h-px w-px whitespace-nowrap">
                        <div class="pl-6 py-2">
                        </div>
                      </td>
                      <td class="h-px w-px whitespace-nowrap">
                        <div class="px-6 py-2">
                          <div class="flex items-center gap-x-2">
                            <input type="text" name="id" class="form-control" placeholder="">
                            </div>
                          </div>    
                      <td class="h-px w-px whitespace-nowrap">
                        <div class="px-6 py-2">
                            <input type="text" name="display_order" class="form-control" placeholder="">
                        </div>
                      </td>
                          </div>
                        </div>
                      </td>
                      <td class="h-px w-px whitespace-nowrap">
                        <div class="px-6 py-2">
                            <input type="text" name="name_kana" class="form-control" placeholder="">
                            <input type="text" name="name" class="form-control" placeholder="">
                        </div>
                      </td>
                      <td class="h-px w-px whitespace-nowrap">
                        <div class="px-6 py-2">
                            <input type="text" name="religion_group" class="form-control" placeholder="">
                        </div>
                      </td>
                      <td class="h-px w-px whitespace-nowrap">
                        <div class="px-6 py-2">
                          <span class="text-sm text-gray-600">
                            <input type="text" name="tel" class="form-control" placeholder="">
                          </span>
                        </div>
                      </td>
                      <td class="h-px w-px whitespace-nowrap">
                        <div class="px-6 py-2 flex gap-x-1">
                           <span class="text-sm text-gray-600">
                            <input type="text" name="fax" class="form-control" placeholder="">
                          </span>
                        </div>
                      </td>
                      <td class="h-px w-px whitespace-nowrap">
                        <div class="px-6 py-2 flex gap-x-1">
                           <span class="text-sm text-gray-600">
                            <input type="text" name="other" class="form-control" placeholder="">
                          </span>
                        </div>
                      </td>
                    </tr>
                  </tbody>
              </table> 
              <input type="submit" class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm" href={{ route('temple.create')}}>
                <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M2.63452 7.50001L13.6345 7.5M8.13452 13V2" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                </svg>
            </form>       
      <!-- End Table Section -->
      @endsection