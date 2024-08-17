<div class="first-layer-all-the-time" id="accueil">
    <img
        src="assets/img/driving-women.png"
        alt="picme"
        width="1000"
        height="1000"
        class="pic-impro" />
    <div id="intro-content" class="intro-content" style="z-index: 1; animation-delay: 0ms;">
        <div class="regulating-stuff">
            <h1 class="text-up">
                LE PERMIS EN UN CLAQUEMENT
                <br />
                <span class="yellow">DE DOIGTS !</span>
            </h1>
            <a href="#services">
                <div id="button-container" class="button-container" style="animation-delay: 0ms;">
                    <button class="know-more reg-small-btn-on-r1">
                        EN SAVOIR PLUS
                    </button>
                </div>
            </a>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const introContent = document.getElementById('intro-content');
        const buttonContainer = document.getElementById('button-container');
        let hasAnimated = false;

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting && !hasAnimated) {
                    hasAnimated = true;
                    introContent.classList.add('css-zvi4ix');
                    buttonContainer.classList.add('css-zvi4ix');
                }
            });
        }, {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        });

        if (introContent) {
            observer.observe(introContent);
        }
    });
</script>