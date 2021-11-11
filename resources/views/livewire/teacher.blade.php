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
                    <th
                      scope="col"
                      class="
                        px-6
                        py-3
                        text-left text-xs
                        font-medium
                        text-gray-500
                        uppercase
                        tracking-wider
                      "
                    >
                      Name
                    </th>
                    <th
                      scope="col"
                      class="
                        px-6
                        py-3
                        text-left text-xs
                        font-medium
                        text-gray-500
                        uppercase
                        tracking-wider
                      "
                    >
                      Email
                    </th>
                    <th
                      scope="col"
                      class="
                        px-6
                        py-3
                        text-left text-xs
                        font-medium
                        text-gray-500
                        uppercase
                        tracking-wider
                      "
                    >
                      Created at
                    </th> 
                    <th scope="col" class="relative px-6 py-3">
                      <span class="sr-only">Edit</span>
                    </th>
                  </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($col as $items)
                        
                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <div class="flex items-center">
                        <div class="ml-4">
                          <div class="text-sm font-medium text-gray-900">
                            {{ $items->fname }}
                          </div>
                        </div>
                      </div>
                    </td>
                    {{-- <td class="px-6 py-4 whitespace-nowrap">
                      <div class="text-sm text-gray-500">
                        {{ $items->class_day }}

                      </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <div class="text-sm text-gray-500">
                        {{ $items->class_time }}

                      </div>
                    </td>
                    --}}
                   <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{ $items->email }}

                    </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{ $items->created_at }}

                    </td> 
                    <td
                      class="
                        px-6
                        py-4
                        whitespace-nowrap
                        text-right text-sm
                        font-medium
                      "
                    >
                      <a wire:click.prevent ="edit({{ $items->id }})" class="text-indigo-600 hover:text-indigo-900"
                        >Edit</a
                      >
                      <a wire:click.prevent ="delete({{ $items->id }})" class="text-indigo-600 hover:text-indigo-900"
                        >Delete</a
                      >
                    </td>
                  </tr> 
                  @endforeach
  
                  <!-- More people... -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
{{-- add new --}}
<div class="px-4 py-16 mx-auto max-w-screen-xl sm:px-6 lg:px-8">
  <div class="max-w-lg bg-white mx-auto">
    <h1 class="text-2xl mt-10 font-bold text-center text-indigo-600 sm:text-3xl">New Teacher</h1>

     <form action="" class="p-8 mt-6 mb-0 rounded-lg shadow-2xl space-y-4">
      <p class="text-lg font-medium">Let's Do This</p>

      <div>
        <label for="" class="text-sm font-medium">Full Name</label>
        <div class="relative mt-1">
          <input
          wire:model="name"
            type="text"
            class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm"
            placeholder="Enter Full Name"
          />
        </div>
        <label for="" class="text-sm mt-4 font-medium">Email</label>
        <div class="relative mt-1">

          <input
          wire:model="email"
            type="email"
            class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm"
            placeholder="Enter Email"
          />
        </div>
        <label for="" class="text-sm mt-4 font-medium">Password</label>
        <div class="relative mt-1">

          <input
          wire:model="password"
            type="password"
            class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm"
            placeholder="Enter Password"
          />
        </div>
        {{-- <label for="" class="text-sm mt-4 font-medium">Courses</label>
      <div class="relative mt-1">
          <select
          wire:model="courses"
            type="text"
            class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm"
            placeholder="Enter course"
          >
        <option value="">Select Course</option>
        @foreach ($collection as $item)
        <option value="{{ $item->id }}">{{ $item->name }}</option>  
        @endforeach  
        </select>

      </div>
        <label for="" class="text-sm mt-4 font-medium">Class Time</label>
      <div class="relative mt-1">

          <select
          wire:model="time"
            type="text"
            class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm"
          >
        <option value="">Class Time</option>  
        <option value="8:00AM">8:00AM</option>  
        <option value="9:00AM">9:00AM</option>  
        <option value="10:00AM">10:00AM</option>  
        <option value="11:00AM">11:00AM</option>  
        <option value="12:00PM">12:00PM</option>  
        <option value="1:00PM">1:00PM</option>  
        <option value="2:00PM">2:00PM</option>  
        <option value="3:00PM">3:00PM</option>  
        <option value="4:00PM">4:00PM</option>  
        <option value="5:00PM">5:00PM</option>  
        </select>
      </div>
        <label for="" class="text-sm mt-4 font-medium">Class Day</label>
        <div class="relative mt-1">

            <select
            wire:model="date"
              type="date"
              class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm"
            >
          <option value="">Class Day</option>  
          <option value="Monday">Monday</option>  
          <option value="Tuesday">Tuesday</option>  
          <option value="Wednesday">Wednesday</option>  
          <option value="Thursday">Thursday</option>  
          <option value="Friday">Friday</option>  
          <option value="Saturday">Saturday</option>  
          </select>
        </div> --}}
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
