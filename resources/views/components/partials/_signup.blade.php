<div class="signup p-3">
    <div>
        <div class="text-warning">Sign up with us to get notified about our latest posts</div>
    </div>
    <form class="d-flex flex-column" role="search" wire:submit="signup">
        <div class="py-1">
            <label for="name">Name</label>
            <input class="form-control search" wire:model="user_name" type="text" placeholder="Enter your name...">
            @error('user_name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="py-1">
            <label for="email">Email</label>
            <input class="form-control search" wire:model="user_email" type="email" placeholder="Enter your email address...">
            @error('user_email')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="py-1">
            <button type="submit" class="btn bg-primary btn-sm text-light">Sign up</button>
        </div>
        @if(session('success'))
            <div class="py-2 text-success bg-light border p-3">
                {{ session('success') }}
            </div>
        @endif
    </form>
    
</div>