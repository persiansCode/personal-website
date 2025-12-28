@props(['title' => "" ,  'description' => "" , 'name' => '' ] )
<div class="flex flex-col items-start p-2 rounded-md  w-full bg-[#d9c5a1] dark:bg-[#222222]" dir="rtl">
               <p class="text-gray-600 dark:text-gray-400 text-right mb-4  text-sm" dir="rtl"> {{$title}} </p>
            
                <input type="text" 
                    wire:model.lazy="{{ $name }}"
                placeholder="{{$description}}"
                class="w-full rounded-md border-0 p-1 placeholder-white text-sm bg-[#d9c5a1] dark:bg-[#222222]"
            
            >
            </div>