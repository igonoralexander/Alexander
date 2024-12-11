            <div class="sec-title centered">
                <h2>{{ $contact->big_title }}</h2>
                <div class="text"> {{ $contact->description }} </div>
            </div>
            <div class="row clearfix">
                <!--Form Column--->
                <div class="form-column col-xl-7 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="shape-box"><h3>{{ $contact->small_title }}</h3></div>
                        <div class="default-form contact-form">
                            <form action = "{{ route('send.email') }}" method = "POST" id="contact-form">
                                @csrf

                                @if (session()->has('message'))
                                    <div class="alert alert-success">
                                        {{ session('message') }}
                                    </div>
                                @endif

                                <div class="row clearfix">                                    
                                    <div class="col-md-6 col-sm-12 form-group">
                                        <div class="field-label">Your Name</div>
                                        <input type="text" name="name" required>
                                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    
                                    <div class="col-md-6 col-sm-12 form-group">
                                        <div class="field-label">Email</div>
                                        <input type="email" name="email" required>
                                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
            
                                    <div class="col-md-6 col-sm-12 form-group">
                                        <div class="field-label">Phone</div>
                                        <input type="text" name="phone" required>
                                        @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="col-md-6 col-sm-12 form-group">
                                        <div class="field-label">How we can help?</div>
                                        <input type="text" name="subject" required>
                                        @error('subject') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="col-md-12 col-sm-12 form-group">
                                        <div class="field-label">Message</div>
                                        <textarea name="content" placeholder="Write your message"></textarea>
                                        @error('content') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
            
                                    <div class="col-md-12 col-sm-12 form-group">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="agreeCheckbox" name="terms_agreement" required>
                                            <label class="form-check-label field-label" for="agreeCheckbox">
                                                By contacting, I agree to the 
                                                <a href="/terms-conditions" target="_blank" class="text-color hover-underline">terms and conditions</a> 
                                                and 
                                                <a href="/privacy-policy" target="_blank" class="text-color hover-underline">privacy policy</a>.
                                            </label>
                                        </div>
                                    </div>
                                    @error('terms_agreement') <span class="text-danger">{{ $message }}</span> @enderror


                                    <div class="col-md-12 col-sm-12 form-group">
                                        <button class="btn-style-one" type="submit">
                                            <span class="btn-title">Send Message</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--Image Column--->
                <div class="image-column col-xl-5 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner">
                        <figure class="image"><img src="{{ asset ($contact->image_path) }}" alt=""></figure>
                    </div>
                </div>