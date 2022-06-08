<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Blog;
use App\Notifications\BlogCreated;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class BlogComponent extends Component
{
    use WithFileUploads;
    use AuthorizesRequests;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    protected $listeners = ['deleteConfirmed' => 'deleteCategory'];
    
    public $blog;
    public $category_id;
    public $title;
    public $description;
    public $image;
    public $blogId;
    public $editForm;
    public $blogImage;

    protected $rules = [
        'title' => 'required|min:6',
        'description' => 'required|min:5',
        'category_id' => 'required',
        'image' => 'required|image|max:1024'
    ];

    public function mount(Blog $blog)
    {
        $this->blog = $blog;
    }


    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function resetValue()
    {
        $this->category_id = null;
        $this->title = null;
        $this->description = null;
        $this->image = null;
        $this->blogId = null;
        $this->editForm = null;
        $this->blogImage = null;
    }

    public function saveBlog()
    {
        //dd(Auth::id());
        $this->validate();
        
        $ext = $this->image->extension();
        $imageName = time().'.'.$ext;
        $this->image->storeAs('blogs', $imageName, 'public');
        // $blog = new Blog();
        // $blog->user_id = Auth::id();
        // $blog->category_id = $this->category_id;
        // $blog->title = $this->title;
        // $blog->description = $this->description;
        // $blog->image = $imageName;
        // $blog = $blog->save();
        $blog = Blog::create([
            'user_id'       => Auth::id(),
            'category_id'   => $this->category_id,
            'title'         => $this->title,
            'description'   => $this->description,
            'image'         => $imageName,
        ]);

        Notification::send(Auth::user(), new BlogCreated($blog));
        $this->emit('refreshNotification');
        $this->resetValue();
        $this->dispatchBrowserEvent('success-msg', ['msg' => 'Blog successfully created.']);
    }

    public function editBlog($id)
    {
        $this->blogId = $id;
        $this->editForm = $id;
        $blog = Blog::findOrFail($id);
        $this->title = $blog->title;
        $this->category_id = $blog->category_id;
        $this->description = $blog->description;
        $this->blogImage = $blog->image;
        $this->dispatchBrowserEvent('show-blog-modal');
    }

    public function updateBlog()
    {
        if($this->image)
        {
            $this->validate([
                'title' => 'required|min:6',
                'description' => 'required|min:5',
                'category_id' => 'required',
                'image' => 'required|image|max:1024'
            ]);

            $ext = $this->image->extension();
            $imageName = time().'.'.$ext;
            $this->image->storeAs('blogs', $imageName, 'public');

        } else {

            $this->validate([
                'title' => 'required|min:6',
                'description' => 'required|min:5',
                'category_id' => 'required',
            ]);

            $imageName = $this->blogImage;
        }

        // $blog = Blog::findOrFail($this->blogId);
        // $blog->user_id = 1;
        // $blog->category_id = $this->category_id;
        // $blog->title = $this->title;
        // $blog->description = $this->description;
        // $blog->image = $imageName;
        // $blog->save();

        $blog = Blog::whereId($this->blogId)->update([
            'category_id'   => $this->category_id,
            'title'         => $this->title,
            'description'   => $this->description,
            'image'         => $imageName,
        ]);
        
        $this->resetValue();
        $this->dispatchBrowserEvent('success-msg', ['msg' => 'Blog successfully updated.']);
    }

    public function deleteCatConfirmation($id)
    {
        $this->blogId = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation', ['id' => $id]);
    }

    public function deleteCategory()
    {
        $blog = Blog::findOrFail($this->blogId);
        $blog->delete();
        $this->dispatchBrowserEvent('deleted', ['message' => 'Blog sucessfully deleted.']);
    }

    public function render()
    {
        $categories = Category::all();
        $blogs = $this->blog->latest()->paginate(7);
        return view('livewire.blog-component', compact('categories', 'blogs'));
    }
}
