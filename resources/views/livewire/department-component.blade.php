<div>
    <div class="row">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="card shadow">
                <h6 class="card-header">Departments</h6>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Department Name</th>
                                <th>Department Code</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($departments as $department)
                            <tr class="odd">
                                <td>{{ $department->name }}</td>
                                <td>{{ $department->code }}</td>
                                <td>
                                    <button class="btn btn-sm btn-info" wire:click.prevent="editDepartment({{ $department->id }})"><i class="fas fa-edit"></i></button>
                                    <button class="btn btn-sm btn-danger" wire:click.prevent="deleteDepartmentConfirmation({{ $department->id }})"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            @empty
                            <p>No Department Found</p>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="card shadow">
                <h6 class="card-header">@if(empty($editForm)) Add New Department @else Edit Department @endif</h6>
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Department Name</label>
                        <input type="text" wire:model.debounce.500ms="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter name">
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="code">Department Code</label>
                        <input type="text" wire:model.debounce.500ms="code" class="form-control @error('code') is-invalid @enderror" id="code" placeholder="Enter code">
                        @error('code')
                        <div class="invalid-feedback">
                            {{ $errors->first('code') }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-sm @if(empty($editForm)) btn-primary @else btn-info @endif" @if(empty($editForm)) wire:click.prevent="saveDepartment()" @else wire:click.prevent="updateDepartment()" @endif>@if(empty($editForm)) <i class="fas fa-check-circle"></i> Add New Department @else <i class="fas fa-check-circle"></i> Update Department @endif</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    