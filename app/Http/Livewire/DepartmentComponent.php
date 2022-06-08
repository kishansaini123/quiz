<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Department;

class DepartmentComponent extends Component
{
    public $name;
    public $code;
    public $departmentId;
    public $editForm;

    protected $listeners = ['deleteConfirmed' => 'deleteDepartment'];

    protected $rules = [
        'name' => 'required|min:3',
        'code' => 'nullable|min:3',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'name' => 'required|min:3',
            'code' => 'nullable|min:3|unique:departments,code',
        ]);
    }

    public function resetValue()
    {
        $this->name = null;
        $this->code = null;
        $this->departmentId = null;
        $this->editForm = null;
    }

    public function saveDepartment()
    {
        $this->validate();
        Department::create([
            'name' => $this->name,
            'code' => $this->code,
        ]);
        $this->resetValue();
        $this->dispatchBrowserEvent('show-msg-modal', ['msg' => 'Department sucessfully created.']);
    }

    public function editDepartment($id)
    {
        $department = Department::findOrFail($id);
        $this->name = $department->name;
        $this->code = $department->code;
        $this->departmentId = $department->id;
        $this->editForm = $department->id;
    }

    public function updateDepartment()
    {
        $this->validate([
            'code' => 'nullable|min:3|unique:departments,code,'.$this->departmentId,
        ]);
        Department::whereId($this->departmentId)->update([
            'name' => $this->name,
            'code' => $this->code,
        ]);
        $this->resetValue();
        $this->dispatchBrowserEvent('success-msg', ['msg' => 'Department sucessfully updated.']);
    }

    public function deleteDepartmentConfirmation($id)
    {
        $this->departmentId = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation', ['id' => $id]);
    }

    public function deleteDepartment()
    {
        $department = Department::findOrFail($this->departmentId);
        $department->delete();
        $this->dispatchBrowserEvent('deleted', ['message' => 'Department sucessfully deleted.']);
    }
    public function render()
    {
        $departments = Department::latest()->get();
        return view('livewire.department-component', compact('departments'));
    }
}
