<div>
    
    @push('styles')
    <style>
        .card-Heading {
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


    <!-- Add/Edit Project Form -->
    <div class="card mb-4">
        <div class="card-header">
            <h4>{{ $selectedId ? 'Edit Section' : 'Add Section' }}</h4>
        </div>
        <div class="card-body">
            <form wire:submit.prevent="submit" method = "post">
                @csrf

                @if (session()->has('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif

                <div class="form-group">
                    <label for="name">Heading</label>
                    <input type="text" wire:model="heading" class="form-control" id="heading" required />
                    @error('heading') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea wire:model="description" class="form-control" id="description" rows="3"></textarea>
                    @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="name">Highlight</label>
                    <input type="text" wire:model="highlight" class="form-control" id="highlight" required />
                    @error('highlight') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="name">Video URL</label>
                    <input type="text" wire:model="video_url" class="form-control" id="video_url" required />
                    @error('video_url') <span class="text-danger">{{ $message }}</span> @enderror
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

   <!-- Card Listing -->
   <div class="row">
   @if(!empty($data) && $data->isNotEmpty())
        @foreach($data as $item)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    @if($item->image)
                        <img src="{{ asset($item->image) }}" class="card-img-top small-image" alt="{{ $item->heading }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-Heading">{{ $item->heading }}</h5>
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
       
    @endif
    </div>
</div>