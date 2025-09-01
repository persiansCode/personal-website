@props(['title' => "" ,  'description' => "" , 'name' => '' ] )
<div class="flex flex-col items-start p-2 rounded-md  w-full bg-[#222222]" dir="rtl">
                <p class="text-gray-400  mb-4 text-sm " > {{ $title }} </p>
            
                <input type="text" 
                    wire:model.lazy="{{ $name }}"
                placeholder="{{$description}}"
                class="w-full rounded-md border-0 p-1 text-sm bg-[#222222]"
            
            >
            </div>