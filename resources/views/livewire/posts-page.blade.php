<div class="pt-22 px-5 pb-22">

    <div class="grid grid-cols-12 gap-3 " dir="rtl">

        <div class="col-span-12 md:col-span-3 row-span-2 rounded-md">
        <x-posts-page.accordian.accordian/>
        <x-posts-page.accordian.accordian/>
     <x-posts-page.relatedposts.related/>

        </div>
    
                @foreach($articles as $article)
         <div class="col-span-12 row-span-1 md:col-span-3 rounded-md h-full bg-slate-200 dark:bg-gray-700">
            <div class="w-full "> 
                @if(File::exists(public_path($article->image['medium']))) 
                  
                    <img src="{{ asset( $article->image['medium']) }}" alt="react" class="rounded-md">
                
                @else
                <img src="{{ asset('files/react.webp') }}" alt="react" class="rounded-md">
                @endif
               
                <div class="p-2" dir="rtl">
                    <h5 class="text-orange-400"> {{ $article->title }}</h5>
                    <p class="text-blue-400 text-sm">
                        {{ \Str::limit( $article->description , 100) }}
                    </p>
                    <button class="btn w-full outline-none border-none shadow-none mt-3 bg-orange-400 text-black">دیدن
                        کامل پست</button>
                </div>
            </div>

        </div>
        @endforeach
       
        <div class="col-span-12 md:col-span-3 pt-3 place-items-center rounded-md">
            {{  $articles->links('pagination::tailwind')}}
      
              </div>
    
      
    </div>  
   
    
      
    
</div>
