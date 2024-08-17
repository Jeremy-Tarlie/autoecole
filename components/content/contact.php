<div id="contact" class="contact-container" style="opacity: 0; animation-delay: 0ms;">
    <div class="layer-12">
        <div class="contact">
            <div class="upper-contact">
                <div class="uc-h1">CONTACTEZ-NOUS</div>
                <div class="uc-p reg-small-txt-on-r">N'hésitez pas à venir nous voir en agence, nous serons ravis de répondre à vos questions !</div>
            </div>
            <div class="lower-contact">
                <div class="lc">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone" class="svg-inline--fa fa-phone sig-icon" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"></path>
                    </svg>
                    <h1 class="lc-h1 reg-small-txt-on-r1">05 57 43 34 20</h1>
                </div>
                <div class="lc">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="location-dot" class="svg-inline--fa fa-location-dot sig-icon" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                        <path fill="currentColor" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"></path>
                    </svg>
                    <h1 class="lc-h1 reg-small-txt-on-r1">En agence</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const contactElement = document.getElementById('contact');
        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    contactElement.style.opacity = 1;
                    contactElement.classList.add('css-0');
                }
            });
        }, {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        });

        if (contactElement) {
            observer.observe(contactElement);
        }
    });
</script>
