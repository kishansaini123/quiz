<?php

namespace App\Http\Livewire;

use App\Models\Notification;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class NotificationComponent extends Component
{
    public $notification;

    protected $listeners = ['refreshNotification' => 'render'];

    public function readNoti()
    {
        //$user = User::find(Auth::id());
        Notification::where('notifiable_id', Auth::id())->update(['read_at' => now()]);
    }

    public function render()
    {
        if(Auth::user()->role_id == Role::IS_ADMIN) {
            $notiCount = Notification::whereNull('read_at')->count();
            $notiDatas = Notification::latest()->take(5)->get();
        } else {
            $notiCount = Notification::where('notifiable_id', '!=', Auth::id())->whereNull('read_at')->count();
            $notiDatas = Notification::where('notifiable_id', '!=', Auth::id())->latest()->take(5)->get();
        }
        
        // $user = User::find(Auth::id()); 
        // $notiCount = $user->unreadNotifications->count();
        // $notiDatas = $user->notifications;
        return view('livewire.notification-component', compact('notiCount', 'notiDatas'));
    }
}
