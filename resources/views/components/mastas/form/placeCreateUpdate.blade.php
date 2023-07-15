<!-- Table -->
        <form action="{{ route('temple.create') }}" method="post">
          @csrf
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="pl-6 py-3 text-left">
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
                    施設名
                    </span>
                  </div>
                </th>

                <th scope="col" class="px-6 py-3 text-left">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                    宗旨/備考
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

            <tbody class="divide-y divide-gray-200">
              <tr>
                <td class="h-px w-px whitespace-nowrap">
                </td>
  
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-2">
                    <input type="text" name="display_order" size="4" class="text-sm text-gray-600">
                  </div>
                </td>
                    </div>
                  </div>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-2">
                    <input type="text" name="name_kana" size="30" class="text-sm text-gray-600"><br/>
                    <input type="text" name="name" size="30" class="text-sm text-gray-600">
                  </div>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-2">
                    <input type="text" name="religion_group" size="12" class="text-sm text-gray-600">
                  </div>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-2">
                        <input type="text" name="tel" size="10" class="text-sm text-gray-600">
                    </span>
                  </div>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-2">
                        <input type="text" name="fax" size="10" class="text-sm text-gray-600">
                    </span>
                  </div>
                </td>
              </tr>
            </tbody>
        </table>          
<!-- End Table Section -->
      </form>
