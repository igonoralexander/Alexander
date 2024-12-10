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
                max-width: 200px;
                height: auto;
            }
            
        </style>
    @endpush

     <!-- Add/Edit Form -->
     <div class="card mb-4">
            <div class="card-header">
                <h4>{{ $selectedId ? 'Edit About Section' : 'Add About Section' }}</h4>
            </div>
            <div class="card-body">
                <form wire:submit.prevent="submit" method = "post">
                    @csrf

                    @if (session()->has('message'))
                        <div class="alert alert-success">{{ session('message') }}</div>
                    @endif

                    <div class="form-group">
                        <label for="name">Small Title</label>
                        <input type="text" wire:model="small_title" class="form-control" id="small_title" required />
                        @error('small_title') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="name">Big Title</label>
                        <input type="text" wire:model="big_title" class="form-control" id="big_title" required />
                        @error('big_title') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea wire:model="description" class="form-control" id="description" rows="5"></textarea>
                        @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="description">Mission Statement</label>
                        <textarea wire:model="mission_statement" class="form-control" id="mission_statement" rows="5"></textarea>
                        @error('mission_statement') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="description">Vision</label>
                        <textarea wire:model="vision" class="form-control" id="vision" rows="5"></textarea>
                        @error('vision') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" accept = "image/png, image/jpg, image/jpeg" wire:model="image" class="form-control-file" id="image" />
                        @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                
                    </div>

                    <button type="submit" class="btn btn-primary">{{ $selectedId ? 'Update' : 'Save' }}</button>
                    <button type="button" wire:click="resetForm" class="btn btn-secondary">Cancel</button>
                </form>
            </div>
        </div>
    
   
        <!-- Card Listing -->
   
   <div class="row">
        @if(!empty($data) && $data->isNotEmpty())
            @foreach($data as $item)
                <div class="col-md-12 mb-12">
                    <div class="card h-100 shadow-sm">
                        @if($item->image)
                            <img src="{{ asset($item->image) }}" class="card-img-top small-image" alt="{{ $item->name }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->big_title }}</h5>
                            <p class="card-text">{!! nl2br(e($item->description)) !!}</p>
                            <h5 class="card-title">Mission Statement</h5>
                            <p class="card-text">{!! nl2br(e($item->mission_statement)) !!}</p>
                            <h5 class="card-title">Vision</h5>
                            <p class="card-text">{!! nl2br(e($item->vision)) !!}</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <button wire:click="edit({{ $item->id }})" class="btn btn-info btn-sm">Edit</button>
                            <!-- <button wire:click="delete({{ $item->id }})" class="btn btn-danger btn-sm">Delete</button> -->
                        </div>
                    </div>
                </div>
            @endforeach
        @else
        
        @endif
    </div>
</div>
