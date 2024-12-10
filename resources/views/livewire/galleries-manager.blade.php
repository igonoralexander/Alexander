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
            <h4> Add Image(s) to Gallery</h4>
        </div>
        <div class="card-body">
            <form wire:submit.prevent="save" method = "post">
                @csrf

                @if (session()->has('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif

                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" wire:model="images" class="form-control-file" id="images" multiple/>
                    @error('images.*') <span class="text-danger">{{ $message }}</span> @enderror               
                </div>
                <button type="submit" class="btn btn-primary"> Save </button>
            </form>
        </div>
    </div>

   <!-- Listing -->
<div class="row">
   @if(!empty($data) && $data->isNotEmpty())
        @foreach($data as $item)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    @if($item->image)
                        <img src="{{ asset($item->image) }}" class="card-img-top small-image" alt="{{ $item->name }}">
                    @endif
                    <div class="card-footer d-flex justify-content-between">
                        <!-- <button wire:click="edit({{ $item->id }})" class="btn btn-info btn-sm">Edit</button> -->
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