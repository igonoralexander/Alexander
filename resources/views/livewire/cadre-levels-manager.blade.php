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
                <h4>{{ $selectedId ? 'Edit ' : 'Add ' }}</h4>
            </div>
            <div class="card-body">
                <form wire:submit.prevent="submit" method="post">
                    @csrf

                    @if (session()->has('message'))
                        <div class="alert alert-success">{{ session('message') }}</div>
                    @endif

                    <div class="form-group">
                        <label for="cadre_level">Cadre Level</label>
                        <input type="text" wire:model="cadre_level" class="form-control" id="cadre_level" required />
                        @error('cadre_level') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="qualifications">Qualifications</label>
                        <textarea wire:model="qualifications" class="form-control" id="qualifications" rows="10" required></textarea>
                        @error('qualifications') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="skills">Skills</label>
                        <textarea wire:model="skills" class="form-control" id="skills" rows="10"></textarea>
                        @error('skills') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="physical_abilities">Physical Abilities</label>
                        <textarea wire:model="physical_abilities" class="form-control" id="physical_abilities" rows="10"></textarea>
                        @error('physical_abilities') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="monthly_remuneration">Monthly Remuneration</label>
                        <textarea wire:model="monthly_remuneration" class="form-control" id="monthly_remuneration" rows="10"></textarea>
                        @error('monthly_remuneration') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="annual_remuneration">Annual Remuneration</label>
                        <textarea wire:model="annual_remuneration" class="form-control" id="annual_remuneration" rows="3"></textarea>
                        @error('annual_remuneration') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>


                    <div class="form-group">
                        <label for="benefits">Benefits</label>
                        <input type="text" wire:model="benefits" class="form-control" id="benefits" />
                        @error('benefits') <span class="text-danger">{{ $message }}</span> @enderror
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
                    <div class="col-md-6 mb-6">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->cadre_level }}</h5>
                                <p><strong>Qualifications:</strong> {{ Str::limit($item->qualifications, 100) }}</p>
                                <p><strong>Skills:</strong> {{ Str::limit($item->skills, 100) }}</p>
                                <p><strong>Physical Abilities:</strong> {{ Str::limit($item->physical_abilities, 100) }}</p>
                                <p><strong>Monthly Renumeration:</strong> {{ Str::limit($item->monthly_remuneration, 100) }}</p>
                                <p><strong>Annual Remuneration:</strong> {{ Str::limit($item->annual_remuneration, 100) }}</p>
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <button wire:click="edit({{ $item->id }})" class="btn btn-info btn-sm">Edit</button>
                            </div> 
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-12">
                    <p>No Cadre Levels available. Please add one.</p>
                </div>
            @endif
        </div>

</div>