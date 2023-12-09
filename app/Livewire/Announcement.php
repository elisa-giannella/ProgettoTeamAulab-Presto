<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Announce;
use App\Models\Category;
use App\Jobs\RemoveFaces;
use App\Jobs\ResizeImage;
use Livewire\WithFileUploads;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class Announcement extends Component
{
    use WithFileUploads;
    public $name;
    public $price;
    public $description;
    public $category="1";

    public $temporary_images;
    public $images= [];
    public $image;

    public $announce;

    protected $rules=[
        "name" => "required|max:255",
        "price" => "required|decimal:0,2",
        "description" => "required|max:500",
        "images.*" => "image|max:1024",
        "temporary_images.*" => "image|max:1024"

    ];

    protected $messages=[
        "name.required" => "Il campo è obligatorio",
        "name.max" => "il nome deve avere massimo 255 caratteri",
        "price.required" => "Il campo è obligatorio",
        "price.decimal" => "Il campo deve essere un numero",
        "description.required" => "Il campo deve essere obligatorio",
        "description.max" => "Il campo deve avere massimo 500 caratteri",
        "temporary_images.*.required" => "Il campo è obligatorio",
        "temporary_images.*.image" => "Il file deve essere di tipo immagine",
        "temporary_images.*.max" => "Massimo 1MB",
        "images.image" => "Il file deve essere di tipo immagine",
        "images.max" => "Massimo 1MB"
    ];

    public function updatedTemporaryImages()
    {
        if($this->validate([
            'temporary_images.*'=>'image|max:1024',
            ])){
                foreach($this->temporary_images as $image){
                    $this->images[] = $image;
                }
            }
        }

        public function removeImage($key)
        {
            if(in_array($key, array_keys($this->images))){
                unset($this->images[$key]);
            }
        }

        public function store(){
            $this->validate();

            // Announce::create([
                //     'name'=> $this->name,
                //     'price'=> $this->price,
                //     'description'=> $this->description,
                //     'category_id'=> $this->category,
                //     'user_id'=> Auth::user()->id,
                // ]);

                $this->announce = Category::find($this->category)->announces()->create($this->validate());

                if(count($this->images)){
                    foreach ($this->images as $image){
                        // $this->announce->images()->create(['path'=>$image->store('images','public')]);
                        $newFileName = "announcements/{$this->announce->id}";
                        $newImage = $this->announce->images()->create(['path'=>$image->store($newFileName,'public')]);

                        RemoveFaces::withChain([
                            new ResizeImage($newImage->path , 300 , 300 ),
                            new GoogleVisionSafeSearch($newImage->id),
                            new GoogleVisionLabelImage($newImage->id)
                        ])->dispatch($newImage->id);

                    }
                    File::deleteDirectory(storage_path('/app/livewire-tmp'));
                }


                $this->announce->user()->associate(Auth::user());

                $this->announce->save();

                session()->flash('success', 'Annuncio inserito');

                return redirect(route('announcement.create'))->with('message', 'Annuncio creato correttamente');


            }

            public function render()
            {
                $categories = Category::all();
                return view('livewire.announcement',compact('categories'));
            }
        }
