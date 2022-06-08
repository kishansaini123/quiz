<div>
    <div class="mt-4" >
        <div class="form-group mb-3">
            <input type="text" wire:model.debounce.500ms="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Full Name">
            @error('name')
            <div class="invalid-feedback">
                {{ $errors->first('name') }}
            </div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <input type="email" wire:model.debounce.500ms="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email Address">
            @error('email')
            <div class="invalid-feedback">
                {{ $errors->first('email') }}
            </div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <input type="text" wire:model.debounce.500ms="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" placeholder="Phone Number">
            @error('phone')
            <div class="invalid-feedback">
                {{ $errors->first('phone') }}
            </div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <input type="text" wire:model.debounce.500ms="type" class="form-control @error('type') is-invalid @enderror" id="type" placeholder="Enquiry Type">
            @error('type')
            <div class="invalid-feedback">
                {{ $errors->first('type') }}
            </div>
            @enderror
        </div>
        <div class="form-group mb-4">
            <textarea wire:model.debounce.500ms="description" class="form-control @error('description') is-invalid @enderror" id="description" placeholder="Enquiry Description"
                rows="5"></textarea>
                @error('description')
            <div class="invalid-feedback">
                {{ $errors->first('description') }}
            </div>
            @enderror
        </div>
        <div class="form-group mb-0">
            <button type="button" wire:click.prevent="sendForm()" class="btn btn-primary">Send Massage<i class="fas fa-arrow-right pl-3"></i></button>
        </div>
    </div>
</div>
