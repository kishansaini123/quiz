<div>
<div class="row">
    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
        <div class="card shadow">
            <div class="card-header">
                <h6 class="card-title">Users</h6>
                <div class="card-tools">
                    {{ $blogs->links() }}
                </div>
            </div>
            <div class="card-body">
                @if($blogs->count())
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Blog Title</th>
                            <th>Author</th>
                            <th>Created Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($blogs as $blog)
                        <tr class="odd">
                            <td class="dtr-control sorting_1" tabindex="0">{{ Str::limit($blog->title, 15)}}</td>
                            <td>{{ $blog->user->name }}</td>
                            <td>{{ $blog->created_at->format('d-m-Y')}}</td>
                            <td>
                                @can('update', $blog)
                                <button class="btn btn-sm btn-info" wire:click.prevent="editBlog({{ $blog->id }})"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-sm btn-danger" wire:click.prevent="deleteCatConfirmation({{ $blog->id }})"><i class="fas fa-trash"></i></button>
                                @endcan
                            </td>
                        </tr>
                        @empty
                        <p>No blog found</p>
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
            <h6 class="card-header">@if(empty($editForm)) Add new blog @else Edit blog @endif</h6>
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" wire:model.debounce.500ms="title" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Enter title">
                    @error('title')
                    <div class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="category_id">Category</label>
                    <select wire:model.debounce.500ms="category_id" class="form-control @error('category_id') is-invalid @enderror" id="category_id">
                        <option selected>Select Category</option>
                        @forelse($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @empty
                        <option value="">No Category Found</option>
                        @endforelse
                    </select>
                    @error('category_id')
                    <div class="invalid-feedback">
                        {{ $errors->first('category_id') }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea  wire:model.debounce.500ms="description" id="description" class="form-control @error('description') is-invalid @enderror" rows="3" placeholder="Enter description"></textarea>
                    @error('description')
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                    @enderror
                </div>
                @if(!empty($blogImage))
                <div class="from-group">
                    <img src="{{ asset('storage/blogs/'.$blogImage )}}" class="img-fluid w-50 mb-3" alt="">
                </div>
                @endif
                @if ($image)
                    <div class="from-group">
                        <p class="font-weight-bold">Photo Preview:</p>
                        <img src="{{ $image->temporaryUrl() }}" class="img-thumbnail mb-3" alt="Photo Preview">
                    </div>
                @endif
                <div class="form-group">
                    <label for="image">Image</label>
                    <div class="custom-file">
                        <input type="file" wire:model.debounce.500ms="image" class="custom-file-input @error('image') is-invalid @enderror" id="validatedCustomFile" required>
                        <label class="custom-file-label" for="validatedCustomFile">{{ $image ? $image->getClientOriginalName() : 'Choose file...'}}</label>
                        @error('image')
                          <div class="invalid-feedback">
                              {{ $errors->first('image') }}
                          </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <button type="button" class="btn @if(empty($editForm)) btn-primary @else btn-info @endif" @if(empty($editForm)) wire:click.prevent="saveBlog()" @else wire:click.prevent="updateBlog()" @endif>@if(empty($editForm)) <i class="fas fa-check-circle"></i> Add new blog @else  <i class="fas fa-check-circle"></i> Update blog @endif</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
