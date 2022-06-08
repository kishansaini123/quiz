<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Role;

class RoleComponent extends Component
{
	public $name;
    public $roleId;
    public $editForm;

    protected $listeners = ['deleteConfirmed' => 'deleteRole'];

    protected $rules = [
        'name' => 'required|min:3',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function resetValue()
    {
        $this->name = null;
        $this->roleId = null;
        $this->editForm = null;
    }

    public function saveRole()
    {
        $this->validate();
        Role::create([
            'name' => $this->name,
        ]);
        $this->resetValue();
        $this->dispatchBrowserEvent('show-msg-modal', ['msg' => 'Role sucessfully created.']);
    }

    public function editRole($id)
    {
        $role = Role::findOrFail($id);
        $this->name = $role->name;
        $this->roleId = $role->id;
        $this->editForm = $role->id;
    }

    public function updateRole()
    {
        $this->validate();
        Role::whereId($this->roleId)->update([
            'name' => $this->name,
        ]);
        $this->resetValue();
        $this->dispatchBrowserEvent('success-msg', ['msg' => 'Role sucessfully updated.']);
    }

    public function deleteRoleConfirmation($id)
    {
        $this->roleId = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation', ['id' => $id]);
    }

    public function deleteRole()
    {
        $role = Role::findOrFail($this->roleId);
        $role->delete();
        $this->dispatchBrowserEvent('deleted', ['message' => 'Role sucessfully deleted.']);
    }
    public function render()
    {
    	$roles = Role::latest()->get();
        return view('livewire.role-component', compact('roles'));
    }
}
