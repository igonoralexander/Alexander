<div>

                            <form wire:submit.prevent="submit" id="contact-form">
                                
                                @if (session()->has('message'))
                                    <div class="alert alert-success">{{ session('message') }}</div>
                                @endif

                                <div class="row clearfix">                                    
                                    <div class="col-md-6 col-sm-12 form-group">
                                        <div class="field-label">Your Name</div>
                                        <input type="text" wire:model="name" required>
                                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    
                                    <div class="col-md-6 col-sm-12 form-group">
                                        <div class="field-label">Email</div>
                                        <input type="email" wire:model="email" required>
                                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
            
                                    <div class="col-md-6 col-sm-12 form-group">
                                        <div class="field-label">Phone</div>
                                        <input type="text" wire:model="phone" required>
                                        @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="col-md-6 col-sm-12 form-group">
                                        <div class="field-label">How we can help?</div>
                                        <input type="text" wire:model="subject" required>
                                        @error('subject') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="col-md-12 col-sm-12 form-group">
                                        <div class="field-label">Message</div>
                                        <textarea wire:model="content" placeholder="Write your message"></textarea>
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
                                        @error('terms_agreement') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>


                                    <div class="col-md-12 col-sm-12 form-group">
                                        <button class="theme-btn btn-style-one" type="submit">
                                            <span class="btn-title">Send Message</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
</div>