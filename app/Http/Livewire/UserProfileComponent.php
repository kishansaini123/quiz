<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithFileUploads;
use Auth;
use Illuminate\Support\Facades\Hash;

class UserProfileComponent extends Component
{
	use WithFileUploads;
	protected $listeners = ['updatedData' => 'mount'];

	public $name;
	public $department;
	public $photo;
	public $avatar;
	public $userAvatar;

	public $old_password;
	public $new_password;

	public function mount()
	{
		$this->name = auth()->user()->name;
		$this->department = auth()->user()->department;
		$this->userAvatar = auth()->user()->photo;
	}

	public function updateProfile()
	{
		if($this->photo) {
			$ext = $this->photo->extension();
	        $photoName = time().'.'.$ext;
	        $this->photo->storeAs('avatar', $photoName, 'public');
		} else {
			$photoName = auth()->user()->photo;
		}

		$user = User::whereId(auth()->user()->id)->update([
			'name' => $this->name,
			'department' => $this->department,
			'photo' => $photoName,
		]);
		$this->avatar = $photoName;
		$this->dispatchBrowserEvent('success-msg', ['msg' => 'Profile successfully updated.']);
		$this->emit('updatedData');
	}

	public function updatePassword()
	{
		$this->validate([
			'old_password' => 'required',
			'new_password' => 'required',
		]);

		$hashPassword = Hash::make($this->new_password);
		$validate = Hash::check($this->old_password, auth()->user()->password);
		if($validate) {
			User::findOrFail(auth()->user()->id)->update(['password' => $hashPassword]);
			$this->old_password = null;
			$this->new_password = null;
			$this->dispatchBrowserEvent('success-msg', ['msg' => 'Password successfully updated.']);
		} else {
			$this->dispatchBrowserEvent('error-msg', ['msg' => 'Password does not match.']);
		}
	}
    public function render()
    {
        return view('livewire.user-profile-component');
    }
}
