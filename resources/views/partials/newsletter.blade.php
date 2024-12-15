<div id="newsletterPopup" class="popup-overlay">
    <div class="popup-content">
        <span class="newsletter-close-btn" onclick="closePopup('newsletterPopup')">&times;</span>
        <!-- <div class="modal-top">
            <img src="{{ asset('frontend/images/banner-newsletter.png') }}" alt="Newsletter Banner">
        </div> -->
        <div class="modal-bottom">
            <h4>Don’t Miss Out!</h4>
            <h6>Get the latest updates on our innovative web solutions, expert tips, industry trends, and exclusive offers.</h6>
            
            <form id="newsletter-form" class="form-newsletter">
                @csrf

                <div id="subscribe-content">
                    <input type="email" name="email" id="subscribe-email" placeholder="Enter your email" required>
                    <button type="submit" id="subscribe-button" class="newsletter-btn">Keep me updated</button>
                </div>
                <div id="subscribe-msg" class="text-center"></div>
            </form>
            
            <div class="text-center mt-3">
                <button class="btn-line" onclick="setNotInterested()">Not Interested</button>
            </div>

            <!-- Disclaimer Section -->
            <p class="text-center mt-3" style="font-size: 14px; color: #555; line-height: 1.5;">
                By signing up, you agree to our 
                <a href="/terms-conditions" style="color: #007bff; text-decoration: underline;">Terms and Conditions</a>, 
                and you acknowledge our 
                <a href="/privacy-policy" style="color: #007bff; text-decoration: underline;">Privacy Policy</a>.
            </p>

        </div>
    </div>
</div>