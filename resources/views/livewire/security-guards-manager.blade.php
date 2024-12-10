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
            <h4>{{ $selectedId ? 'Edit Team Memeber Info' : 'Add Team Member' }}</h4>
        </div>
        <div class="card-body">
            <form wire:submit.prevent="submit" method = "post">
                @csrf

                @if (session()->has('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif
                
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" wire:model="name" class="form-control" id="name" required />
                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="name">Title</label>
                    <input type="text" wire:model="title" class="form-control" id="title" required />
                    @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" accept = "image/png, image/jpg, image/jpeg" wire:model="image" class="form-control-file" id="image" />
                    @error('image') <span class="text-danger">{{ $message }}</span> @enderror
               
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
                    @if($item->image)
                        <img src="{{ asset($item->image) }}" class="card-img-top small-image" alt="{{ $item->name }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->name }}</h5>
                        <p class="card-text">{{ $item->title }}</p>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <button wire:click="edit({{ $item->id }})" class="btn btn-info btn-sm">Edit</button>
                        <button wire:click="delete({{ $item->id }})" class="btn btn-danger btn-sm">Delete</button>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>None found.</p>
    @endif

    </div>
</div>