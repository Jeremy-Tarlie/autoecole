<div id="document-section" class="document-section" style="transform: translateY(100px); opacity: 0; transition: transform 1s ease-in-out; animation-delay: 0ms;">
    <div class="the-duplicate-layer">
        <div class="the-duplicate-layer-h1">
            <h1 class="header-8-h1">DOCUMENTS A FOURNIR :</h1>
        </div>
        <div class="multiple-layer-regulating">
            <div class="multiple-layer-mid">
                <div class="multiple-layer-midimg-reg">
                    <img
                        src="assets/img/shrubery.webp"
                        alt="silo"
                        width="428"
                        height="508"
                        class="img-prob" />
                </div>
                <div>
                    <ul class="disc-before">
                        <li>Votre <b>ASSR2 / BSR / permis AM</b></li>
                        <li>La <b>carte d'identité de l'élève</b></li>
                        <li>Votre <b>certificat Journée Défense et Citoyenneté</b> (J.D.C)</li>
                        <li>Une <b>attestation d'hébergement</b> rédigée par l'hébergeur</li>
                        <li>Une <b>facture</b> récente <b>au nom de l'hébergeur</b></li>
                        <li>La <b>pièce d'identité de l'hébergeur</b></li>
                        <li>Une <b>photo avec signature numérique</b></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const documentSection = document.getElementById('document-section');
        let hasAnimated = false;

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting && !hasAnimated) {
                    hasAnimated = true;
                    documentSection.classList.add('css-0');
                    documentSection.style.transform = 'translateY(0)';
                    documentSection.style.opacity = '1';
                }
            });
        }, {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        });

        if (documentSection) {
            observer.observe(documentSection);
        }
    });
</script>