@push('cdn')


    <link rel="stylesheet" href="https://unpkg.com/@majidh1/jalalidatepicker/dist/jalalidatepicker.min.css">
    <script src="https://unpkg.com/@majidh1/jalalidatepicker/dist/jalalidatepicker.min.js"></script>

    <!-- Persian Date -->
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>


    <link rel="stylesheet" href="{{ asset("css/cms/tomSelect.min.css") }}">
    <link rel="stylesheet" href="{{ asset("css/cms/createArticle.css") }}">
    <!-- <link href="https://cdn.jsdelivr.net/npm/tom-select@2.4.3/dist/css/tom-select.css" rel="stylesheet"> -->



    <style>
        .select2-container {
            width: 100% !important;
        }
    </style>
@endpush

<div class="pt-18  col-span-10 text-orange-400 px-2">
    <div class="grid grid-cols-12 gap-3 " style="padding-right: 15%;">



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

        <div class="grid grid-cols-12 gap-3 " id="input-container">



        <div class="col-span-12 md:col-span-5  text-slate-800  dark:text-platinum   custom-select  md:col-start-1" id="select2" dir="rtl">
            <p class="text-slate-800 dark:text-platinum p-2">وضعیت</p>
           <select wire:model="status" name="status" class="w-full p-2 pl-4 text-slate-800 dark:text-platinum bg-sage dark:bg-[#1d232a]">
    <option >لطفا انتخاب کنید</option>

    <option value="1" @if($article->status==1 ) selected @endif >فعال</option>
    <option value="0"  @if($article->status==0 ) selected @endif>غیرفعال</option>
</select>
        </div>
            <div class="col-span-12 md:col-span-5 text-orange-400  ">
                <p class="text-slate-800 dark:text-platinum p-2">عنوان</p>


                <input wire:model="title" type="text" name="title"
                    class="input input-md w-full p-2 pl-4 text-slate-800 dark:text-platinum bg-sage dark:bg-[#1d232a] "
                    placeholder="لطفا تایپ کنید">
                @error("title")
                    <p>{{ $message  }}</p>
                @enderror
            </div>
        </div>
        <div class="grid grid-cols-12 gap-3 " id="input-container">

            <div class="col-span-12 md:col-span-5 text-orange-400  md:col-start-1">
                <p class="text-slate-800 dark:text-platinum p-2">دسته بندی مقاله </p>
                <select wire:model="category_id" name="category_id"
                    class="w-full p-2 pl-4 text-slate-800 dark:text-platinum bg-sage dark:bg-[#1d232a]">
                    <option>لطفا انتخاب کنید</option>
                    @foreach($categories as $category)

                        <option value="{{$category['id']}}"  @if($category['id'] == $article->category_id ) selected @endif > {{$category['name']}} </option>
                    @endforeach

                </select>
            </div>
            <div class="col-span-12 md:col-span-5 text-orange-400  ">
                <p class="text-slate-800 dark:text-platinum p-2">images</p>

                <input type="file" wire:model="photo" name="photo"
                    class="input input-md w-full p-2 pl-4 text-slate-800 dark:text-platinum bg-sage dark:bg-[#1d232a] "
                    placeholder="لطفا تایپ کنید">
                @error("photo")
                    <p>{{ $message  }}</p>
                @enderror
            </div>
        </div>
        <div class="grid grid-cols-12 gap-3 " id="input-container">

            <div class="col-span-12 md:col-span-5 text-orange-400  md:col-start-1" id="select2" dir="ltr">
                <p class="text-slate-800 dark:text-platinum p-2 align-right" style="text-align: right">تگ ها</p>

                <div class="" wire:ignore x-init="
    new TomSelect($refs.selectElement, {
	persist: false,
	createOnBlur: true,
	create: true
}
);">
                    <input x-ref="selectElement" wire:model.lazy="tags" value="{{$article->tags}}" class="">
                </div>


                @error("tags")
                    <p>{{ $message  }}</p>
                @enderror
            </div>
            <div class="col-span-12 md:col-span-5 text-orange-400  ">
                <p class="text-slate-800 dark:text-platinum p-2">تاریخ</p>
                <div>

                    <div x-data  class="custom-jdp"  x-init="jalaliDatepicker.startWatch({  
                     selectedBefore: false, 

    date: true,
    time: true,
    hasSecond: true,

})">
                        <input type="text"  wire:model.lazy="date" data-jdp id="jalali-datepicker"
                            class="border p-2 rounded w-full p-2 pl-4 text-slate-800 dark:text-platinum bg-sage dark:bg-[#1d232a]"
                            placeholder="تاریخ را انتخاب کنید" />
                    </div>

                </div>

                @error("date")
                    <p>{{ $message  }}</p>
                @enderror

            </div>
        </div>

<div class="grid grid-cols-12 gap-3" id="input-container" wire:ignore x-data x-init="
    CKEDITOR.replace($refs.ckeditor, {
        allowedContent: true,
        extraAllowedContent: 'div(*)[*];span(*)[*];section(*)[*];style(*)[*]'
    });
    CKEDITOR.instances.editor1.on('change', function () {
        @this.set('description', CKEDITOR.instances.editor1.getData());
    });
">

    <div class="col-span-12 md:col-span-10 text-slate-800 dark:text-platinum custom-select md:col-start-1" id="select2" dir="rtl">
        <p class="text-slate-800 dark:text-platinum p-2">متن مقاله</p>

        <textarea x-ref="ckeditor" id="editor1"  name="description"
            class="input input-md w-full" placeholder="لطفا تایپ کنید">{{$article->description}}</textarea>

        @error("description")
            <p class="z-1000 text-red-400 text-[100px]">{{ $message }}</p>
        @enderror
    </div>

</div>

        <div class="grid grid-cols-12 ">

            <button type="submit"
                class="rounded-md p-3 bg-red-400 outline-none border-none mt-3 w-full col-span-10 col-start-1 col-end-11 max-h-[80px] text-white">ثبت</button>
        </div>
    </form>
    <br><br><br><br>






</div>
@script






<script type="text/javascript" src="jalalidatepicker.min.js"></script>

<script>
  
    // مطمئن شوید این خط بعد از بارگذاری jalaliDatepicker اجرا می‌شود
    console.log(TomSelect)

    new TomSelect("#input-tags", {
        persist: false,
        createOnBlur: true,
        create: true
    });   </script>
@endscript