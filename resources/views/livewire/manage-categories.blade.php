<!-- Table Section -->
<div>
  <livewire:bread-crumb :url="$currentUrl" />
  <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <!-- Card -->
    <div class="flex flex-col">
      <div class="-m-1.5 overflow-x-auto">
        <div class="p-1.5 min-w-full inline-block align-middle">
          <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">
            <!-- Header -->
            <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200">
              <div>
                <h2 class="text-xl font-semibold text-gray-800">
                  category
                </h2>
                <p class="text-sm text-gray-600">
                  Add category, edit and more.
                </p>
              </div>
  
                <div class="inline-flex gap-x-2">
                <div class="max-w-md space-y-3">
                    <input type="search" wire:model.live.debounce.300="search" class="peer py-3 px-4 block w-full bg-gray-100 border-blue-500 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="Search category">
                </div>
  
                  <a wire:navigate class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" href="/add/category">
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
                    Add category
                  </a>
                </div>
              </div>
            <!-- End Header -->
  
            <!-- Table -->
            <table class="min-w-full divide-y divide-gray-200">
              <thead class="bg-gray-50  px-5">
                <tr>
  
                  @include('livewire.theaders.th',[
                    'name' => 'name',
                    'columnName' => 'category Name',
                  ])
  
                  @include('livewire.theaders.th',[
                    'name' => 'created_at', //column name from db
                    'columnName' => 'Created', //display name
                  ])
                  <th scope="col" class="px-6 py-3 text-end"></th>
                  <th scope="col" class="px-6 py-3 text-end"></th>
                </tr>
              </thead>
  
              <tbody class="divide-y divide-gray-200">
          @if (count($categories) > 0)
            @foreach ($categories as $category)
            <tr wire:key="{{$category->id}}">
              <td class="size-px  px-5">
                <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
                    <div class="grow">
                      <span class="block text-sm font-semibold text-gray-800">{{str($category->name)->words(3)}}</span>
                  </div>
  
                </div>
              </td>
              <td class="size-px whitespace-nowrap">
                <div class="px-6 py-3">
                <span class="text-sm text-gray-500">{{ date('D M Y, H:i',strtotime($category->created_at))}}</span>
                </div>
              </td>
              <td class="size-px whitespace-nowrap">
                <div class="px-6 py-1.5">
                <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium" href="#">
                  Edit
                </a>
                </div>
              </td>
              <td class="size-px whitespace-nowrap">
                <div class="px-6 py-1.5">
                <a class="inline-flex items-center gap-x-1 text-sm text-red-500 decoration-2 hover:underline focus:outline-none focus:underline font-medium" href="#">
                  Delete
                </a>
                </div>
              </td>
              </tr>
            @endforeach
          @else
            <tr>
              <td class="size-px whitespace-nowrap" colspan="5">
                <div class="px-6 py-3">
                  <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full">
                  No Data Found!
                  </span>
                </div>
                </td>
            </tr>
          @endif
              </tbody>
            </table>
            <!-- End Table -->
  
            <!-- Footer -->
            <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200">
              <div class="flex gap-2">
                <label class="w-32 text-sm font-medium text-gray-900">Per Page</label>
                  <select wire:model.live='perPage'
                      class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                      <option value="5">5</option>
                      <option value="7">10</option>
                      <option value="20">20</option>
                      <option value="50">50</option>
                      <option value="100">100</option>
                  </select>
              </div>
              <!-- the links to different pages -->
              <div>
              {{ $categories->links()}}
              </div>
              
            </div>
            <!-- End Footer -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Card -->
  </div>
</div>

<!-- End Table Section -->