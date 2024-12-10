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
            <h4>{{ $selectedId ? 'Edit' : 'Add ' }}</h4>
        </div>
        <div class="card-body">
            <form wire:submit.prevent="submit" method = "post">
                @csrf

                @if (session()->has('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif
                
                <div class="form-group">
                    <label for="name">Page Name</label>
                    <input type="text" wire:model="page_name" class="form-control" id="page_name" required />
                    @error('page_name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

              <!-- Site Title -->
              <div class="form-group">
                    <label for="meta_title">Meta Title</label>
                    <input type="text" wire:model="meta_title" id="meta_title" class="form-control" required>
                    @error('meta_title') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <!-- Meta Keywords -->
                <div class="form-group">
                    <label for="meta_keywords">Meta Keywords</label>
                    <textarea wire:model="meta_keywords" id="meta_keywords" class="form-control"></textarea>
                    @error('meta_keywords') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <!-- Meta Description -->
                <div class="form-group">
                    <label for="meta_description">Meta Description</label>
                    <textarea wire:model="meta_description" id="meta_description" class="form-control"></textarea>
                    @error('meta_description') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <button type="submit" class="btn btn-primary">{{ $selectedId ? 'Update' : 'Save' }}</button>
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
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->page_name }}</h5>
                        <p></p>
                        <p class="card-text"><strong> Meta Title: </strong> {{ $item->meta_title }} </p>
                        <p class="card-text"><strong> Meta Keywords: </strong> {{ $item->meta_keywords }}  </p>
                        <p class="card-text"><strong> Meta Description: </strong> {{ $item->meta_description }} </p>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <button wire:click="edit({{ $item->id }})" class="btn btn-info btn-sm">Edit</button>
                        <button wire:click="delete({{ $item->id }})" class="btn btn-danger btn-sm">Delete</button>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>Nothing found in database.</p>
    @endif
    </div>
</div>