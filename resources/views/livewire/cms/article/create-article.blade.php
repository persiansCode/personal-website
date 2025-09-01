@push('cdn')
<link rel="stylesheet" href="https://unpkg.com/@majidh1/jalalidatepicker/dist/jalalidatepicker.min.css">
<script type="text/javascript" src="https://unpkg.com/@majidh1/jalalidatepicker/dist/jalalidatepicker.min.js"></script>
{{-- <link rel="stylesheet" href="{{ asset("css/select2/select2.min.css") }}"> --}}
<link rel="stylesheet" href="{{ asset("css/cms/createArticle.css") }}">



<!-- jQuery -->


<style>
   .select2-container{
        width: 100% !important;
    }
</style>
@endpush
@push("js")
{{-- <script src="{{ asset("js/select2.min.js") }}"></script> --}}
@endpush
<div class="pt-18  col-span-10 text-orange-400 px-2" >
    <div class="grid grid-cols-12 gap-3 ">



        <div class="col-span-12 md:col-span-5 text-orange-400  md:col-end-11 md:col-start-1">
             <div class=" flex justify-between p-4 ">
        <h3 class="relative createArticleTitle" id="createArticleTitle">
            ساختن مقاله جدید
        </h3>
        <button class="rounded-md outline-none border-none  bg-ucla-blue text-celeste p-2">
            برگشتن به صفحه اصلی
        </button>
    </div>
        </div>
    </div>
   
<form id="form" wire:submit="submit" method="post" enctype="multipart/form-data">
    <div class="grid grid-cols-12 gap-3 ">



        <div class="col-span-12 md:col-span-5 text-orange-400  md:col-start-1">
            <p class="text-celeste">نویسنده</p>
            <input  wire:model="arthor" type="text" name="arthor" class="input input-md w-full " placeholder="لطفا تایپ کنید">
            @error("arthor")
             <p>{{ $message  }}</p>
            @enderror
        </div>
        <div class="col-span-12 md:col-span-5 text-orange-400  ">
            <p class="text-celeste">عنوان</p>


            <input wire:model="title"  type="text" name="title" class="input input-md w-full " placeholder="لطفا تایپ کنید">
            @error("title")
            <p>{{ $message  }}</p>
           @enderror
        </div>
    </div>
    <div class="grid grid-cols-12 gap-3 ">

        <div class="col-span-12 md:col-span-5 text-orange-400  md:col-start-1">
            <p class="text-celeste">متن مقاله</p>
            <input type="text" name="description" wire:model="description"  class="input input-md w-full " placeholder="لطفا تایپ کنید">
            @error("description")
            <p>{{ $message  }}</p>
           @enderror
        </div>
        <div class="col-span-12 md:col-span-5 text-orange-400  ">
            <p class="text-celeste">images</p>
            
            <input type="file" wire:model="photo" name="photo" class="input input-md w-full " placeholder="لطفا تایپ کنید">
            @error("photo")
            <p>{{ $message  }}</p>
           @enderror
        </div>
    </div>
    <div class="grid grid-cols-12 gap-3 ">

        <div class="col-span-12 md:col-span-5 text-orange-400  md:col-start-1" id="select2" dir="ltr">
          <p class="text-celeste align-right" style="text-align: right">تگ ها</p>
          <input wire:model.lazy="tags" name="tags" type="text" id="tags-input" class="hidden">
          {{-- <input type="hidden" class="form-control form-control-sm"  name="tags" id="tags" value="{{ old('tags') }}"> --}}

           
          <select class= "select2 form-control" wire:model.lazy="tags" id="jsexample" multiple="multiple">
            <option selected="selected">orange</option>
            <option>white</option>
            <option selected="selected">purple</option>
          </select>
          @error("tags")
          <p>{{ $message  }}</p>
         @enderror
        </div>
        <div class="col-span-12 md:col-span-5 text-orange-400  ">
            <p class="text-celeste">تاریخ</p>

            <input data-jdp  wire:model="date"  name="date" type="text" class="input input-md w-full " placeholder="لطفا تایپ کنید">
            @error("date")
            <p>{{ $message  }}</p>
           @enderror
         
        </div>
    </div>

    

    
    <div class="grid grid-cols-12 ">

        <button type="submit" class="rounded-md p-3 bg-red-400 outline-none border-none mt-3 w-full col-span-10 col-start-1 col-end-11 max-h-[80px] text-white">ثبت</button> 
        </div>
</form>
    <br><br><br><br>






</div>
@script


<script>
    // مطمئن شوید این خط بعد از بارگذاری jalaliDatepicker اجرا می‌شود
    
        jalaliDatepicker.startWatch({time:true});
        
        let jsTags = $("#jsexample");
        
        $(document).ready(function() {
       
            $("#jsexample").select2({
                tags: true,
                placeholder: "hii"
            });
        });
        jsTags.children('option').attr('selected', true).trigger('change');

        $("#form").submit(function(e) {
            if(jsTags.val() !== null && jsTags.val().length > 0) {
                let joinedTags = jsTags.val().join(",");
                $("#tags-input").val(joinedTags);
                console.log(joinedTags);
                @set('tags', joinedTags)
                // برای Livewire:
                // window.livewire.emit('tagsUpdated', joinedTags);
                // یا
                // window.Livewire.dispatch('tags-updated', {tags: joinedTags});
            }
        });
 
    </script>

@endscript

