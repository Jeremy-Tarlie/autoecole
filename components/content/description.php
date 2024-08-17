<div class="layer-4-1" id="statistiques">
    <div class="layer-4-1-holder">
        <div id="description-text" class="description-text" style="opacity: 0; animation-delay: 0ms;">
            <p>
                La majorité des élèves décrochent 
                <span class="no-wrap">leur permis dès le premier</span>
                <br />
                passage de l’examen !
            </p>
        </div>
        <div id="description-line" class="description-line" style="opacity: 0; animation-delay: 0ms;">
            <div class="text-under-sline"></div>
        </div>
        <img 
            src="assets/img/cute-car.webp" 
            alt="cute" 
            width="489" 
            height="369" 
            class="cute-car" 
        />
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const descriptionText = document.getElementById('description-text');
        const descriptionLine = document.getElementById('description-line');
        let hasAnimated = false;

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting && !hasAnimated) {
                    hasAnimated = true;
                    descriptionText.style.opacity = 1;
                    descriptionText.classList.add('css-0');
                    descriptionLine.style.opacity = 1;
                    descriptionLine.classList.add('css-0');
                }
            });
        }, {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        });

        if (descriptionText && descriptionLine) {
            observer.observe(descriptionText);
            observer.observe(descriptionLine);
        }
    });
</script>
