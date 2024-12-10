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

    <!-- Card Listing -->
    <div class="row">
        @if(!empty($data) && $data->isNotEmpty())
            @foreach($data as $contact)
                <div class="col-md-12 mb-12">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Messages</h5>
                            <p><strong>Name:</strong> {{ $contact->name }}</p>
                            <p><strong>Email:</strong> {{ $contact->email }}</p>
                            <p><strong>Phone:</strong> {{ $contact->phone }}</p>
                            <p><strong>Subject:</strong> {{ $contact->subject }}</p>
                            <p><strong>Message:</strong></p>
                            <p>{{ Str::limit($contact->content, 200) }}</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <button wire:click="delete({{ $contact->id }})" class="btn btn-danger btn-sm">Delete</button>
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