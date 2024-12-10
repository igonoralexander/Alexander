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

    <!-- Add/Edit Project Form -->
    <div class="card mb-4">
        <div class="card-header">
            <h4>{{ $selectedId ? 'Edit Project' : 'Add Project' }}</h4>
        </div>
        <div class="card-body">
            <form wire:submit.prevent="submit" method = "post">
                @csrf

                @if (session()->has('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif

                <div class="form-group">
                    <label for="projectCategory">Project Category</label>
                    <select wire:model="category_id" class="form-control" id="projectCategory">

                        @if ($project && $project->projectcategory)
                            <option value="{{ $project->category_id }}" selected>
                                {{ $project->projectcategory->name }}
                            </option>
                        @endif
                        
                        <option value="">Select Category </option>
                        
                        @foreach ($projectCategories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>

                    @error('category_id') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="name">Project Name</label>
                    <input type="text" wire:model="name" class="form-control" id="name" required />
                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="link">Link</label>
                    <input type="text" wire:model="link" class="form-control" id="link" />
                    @error('link') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea wire:model="description" class="form-control" id="description" rows="3"></textarea>
                    @error('description') <span class="text-danger">{{ $message }}</span> @enderror
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
        @foreach($data as $project)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    @if($project->image)
                        <img src="{{ asset($project->image) }}" class="card-img-top small-image" alt="{{ $project->name }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $project->name }}</h5>
                        <p class="card-text">{{ $project->description }}</p>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <button wire:click="edit({{ $project->id }})" class="btn btn-info btn-sm">Edit</button>
                        <button wire:click="delete({{ $project->id }})" class="btn btn-danger btn-sm">Delete</button>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>No projects found.</p>
    @endif

    </div>
</div>
