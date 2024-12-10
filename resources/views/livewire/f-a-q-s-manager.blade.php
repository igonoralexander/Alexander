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
                    <label for="name">Question</label>
                    <input type="text" wire:model="question" class="form-control" id="question" required />
                    @error('question') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="description">Answer</label>
                    <textarea wire:model="answer" class="form-control" id="testimonial" rows="5" required></textarea>
                    @error('answer') <span class="text-danger">{{ $message }}</span> @enderror
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
                        <h5 class="card-title">{{ $item->question }}</h5> {{ $item->title }}
                        <p></p>
                        <p class="card-text">{{ $item->answer }}</p>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <button wire:click="edit({{ $item->id }})" class="btn btn-info btn-sm">Edit</button>
                        <button wire:click="delete({{ $item->id }})" class="btn btn-danger btn-sm">Delete</button>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>No FAQs found.</p>
    @endif
    </div>
</div>