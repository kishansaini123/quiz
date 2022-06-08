<div>
    <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-primary navbar-badge">{{ $notiCount }}</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">{{ $notiCount }} Notifications</span>
            <div class="dropdown-divider"></div>
            @forelse ($notiDatas as $noti)
            <div class="dropdown-item @if($noti->read_at == NULL) bg-primary @endif" @if($noti->read_at == NULL) wire:click="readNoti" style="cursor: pointer;" @endif>
                <i class="fas fa-envelope mr-2"></i> {{ $noti->data['title'] }}
                <span class="float-right @if($noti->read_at == NULL) text-white @else text-muted @endif text-sm"><small>{{ \Carbon\Carbon::parse($noti->created_at)->diffForHumans() }}</small></span>
            </div>
            <div class="dropdown-divider"></div>
            @empty
                <p class="dropdown-item text-center">No Notification</p>
            @endforelse
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
    </li>
</div>
