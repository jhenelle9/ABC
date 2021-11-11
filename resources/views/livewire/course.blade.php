<div class="mx-auto flex">
      {{-- table --}}
  <div class="flex mt-20 flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div
          class="
            shadow
            overflow-hidden
            border-b border-gray-200
            sm:rounded-lg
          "
        >
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="
                    px-6
                    py-3
                    text-left text-xs
                    font-medium
                    text-gray-500
                    uppercase
                    tracking-wider
                  ">
                  Name
                </th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($info as $item)
                    
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">
                                    {{ $item->course }}
                                </div>
                            </div>
                        </div>
                    </td>
                <td class="
                    px-6
                    py-4
                    whitespace-nowrap
                    text-right text-sm
                    font-medium
                  ">
                  <a wire:click.prevent ="edit({{ $item->id }})" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                </td>
              <td class="
                    px-6
                    py-4
                    whitespace-nowrap
                    text-right text-sm
                    font-medium
                  ">
                  <a href="#" wire:click.prevent ="delete({{ $item->id }})" class="text-indigo-600 hover:text-indigo-900">Delete</a>
                </td>
                @endforeach
            </tr>
              <!-- More people... -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
{{-- add new --}}
 <div class="px-4 py-16 mx-auto max-w-screen-xl sm:px-6 lg:px-8">
    <div class="max-w-lg mx-auto">
      <h1 class="text-2xl font-bold text-center mt-10 text-indigo-600 sm:text-3xl">Add new subject today</h1>
  
      <form action="" class="p-8 mt-6 mb-0 rounded-lg shadow-2xl space-y-4">
        <p class="text-lg font-medium">Let's add now</p>
  
        <div>
          <label for="cour" class="text-sm font-medium">Course</label>
  
          <div class="relative mt-1">
            <input
            wire:model="course"
              type="text"
              id="cour"
              class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm"
              placeholder="Enter course"
            />
            </div>
        </div>
        @if ($edit_mode == false)
        <button wire:click.prevent="add" type="submit" class="block w-full px-5 py-3 text-sm font-medium text-white bg-indigo-600 rounded-lg">
        Add Now
        </button>            
        @else
        <button wire:click.prevent="update" type="submit" class="block w-full px-5 py-3 text-sm font-medium text-white bg-indigo-600 rounded-lg">
        Update Now
        </button>            
        @endif
        </form>
    </div>
 </div>
  
    {{-- The Master doesn't talk, he acts. --}}
</div>
