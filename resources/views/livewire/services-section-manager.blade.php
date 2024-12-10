<div>
    
    @push('styles')
    <style>
        .card-title {
            font-weight: bold;
            font-size: 1.2em;
        }

        .card-text {
            font-size: 15px;
            color: #6c757d;
        }

        .card-footer {
            background: #f8f9fa;
        }

        .small-image {
            display: block;
            margin-left: auto;
            margin-right: auto;
            max-width: 200px; /* Adjust the size to your preference */
            height: auto;
        }
        
    </style>
    @endpush    

    <!-- Add/Edit Form -->
    <div class="card mb-4">
        <div class="card-header">
            <h4>{{ $selectedId ? 'Edit Services Section' : 'Add Services Section' }}</h4>
        </div>
        <div class="card-body">
            <form wire:submit.prevent="submit" method = "post">
                @csrf

                @if (session()->has('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif

                <div class="form-group">
                    <label for="name">Icon</label>
                    <input type="text" wire:model="icon" class="form-control" id="icon" required />
                    @error('icon') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="name"> Services Title</label>
                    <input type="text" wire:model="title" class="form-control" id="title" required />
                    @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea wire:model="description" class="form-control" id="description" rows="3"></textarea>
                    @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <button type="submit" class="btn btn-primary">{{ $selectedId ? 'Update' : 'Save' }} </button>
                <button type="button" wire:click="resetForm" class="btn btn-secondary">Cancel</button>
            </form>
        </div>
    </div>

   <!-- Project Card Listing -->
   <div class="row">
   @if(!empty($data) && $data->isNotEmpty())
        @foreach($data as $item)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="icon-box" style="margin-top: 50px; display: flex; align-items: center; justify-content: center; font-size: 35px; color: #0056b3;">
                        <i class="{{ $item->icon }}"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->title }}</h5>
                        <p class="card-text">{{ $item->description }}</p>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <button wire:click="edit({{ $item->id }})" class="btn btn-info btn-sm">Edit</button>
                        <button wire:click="delete({{ $item->id }})" class="btn btn-danger btn-sm">Delete</button>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>Not found.</p>
    @endif
    </div>
</div>