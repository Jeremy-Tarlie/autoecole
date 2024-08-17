<div id="detail-section" class="detail-section" style="animation-delay: 0ms;">
    <div class="layer-2-1">
        <div class="fr-one rg">
            <img
                src="assets/img/stats-ilu.webp"
                alt="1"
                width="250"
                height="250" />
            <p>
                TAUX DE REUSSIE ELEVE
            </p>
        </div>
        <div class="fr-two rg">
            <img
                src="assets/img/teacher-ilu.webp"
                alt="2"
                width="250"
                height="250" />
            <p>
                8 INSTRUCTEURS A VOTRE SERVICE
            </p>
        </div>
        <div class="fr-three rg">
            <img
                src="assets/img/online-ilu.webp"
                alt="3"
                width="250"
                height="250" />
            <p>
                COURS EN LIGNE
            </p>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const detailSection = document.getElementById('detail-section');
        let hasAnimated = false;

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting && !hasAnimated) {
                    hasAnimated = true;
                    detailSection.classList.add('css-zvi4ix');
                }
            });
        }, {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        });

        if (detailSection) {
            observer.observe(detailSection);
        }
    });
</script>