<div>
<div class="row">
    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
        <div class="card shadow">
            <h6 class="card-header">Roles</h6>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Role Name</th>
                            <th>Total Assigned</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($roles as $role)
                        <tr class="odd">
                            <td>{{ $role->name }}</td>
                            <td>{{ $role->users->count() }}</td>
                            <td>
                                <button class="btn btn-sm btn-info" wire:click.prevent="editRole({{ $role->id }})"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-sm btn-danger" wire:click.prevent="deleteRoleConfirmation({{ $role->id }})"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        @empty
                        <p>No Role Found</p>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
        <div class="card shadow">
            <h6 class="card-header">@if(empty($editForm)) Add New Role @else Edit Role @endif</h6>
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Role Name</label>
                    <input type="text" wire:model.debounce.500ms="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter name">
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-sm @if(empty($editForm)) btn-primary @else btn-info @endif" @if(empty($editForm)) wire:click.prevent="saveRole()" @else wire:click.prevent="updateRole()" @endif>@if(empty($editForm)) <i class="fas fa-check-circle"></i> Add New Role @else <i class="fas fa-check-circle"></i> Update Role @endif</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
