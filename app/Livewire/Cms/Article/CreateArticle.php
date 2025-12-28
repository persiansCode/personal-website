<?php

namespace App\Livewire\Cms\Article;
use  App\Http\Requests\CreateArticleRequest ;
use App\Models\ArticleCategory;
use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;
use Morilog\Jalali\Jalalian;
use Livewire\WithFileUploads;
use App\Http\Image\ImageService;
use Illuminate\Support\Facades\Validator;
use Post;
class CreateArticle extends Component
{
    use WithFileUploads;
    public $title = '';
    public $category_id = '';

 public string $date = '';
    public $description = '';

    public $status = '';

    public $tags ;

    public $photo;
    // public function updatedTags($value)
    // {
    //     $this->tags = $value; // مقدار جدید تگ‌ها ذخیره می‌شود
    // }
      protected $rules = [
      "category_id" => "required|exists:article_categories,id",
      'date' => "required" ,
      'photo' => "mimes:jpg,bmp,png,gif,application/octet-stream|required",

     'status' => 'required|integer|in:0,1',
'description' => [
    'required',

    // 'regex:/^(?!.*<\s*\/?\s*script\s*>)([\p{Arabic}a-zA-Z0-9۰-۹\s\.,;:!?()"\'\-\/=&<>  ا-ی آ-ي ]|<\/?[a-zA-Z][^>]*>)*$/u'
],


      "title" =>  'required|max:120|min:2|regex:/^[ا-یa-zA-Z0-9\-۰-۹ء-ي., ]+$/u',
    
      'tags' => 'required|max:120|min:2'
    ];
  
  public function submit(ImageService $imageService )
    { 
      $this->validate();

        
    
 
        [$shamsiDate, $time] = explode(' ', $this->date);
[$year, $month, $day] = explode('/', $shamsiDate);
[$hour, $minute, $second] = explode(':', $time);
   $imageService->setExclusiveDirectory("article-image") ; 
     $image =   $imageService->createIndexAndSave($this->photo);

// تبدیل تاریخ شمسی به میلادی با `Jalalian`
$miladiDateTime = (new Jalalian($year, $month, $day, $hour, $minute, $second))->toCarbon()->format('Y-m-d H:i:s');

       $newArticle =   Article::create(
            [  'status' => $this->status, 'arthor_id' => auth()->user()->id ,'title' => $this->title,'category_id' => $this->category_id, 'description' => $this->description ,'date' => $miladiDateTime ,
            "image" => $image, 'tags' => is_array($this->tags) ? implode(',', $this->tags) : $this->tags]
        );
  return redirect()->route('show-articles');
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
     
     $categories = ArticleCategory::all()->select(['id' , 'name'])->toArray();
 
        return view('livewire.cms.article.create-article' , compact('categories'))->layout("components.layouts.cms" , ['title' => "پنل مدیریت"]);;
    }
}
