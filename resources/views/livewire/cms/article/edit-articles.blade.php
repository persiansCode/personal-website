@push('cdn')
<link rel="stylesheet" href="https://unpkg.com/@majidh1/jalalidatepicker/dist/jalalidatepicker.min.css">
<script type="text/javascript" src="https://unpkg.com/@majidh1/jalalidatepicker/dist/jalalidatepicker.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<!-- jQuery -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" ></script>

<style>
   .select2-container{
        width: 100% !important;
    }
</style>
@endpush

<div class="pt-18  col-span-10 text-orange-400 px-2" >

    <div class="grid grid-cols-12 gap-3 ">

        <div class="col-span-12 md:col-span-5 text-orange-400  md:col-start-1">
            <p class="text-celeste">عنوان</p>
            <input type="text" class="input input-sm w-full " value="{{ $article->title }}" placeholder="لطفا تایپ کنید">
        </div>
        <div class="col-span-12 md:col-span-5 text-orange-400  ">
            <p class="text-celeste">توضیحات</p>


            <input type="text" class="input input-sm w-full "  value="{{ $article->description }}" placeholder="لطفا تایپ کنید">
        </div>
    </div>
    <div class="grid grid-cols-12 gap-3 ">

        <div class="col-span-12 md:col-span-5 text-orange-400  md:col-start-1">
            <p class="text-celeste">نویسنده</p>
            <input type="text" class="input input-sm w-full "  value="{{ $article->arthor }}" placeholder="لطفا تایپ کنید">
        </div>
        <div class="col-span-12 md:col-span-5 text-orange-400  ">
            <p class="text-celeste">عکس</p>

            <input type="text" class="input input-sm w-full "  placeholder="لطفا تایپ کنید">
        </div>
    </div>
    <div class="grid grid-cols-12 gap-3 ">

        <div class="col-span-12 md:col-span-5 text-orange-400 pt-[23px] md:col-start-1" id="select2" >
            <select class="select2 form-control w-full flex justify-start" id="js-example-tags" dir="ltr" multiple="multiple">
                @php
                $explodeTags = explode(',' , $article->tags) 
                @endphp
                @foreach($explodeTags as $tag => $value)
                 <option selected="selected ">{{ $value }}</option>

            {{-- <option>white</option>
            <option selected="selected">بنفش</option> --}}
                @endforeach
           
          </select>
        </div>
        <div class="col-span-12 md:col-span-5 text-orange-400  ">
            <p class="text-celeste">تاریخ</p>

            <input data-jdp type="text" class="input input-sm w-full " value="{{ \Morilog\Jalali\Jalalian::fromCarbon(\Carbon\Carbon::parse("$article->date"))->format('Y/m/d H:i:s') }}"  placeholder="لطفا تایپ کنید">
        </div>
    </div>

    <div class="grid grid-cols-12 ">
        <button class="rounded-md p-3 bg-red-400 outline-none border-none mt-3 w-full col-span-10 col-start-1 col-end-11">ثبت</button>
    </div>
    <br><br><br><br>






</div>
@script
<script>
    jalaliDatepicker.startWatch({time:true});



  $(document).ready(function() {
    $("#js-example-tags").select2({ tags: true });
});




</script>

@endscript

