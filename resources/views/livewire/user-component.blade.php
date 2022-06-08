<div>
<div class="row">
    <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
        <div class="card shadow">
            <div class="card-header">
                <h6 class="card-title">Users</h6>
                <div class="card-tools">
                    {{ $users->links() }}
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Department</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{ Str::ucfirst($user->name) }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @if($user->role_id == 1)
                                <span class="badge badge-success">{{ $user->role->name }}</span>
                                @elseif ($user->role_id == 2)
                                <span class="badge badge-info">{{ $user->role->name }}</span>
                                @elseif ($user->role_id == 3)
                                <span class="badge badge-primary">{{ $user->role->name }}</span>
                                @else
                                <span class="badge badge-secondary">{{ $user->role->name }}</span>
                                @endif
                            </td>
                            <td>{{ $user->department }}</td>
                            <td>
                                <button class="btn btn-sm btn-info" wire:click.prevent="editUser({{ $user->id }})"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-sm btn-danger" wire:click.prevent="deleteUserConfirmation({{ $user->id }})"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
        <div class="card shadow">
            <h6 class="card-header">@if(empty($editForm)) Add New User @else Edit User @endif</h6>
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" wire:model.debounce.500ms="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter full name">
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                    @enderror
                </div>
                @if (!$editForm)
                <div class="form-group">
                    <label for="email">User Email</label>
                    <input type="text" wire:model.debounce.500ms="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">This User password will be (password).</small>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                    @enderror
                </div>
                @endif
                <div class="form-group">
                    <label for="role">Role</label>
                    <select wire:model.debounce.500ms="role" class="form-control @error('role') is-invalid @enderror" id="role">
                        <option>Select Role</option>
                        <option value="1">Admin</option>
                        <option value="2">HR</option>
                        <option value="3">Employee</option>
                        <option value="4">User</option>
                    </select>
                    @error('role')
                    <div class="invalid-feedback">
                        {{ $errors->first('role') }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="department">Department</label>
                    <select wire:model.debounce.500ms="department" class="form-control @error('department') is-invalid @enderror" id="department">
                        <option>Select Department</option>
                        @forelse ( $departments as $department )
                            <option value="{{ $department->name }}">{{ $department->name }}</option>  
                        @empty
                            <option value="Frontend Developer">Frontend Developer</option>
                            <option value="Backend Developer">Backend Developer</option>
                            <option value="Others">Others</option>
                        @endforelse
                    </select>
                    @error('department')
                    <div class="invalid-feedback">
                        {{ $errors->first('department') }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-sm @if(empty($editForm)) btn-primary @else btn-info @endif" @if(empty($editForm)) wire:click.prevent="saveUser()" @else wire:click.prevent="updateUser()" @endif>@if(empty($editForm)) <i class="fas fa-check-circle"></i> Add New User @else <i class="fas fa-check-circle"></i> Update User @endif</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
