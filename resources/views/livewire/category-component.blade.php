<div>
<div class="row">
    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
        <div class="card shadow">
            <div class="card-header">
                <h6 class="card-title">Categories</h6>
                <div class="card-tools">
                    {{ $categories->links() }}
                </div>
            </div>
            <div class="card-body">
                @if($categories->count())
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Category Name</th>
                            <th>Category Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($categories as $category)
                        <tr class="odd">
                            <td>{{ $category->name }}</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-sm @if($category->status == 1) btn-success @else btn-danger @endif dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      @if($category->status == 1)
                                      Activated
                                      @else
                                      Deactivated
                                      @endif
                                    </button>
                                    <div class="dropdown-menu">
                                      <button class="dropdown-item" wire:click.prevent="activateStatus({{ $category->id }}, '1')">Activated</button>
                                      <button class="dropdown-item" wire:click.prevent="deactivateStatus({{ $category->id }}, '0')">Deactivated</button>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-info" wire:click.prevent="editCategory({{ $category->id }})"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-sm btn-danger" wire:click.prevent="deleteCatConfirmation({{ $category->id }})"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        @empty
                        <p>No category found</p>
                        @endforelse
                    </tbody>
                </table>
                @else
                <p>No record found</p>
                @endif
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
        <div class="card shadow">
            <h6 class="card-header">@if(empty($editForm)) Add new category @else Edit category @endif</h6>
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Category Name</label>
                    <input type="text" wire:model.debounce.500ms="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter name">
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <button type="button" class="btn @if(empty($editForm)) btn-primary @else btn-info @endif" @if(empty($editForm)) wire:click.prevent="saveCategory()" @else wire:click.prevent="updateCategory()" @endif>@if(empty($editForm)) <i class="fas fa-check-circle"></i> Add New Category @else <i class="fas fa-check-circle"></i> Update Category @endif</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
