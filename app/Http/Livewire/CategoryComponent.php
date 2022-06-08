<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class CategoryComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $name;
    public $categoryId;
    public $editForm;

    protected $listeners = ['deleteConfirmed' => 'deleteCategory'];

    protected $rules = [
        'name' => 'required|min:6',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function resetValues()
    {
        $this->categoryId = null;
        $this->name = null;
        $this->editForm = null;
    }

    public function saveCategory()
    {
        $this->validate();
        Category::create([
            'name' => $this->name,
        ]);
        $this->resetValues();
        $this->dispatchBrowserEvent('hide-category-modal', ['msg' => 'Category sucessfully created.']);
    }

    public function editCategory($id)
    {
        $category = Category::findOrFail($id);
        $this->name = $category->name;
        $this->categoryId = $category->id;
        $this->editForm = $category->id;
    }

    public function updateCategory()
    {
        $this->validate();
        Category::whereId($this->categoryId)->update([
            'name' => $this->name,
        ]);
        $this->resetValues();
        $this->dispatchBrowserEvent('hide-category-modal', ['msg' => 'Category sucessfully updated.']);
    }

    public function activateStatus($id, $value)
    {
        //dd($id);
        Category::whereId($id)->update([
            'status' => $value
        ]);
        $this->dispatchBrowserEvent('success-msg', ['msg' => 'Category status activated.']);
    }

    public function deactivateStatus($id, $value)
    {
        //dd($id);
        Category::whereId($id)->update([
            'status' => $value
        ]);
        $this->dispatchBrowserEvent('success-msg', ['msg' => 'Category status deactivated.']);
    }

    public function deleteCatConfirmation($id)
    {
        $this->categoryId = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation', ['id' => $id]);
    }

    public function deleteCategory()
    {
        $category = Category::findOrFail($this->categoryId);
        $category->delete();
        $this->dispatchBrowserEvent('deleted', ['message' => 'Category sucessfully deleted.']);
    }

    public function render()
    {
        $categories = Category::latest()->paginate(5);
        return view('livewire.category-component', compact('categories'));
    }
}
