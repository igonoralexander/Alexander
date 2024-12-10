<div>

<div class="card mb-4">
        <div class="card-header">
            <h4>Site Settings</h4>
        </div>
        <div class="card-body">
    <form wire:submit.prevent="save" enctype="multipart/form-data">
        @csrf
        
        @if (session()->has('message'))
            <div class="alert alert-success mt-2">
                {{ session('message') }}
            </div>
        @endif

        <!-- Logo Image -->
        <div class="form-group">
            <label for="newLogo">Site Logo</label>
            @if ($logo)
                <img src="{{ asset('storage/' . $logo) }}" alt="Site Logo" width="100">
            @endif
            <input type="file" wire:model="newLogo" id="newLogo" class="form-control">
            @error('newLogo') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <!-- Favicon Image -->
        <div class="form-group">
            <label for="newFavicon">Site Favicon</label>
            @if ($favicon)
                <img src="{{ asset('storage/' . $favicon) }}" alt="Site Favicon" width="30">
            @endif
            <input type="file" wire:model="newFavicon" id="newFavicon" class="form-control">
            @error('newFavicon') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <!-- Breadcrumb Image -->
        <div class="form-group">
            <label for="newBreadcrumbImage">Breadcrumb Image</label>
            @if ($breadcrumb_image)
                <img src="{{ asset('storage/' . $breadcrumb_image) }}" alt="Breadcrumb Image" width="100">
            @endif
            <input type="file" wire:model="newBreadcrumbImage" id="newBreadcrumbImage" class="form-control">
            @error('newBreadcrumbImage') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <!-- About Section Image -->
        <div class="form-group">
            <label for="newAboutSectionImage">About Section Image</label>
            @if ($about_section_image)
                <img src="{{ asset('storage/' . $about_section_image) }}" alt="About Section Image" width="100">
            @endif
            <input type="file" wire:model="newAboutSectionImage" id="newAboutSectionImage" class="form-control">
            @error('newAboutSectionImage') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <!-- Other Images... -->
        <!-- Similar sections for contact_section_image, services_section_image, etc., follow the same format -->

        <!-- Site Title -->
        <div class="form-group">
            <label for="site_title">Site Title</label>
            <input type="text" wire:model="site_title" id="site_title" class="form-control">
            @error('site_title') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn btn-primary mt-3">Save Settings</button>

       
    </form>
    </div>
    </div>
</div>
