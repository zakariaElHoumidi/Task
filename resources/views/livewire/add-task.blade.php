<div>
    <h3 class="text-center">Add Task</h3>

    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session('success')  }}
        </div>
    @endif
    <div class="form-group mb-2">
        <label for="title" class="mb-2">Title</label>
        <input type="text" id="title" wire:model="title" placeholder="Entre Title" class="form-control border-dark shadow-sm">
        @error('title')
            <p class="text-danger mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div class="form-group mb-2">
        <label for="description" class="mb-2">Description</label>
        <textarea type="text" id="description" wire:model="description" placeholder="Entre Description" rows="3" class="form-control border-dark shadow-sm"></textarea>
        @error('description')
            <p class="text-danger mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div class="form-group mb-2">
        <button class="btn btn-primary" wire:click="addTask">Add</button>
    </div>
</div>
