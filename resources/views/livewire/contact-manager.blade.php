@php

    use Illuminate\Support\Str;

@endphp

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
                <!-- Add/Edit Contact Form -->
    <div class="card mb-4">
        <div class="card-header">
            <h4>{{ $selectedId ? 'Edit Contact' : 'Add Contact' }}</h4>
        </div>
        <div class="card-body">
            <form wire:submit.prevent="submit" method="post">
                @csrf

                @if (session()->has('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif

                <div class="form-group">
                    <label for="small_title">Small Title</label>
                    <input type="text" wire:model="small_title" class="form-control" id="small_title" />
                    @error('small_title') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="big_title">Big Title</label>
                    <input type="text" wire:model="big_title" class="form-control" id="big_title" />
                    @error('big_title') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea wire:model="description" class="form-control" id="description" rows="5"></textarea>
                    @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" wire:model="address" class="form-control" id="address" required />
                    @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="location_name">Location Name</label>
                    <input type="text" wire:model="location_name" class="form-control" id="location_name" />
                    @error('location_name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" wire:model="phone" class="form-control" id="phone" required />
                    @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" wire:model="email" class="form-control" id="email" />
                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <!-- Social Media Links -->
                <div class="form-group">
                    <label for="facebook_link">Facebook Link</label>
                    <input type="url" wire:model="facebook_link" class="form-control" id="facebook_link" />
                    @error('facebook_link') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="twitter_link">Twitter Link</label>
                    <input type="url" wire:model="twitter_link" class="form-control" id="twitter_link" />
                    @error('twitter_link') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="instagram_link">Instagram Link</label>
                    <input type="url" wire:model="instagram_link" class="form-control" id="instagram_link" />
                    @error('instagram_link') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="youtube_link">YouTube Link</label>
                    <input type="url" wire:model="youtube_link" class="form-control" id="youtube_link" />
                    @error('youtube_link') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="featured_image">Image</label>
                    <input type="file" accept="image/png, image/jpg, image/jpeg" wire:model="image_path" class="form-control-file" id="image_path" />
                    @error('image_path') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <button type="submit" class="btn btn-primary">{{ $selectedId ? 'Update' : 'Save' }}</button>
                <button type="button" wire:click="resetForm" class="btn btn-secondary">Cancel</button>
            </form>
        </div>
    </div>

    <!-- Card Listing -->
    <div class="row">
        @if(!empty($data) && $data->isNotEmpty())
            @foreach($data as $contact)
                <div class="col-md-12 mb-12">
                    <div class="card h-100 shadow-sm">
                        @if($contact->image_path)
                            <img src="{{ asset($contact->image_path) }}" class="card-img-top small-image" alt="{{ $contact->small_title }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $contact->small_title }}</h5>
                            <p><strong>Big Title:</strong> {{ $contact->big_title }}</p>
                            <p><strong>Description:</strong> {{ Str::limit($contact->description, 100) }}</p>
                            <p><strong>Address:</strong> {{ $contact->address }}</p>
                            <p><strong>Phone:</strong> {{ $contact->phone }}</p>
                            <p><strong>Email:</strong> {{ $contact->email }}</p>
                            <!-- Display Social Links -->
                            <p><strong>Social Links:</strong></p>
                            <ul>
                                @if($contact->facebook_link) <li><a href="{{ $contact->facebook_link }}">Facebook</a></li> @endif
                                @if($contact->twitter_link) <li><a href="{{ $contact->twitter_link }}">Twitter</a></li> @endif
                                @if($contact->instagram_link) <li><a href="{{ $contact->instagram_link }}">Instagram</a></li> @endif
                                @if($contact->youtube_link) <li><a href="{{ $contact->youtube_link }}">YouTube</a></li> @endif
                            </ul>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <button wire:click="edit({{ $contact->id }})" class="btn btn-info btn-sm">Edit</button>
                        </div>
                    </div>
                </div>
            @endforeach
            @else
                <div class="col-12">
                    <p>No contact information available. Please add some.</p>
                </div>
            @endif
    </div>

     
</div>