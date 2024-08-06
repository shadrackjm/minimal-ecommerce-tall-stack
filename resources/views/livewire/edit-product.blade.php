<div>
    {{-- <livewire:bread-crumb :url="$currentUrl" /> --}}
    <!-- Card Section -->
    <div class="max-w-4xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Card -->
        <div class="bg-slate-100 rounded-xl shadow p-4 sm:p-7">
            <form wire:submit="update">
                <!-- Section -->
                <div class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200">
                    <div class="sm:col-span-12">
                        <h2 class="text-lg font-semibold text-gray-800">
                            Edit Product Details
                        </h2>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-3">
                        <label for="af-submit-application-full-name" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                            Product name
                        </label>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-9">
                        <div>
                            <input type="text" wire:model="product_name" id="af-submit-application-full-name" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
							@error('product_name') <span class="text-red-500">{{ $message }}</span> @enderror
						</div>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-3">
                        <label for="af-submit-application-email" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                            Price
                        </label>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-9">
                        <input id="af-submit-application-email" wire:model="product_price" type="text" inputmode="decimal" pattern="[0-9]*[.,]?[0-9]*" class="py-2 px-3 pe-11 block w-full  shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
						@error('product_price') <span class="text-red-500">{{ $message }}</span> @enderror
					</div>
                    <!-- End Col -->

					<div class="sm:col-span-3">
                        <label for="af-submit-application-email" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                            Category
                        </label>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-9">
						<select wire:model="category_id" class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
							<option selected="">Select Product Category</option>
							@foreach ($all_categories as $category)
								<option value="{{ $category->id }}" wire:key="{{ $category->id }}" {{ $product_details->category_id == $category->id ? 'selected' : '' }}>{{$category->name}}</option>
							@endforeach
							
						</select>
						@error('category_id') <span class="text-red-500">{{ $message }}</span> @enderror
					</div>
                    <!-- End Col -->
                </div>
                <!-- End Section -->

                <!-- Section -->
                <div class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200">
                    <div class="sm:col-span-12">
                        <h2 class="text-lg font-semibold text-gray-800">
                            More Details
                        </h2>
                    </div>
                    <!-- End Col -->
					<div class="sm:col-span-3">
                        
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-9">
                        @if ($photo && is_string($photo))
                            <img src="{{ Storage::url($photo) }}" alt="Product image" height="300px" width="300px" class="rounded-lg">
                        @elseif ($photo)
                            <img src="{{ $photo->temporaryUrl() }}" alt="Product image" height="300px" width="300px" class="rounded-lg">
                        @else
                            <img src="{{ asset('default-image.jpg') }}" alt="default image" height="300px" width="300px" class="rounded-lg">
                        @endif
					</div>
                    <!-- End Col -->
                    <div class="sm:col-span-3">
                        <label for="af-submit-application-resume-cv" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                            Product Image
                        </label>
                    </div>
                    <!-- End Col -->
					
                    <div x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-start="uploading = true" x-on:livewire-upload-finish="uploading = true" x-on:livewire-upload-error="uploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress" class="sm:col-span-9">
                        <label for="file" class="sr-only">Choose Image</label>
                        <input type="file" wire:model="photo" id="file" class="block w-full border  shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none file:bg-gray-50 file:border-0 file:bg-gray-100 file:me-4 file:py-2 file:px-4">
						@error('photo') <span class="text-red-500">{{ $message }}</span> @enderror
                        <!-- File Uploading Progress Form -->
                        <div x-show="uploading">
                            <!-- Progress Bar -->
                            <div class="flex items-center gap-x-3 whitespace-nowrap">
                                <div class="flex w-full h-2 bg-gray-200 rounded-full overflow-hidden" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100">
                                    <div class="flex flex-col justify-center rounded-full overflow-hidden bg-blue-600 text-xs text-white text-center whitespace-nowrap transition duration-500" :style="`width: ${progress}%`"></div>
                                </div>
                                <div class="w-6 text-end">
                                    <span class="text-sm text-gray-800" x-text="`${progress}%`"></span>
                                </div>
                            </div>
                            <!-- End Progress Bar -->
                        </div>
                        <!-- End File Uploading Progress Form -->
                    </div>

                    <div class="sm:col-span-3">
                        <div class="inline-block">
                            <label for="af-submit-application-bio" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                                Product description
                            </label>
                        </div>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-9">
                        <textarea id="af-submit-application-bio" wire:model="product_description" class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" rows="6" placeholder="Add a product description here!"></textarea>
						@error('product_description') <span class="text-red-500">{{ $message }}</span> @enderror
					</div>
                    <!-- End Col -->
                </div>
                <!-- End Section -->
                <button type="submit" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                    <div wire:loading class="animate-spin inline-block size-4 border-[3px] border-current border-t-transparent text-white-600 rounded-full" role="status" aria-label="loading">
                      <span class="sr-only">Loading...</span>
                    </div>  
                  Submit and Save
                </button>
            </form>
        </div>
        <!-- End Card -->
    </div>
    <!-- End Card Section -->
</div>
