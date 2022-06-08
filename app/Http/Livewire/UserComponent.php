<?php

namespace App\Http\Livewire;

use App\Models\Department;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $name;
    public $email;
    public $role;
    public $department;
    public $userId;
    public $editForm;

    protected $listeners = ['deleteConfirmed' => 'deleteRole'];

    protected $rules = [
        'name' => 'required|min:3',
        'role' => 'required',
        'department' => 'required|min:3',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function resetValues()
    {
        $this->name = null;
        $this->email = null;
        $this->role = null;
        $this->department = null;
        $this->editForm = null;
    }

    public function saveUser()
    {
        $this->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'role' => 'required',
            'department' => 'required|min:3',
        ]);
        $password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // password
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'role_id' => $this->role,
            'department' => $this->department,
            'password' => $password,
        ]);
        $this->resetValues();
        $this->dispatchBrowserEvent('success-msg', ['msg' => 'User sucessfully created.']);
    }

    public function editUser($id)
    {
        $user = User::find($id);
        $this->name = $user->name;
        $this->role = $user->role_id;
        $this->department = $user->department;
        $this->editForm = $user->id;
        $this->userId = $user->id;
    }

    public function updateUser()
    {
        $this->validate([
            'name' => 'required|min:3',
            'role' => 'required',
            'department' => 'required|min:3',
        ]);
        User::whereId($this->userId)->update([
            'name' => $this->name,
            'role_id' => $this->role,
            'department' => $this->department,
        ]);
        $this->resetValues();
        $this->dispatchBrowserEvent('success-msg', ['msg' => 'User sucessfully updated.']);
    }

    public function deleteUserConfirmation($id)
    {
        $this->userId = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation', ['id' => $id]);
    }

    public function deleteRole()
    {
        $role = User::findOrFail($this->userId);
        $role->delete();
        $this->dispatchBrowserEvent('deleted', ['message' => 'User sucessfully deleted.']);
    }
    public function render()
    {
        $users = User::latest()->paginate(5);
        $departments = Department::latest()->get();
        return view('livewire.user-component', compact('users', 'departments'));
    }
}
