<div class="layer-8">
    <div class="layer-8-reg">
        <div class="header-8">
            <h1 class="header-8-h1 handling-alone">
                JE PASSE MON PERMIS
                <span class="spano">SUR :</span>
            </h1>
        </div>
        <div class="two-cars-lined">
            <div class="dotty-dots second-regin"></div>
            <div class="dotty-dots third-regin"></div>
            <div class="tcl-reg">
                <div id="image1" style="opacity: 0;">
                    <img
                        src="assets/img/p208.webp"
                        alt="int"
                        width="400"
                        height="400" />
                </div>
                <div id="image2" style="opacity: 0;">
                    <img
                        src="assets/img/c3.webp"
                        alt="in"
                        width="400"
                        height="400" />
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const elements = [document.getElementById('image1'), document.getElementById('image2')];
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.classList.add('css-0'); // Apply CSS class for animation
                    observer.unobserve(entry.target);
                }
            });
        }, {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        });

        elements.forEach(element => {
            observer.observe(element);
        });
    });
</script>