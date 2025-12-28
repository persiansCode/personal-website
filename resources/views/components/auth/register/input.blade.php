   @props(['title' => "" , 'description' => "" , 'name' => "" ] )
   <div class="flex flex-col my-4 items-start p-2 rounded-md w-full bg-[#d9c5a1] dark:bg-[#222222] ">
                <p class="text-gray-600 dark:text-gray-400 text-right mb-4  text-sm" dir="rtl"> {{$title}} </p>
                <input type="text" 
                wire:model.lazy="{{ $name }}"
                placeholder="{{$description}}"
                class="w-full rounded-md p-1 placeholder-white border-0 text-sm bg-[#d9c5a1] dark:bg-[#222222]"
            
            >
            </div>