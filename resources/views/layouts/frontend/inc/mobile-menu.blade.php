   <!-- mobile menu -->
   <div class="offcanvas offcanvas-start canvas-mb" id="mobileMenu">
        <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
        <div class="mb-canvas-content">
            <div class="mb-body global-reset">
                <ul class="nav-ul-mb" id="wrapper-menu-navigation">

                    <li class="nav-mb-item">
                        <a href="/" class="mb-menu-link">Home</a>
                    </li>

                    <li class="nav-mb-item">
                        <a href="/about" class="mb-menu-link">About Me</a>
                    </li>

                    <li class="nav-mb-item">
                        <a href="/services" class="mb-menu-link">Services</a>
                    </li>

                    <li class="nav-mb-item">
                        <a href="/portfolio" class="mb-menu-link">Portfolio/Projects</a>
                    </li>

                    <li class="nav-mb-item">
                        <a href="/blog" class="mb-menu-link">Articles</a>
                    </li>

                    <li class="nav-mb-item">
                        <a href="/testimonials" class="mb-menu-link">Testimonials</a>
                    </li>
                    
                    <li class="nav-mb-item">
                        <a href="/faq" class="mb-menu-link">FAQs</a>
                    </li>

                    <li class="nav-mb-item">
                        <a href="/contact" class="mb-menu-link">Contact</a>
                    </li>

                    <li class="nav-mb-item">
                        <a href="https://drive.google.com/file/d/1rCmSwZW0DDKXS6bcU1VmYJfG5-YbanRF/view?usp=drive_link" class="mb-menu-link">Resume</a>
                    </li>

                </ul>
                <div class="mb-other-content">
                    <div class="d-flex group-icon">
                        <a href="{{ route('file.download', ['filename' => 'resume.pdf']) }}" class="site-nav-icon"><i i class="fas fa-file-download"></i>Download Cv</a>
                    </div>
                    <div class="mb-notice">
                        <a href="/contact" class="text-need">Hire Me</a>
                    </div>
                    <ul class="mb-info">
                        <li>Email: <b>{{ $contact->email }}</b></li>
                        <li>Phone: <b>{{ $contact->phone }}</b></li>
                    </ul>
                </div>
            </div>
        </div>       
    </div>
    <!-- /mobile menu -->