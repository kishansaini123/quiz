<div>
<div class="row">
        <div class="col-md-8">
            <div class="card card-primary card-outline card-outline-tabs shadow">
                <div class="card-header p-0 border-bottom-0">
                  <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">User Details</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Password Reset</a>
                    </li>
                  </ul>
                </div>
                <div class="card-body">
                  <div class="tab-content" id="custom-tabs-four-tabContent">
                    <div wire:ignore.self class="tab-pane fade active show" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" wire:model.debounce.500ms="name" class="form-control @error('name') is-invalid @enderror" id="name">
                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{ $errors->first('name') }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                  <label for="department">Department</label>
                                  <select wire:model.debounce.500ms="department" class="form-control @error('department') is-invalid @enderror" id="department">
                                      <option>Select Department</option>
                                      <option value="Frontend Developer">Frontend Developer</option>
                                      <option value="Backend Developer">Backend Developer</option>
                                      <option value="Others">Others</option>
                                  </select>
                                  @error('department')
                                  <div class="invalid-feedback">
                                      {{ $errors->first('department') }}
                                  </div>
                                  @enderror
                                </div>    
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" value="{{ auth()->user()->email }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="photo">Change Photo</label>
                                    <div class="custom-file">
                                        <input type="file" wire:model.debounce.500ms="photo" class="custom-file-input @error('photo') is-invalid @enderror" id="validatedCustomFile">
                                        <label class="custom-file-label" for="validatedCustomFile">{{ auth()->user()->photo }}</label>
                                        @error('photo')
                                          <div class="invalid-feedback">
                                              {{ $errors->first('photo') }}
                                          </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-success" wire:click.prevent="updateProfile()"> <i class="fas fa-check-circle"></i> Update Details</button>
                            </div>
                        </div>
                    </div>
                    <div wire:ignore.self class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="old_password">Old Password</label>
                                    <input type="password" wire:model.lazy="old_password" class="form-control @error('old_password') is-invalid @enderror" id="old_password" placeholder="Enter old password">
                                    @error('old_password')
                                          <div class="invalid-feedback">
                                              {{ $errors->first('old_password') }}
                                          </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="new_password">New Password</label>
                                    <input type="password" wire:model.lazy="new_password" class="form-control @error('new_password') is-invalid @enderror" id="new_password" placeholder="Enter new password">
                                    @error('new_password')
                                          <div class="invalid-feedback">
                                              {{ $errors->first('new_password') }}
                                          </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-success" wire:click.prevent="updatePassword()"> <i class="fas fa-check-circle"></i> Update Password</button>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
                <!-- /.card -->
              </div>
        </div>
        {{-- <div class="col-md-4">
            <!-- Profile Image -->
            <div class="card card-info card-outline">
                <div class="card-body box-profile">
                  <div class="text-center">
                  	@if($userAvatar)
                  	<img class="profile-user-img img-fluid img-circle"
                         src="{{ asset('storage/avatar/'.$userAvatar) }}"
                         alt="User profile picture">
                  	@else
                  	<img class="profile-user-img img-fluid img-circle"
                         src="{{ asset('backend/dist/img/user4-128x128.jpg') }}"
                         alt="User profile picture">
                  	@endif
                  </div>
  
                  <h3 class="profile-username text-center">{{ $name }}</h3>
  
                  <p class="text-muted text-center">{{ $department }}</p>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div> --}}
        <div class="col-md-4">
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user shadow">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-info">
                <h3 class="widget-user-username">{{ $name }}</h3>
                <h5 class="widget-user-desc">{{ $department }}</h5>
              </div>
              <div class="widget-user-image">
                @if ($photo)
                    <img class="img-circle elevation-2" src="{{ $photo->temporaryUrl() }}" alt="User Avatar">
                @else
                <img class="img-circle elevation-2" src="{{ $userAvatar ? asset('storage/avatar/'.$userAvatar) : 'https://www.gravatar.com/avatar/'.md5( strtolower(trim(auth()->user()->email))) }}" alt="User Avatar">
                @endif
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">3,200</h5>
                      <span class="description-text">SALES</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">13,000</h5>
                      <span class="description-text">FOLLOWERS</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4">
                    <div class="description-block">
                      <h5 class="description-header">35</h5>
                      <span class="description-text">PRODUCTS</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
    </div>
</div>
