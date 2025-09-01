<?php

namespace App\Livewire\Cms\Article;
use  App\Http\Requests\CreateArticleRequest ;
use Illuminate\Http\Request;
use App\Models\Article;
use Livewire\Component;
use Morilog\Jalali\Jalalian;
use Livewire\WithFileUploads;
use App\Http\Image\ImageService;
use Illuminate\Support\Facades\Validator;
class CreateArticle extends Component
{
    use WithFileUploads;
    public $title = '';
 
    public $description = '';
    public $arthor = '';
    public $date = '';
    public $tags ;

    public $photo;
    // public function updatedTags($value)
    // {
    //     $this->tags = $value; // مقدار جدید تگ‌ها ذخیره می‌شود
    // }
     protected $rules = [
      'date' => "required" ,
      'photo' => "mimes:jpg,bmp,png,gif,application/octet-stream|required",
      'description' =>  'required|max:900|min:5|regex:/^[ا-یa-zA-Z0-9\-۰-۹ء-ي.,><\/;\n\r& ]+$/u',
      "title" =>  'required|max:120|min:2|regex:/^[ا-یa-zA-Z0-9\-۰-۹ء-ي., ]+$/u',
      "arthor" => 'required|min:1|max:100000000|regex:/^[0-9]+$/u',
      'tags' => 'required|max:120|min:2'
    ];
  public function submit(ImageService $imageService , Request $request)
    {
        
        $this->validate();
        
        [$shamsiDate, $time] = explode(' ', $this->date);
[$year, $month, $day] = explode('/', $shamsiDate);
[$hour, $minute, $second] = explode(':', $time);

// تبدیل تاریخ شمسی به میلادی با `Jalalian`
$miladiDateTime = (new Jalalian($year, $month, $day, $hour, $minute, $second))->toCarbon()->format('Y-m-d H:i:s');
   $imageService->setExclusiveDirectory("article-image") ; 
     $image =   $imageService->createIndexAndSave($this->photo);
 
       $newArticle =   Article::create(
            ['title' => $this->title, 'description' => $this->description ,'date' => $miladiDateTime ,
             'arthor' => $this->arthor , "image" => $image['indexArray'], 'tags' => is_array($this->tags) ? implode(',', $this->tags) : $this->tags]
        );
  }
    public function save(ImageService $imageService , Request $request)
    {
        
 
  
    
// if ($this->photo) {
//     $filename = time() . '.' . $this->photo->getClientOriginalExtension();
//     $this->photo->move(public_path('photos'), $filename);
    // dd('فایل ذخیره شد: ' . $filename);
// }
//  else {
//     dd('فایلی دریافت نشد!');
// }
      
 
    //   $newArticle =   Article::create(
    //         $this->only(['title', 'description' ,'miladiDateTime' , 'arthor' , 'image' , 'tags'])
    //     );
    
        // session()->flash('status', 'Post successfully updated.');
 
        return $this->redirect('/cms/articles');
    }

    public function render()
    {
      
        return view('livewire.cms.article.create-article')->layout("components.layouts.cms" , ['title' => "پنل مدیریت"]);;
    }
}
