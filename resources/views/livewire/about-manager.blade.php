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

        <!-- Add/Edit Form -->
        <div class="card mb-4">
            <div class="card-header">
                <h4>{{ $selectedAboutId ? 'Edit About Section' : 'Add About Section' }}</h4>
            </div>
            <div class="card-body">
                <form wire:submit.prevent="submit" method="post">
                    @csrf

                    @if (session()->has('message'))
                        <div class="alert alert-success">{{ session('message') }}</div>
                    @endif

                    <div class="form-group">
                        <label for="main_title">Main Title</label>
                        <input type="text" wire:model="main_title" class="form-control" id="main_title" />
                        @error('main_title') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="who_we_are">Who We Are</label>
                        <textarea wire:model="who_we_are" class="form-control" id="who_we_are" rows="10"></textarea>
                        @error('who_we_are') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="brief_history">Brief History</label>
                        <textarea wire:model="brief_history" class="form-control" id="brief_history" rows="10"></textarea>
                        @error('brief_history') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="aim_and_objectives">Aim and Objectives</label>
                        <textarea wire:model="aim_and_objectives" class="form-control" id="aim_and_objectives" rows="10"></textarea>
                        @error('aim_and_objectives') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="focus_areas">Focus Areas</label>
                        <textarea wire:model="focus_areas" class="form-control" id="focus_areas" rows="10"></textarea>
                        @error('focus_areas') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="founder">Founder</label>
                        <textarea wire:model="founder" class="form-control" id="founder" rows="3"></textarea>
                        @error('founder') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="featured_image">Featured Image</label>
                        <input type="file" accept="image/png, image/jpg, image/jpeg" wire:model="featured_image" class="form-control-file" id="featured_image" />
                        @error('featured_image') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="meta_title">Meta Title</label>
                        <input type="text" wire:model="meta_title" class="form-control" id="meta_title" />
                        @error('meta_title') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="meta_description">Meta Description</label>
                        <textarea wire:model="meta_description" class="form-control" id="meta_description" rows="10"></textarea>
                        @error('meta_description') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">{{ $selectedAboutId ? 'Update' : 'Save' }}</button>
                    <button type="button" wire:click="resetForm" class="btn btn-secondary">Cancel</button>
                </form>
            </div>
        </div>
</div>