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
    
    <!-- Change password -->
    <div class="card mb-4">
        <div class="card-header">
            <h4>Change Password</h4>
        </div>
        <div class="card-body">
            <form wire:submit.prevent="submit" method="post">
                @csrf

                @if (session()->has('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif

                <div class="form-group">
                    <label for="old_password">Old Password</label>
                    <input type="password" wire:model="old_password" class="form-control" id="old_password" required/>
                    @error('old_password') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="new_password">New Password</label>
                    <input type="password" wire:model="new_password" class="form-control" id="new_password" required />
                    @error('new_password') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

               
                <button type="submit" class="btn btn-primary">Save </button>
                <button type="button" wire:click="resetForm" class="btn btn-secondary">Cancel</button>
            </form>
        </div>
    </div>
     
</div>