<div class="layer-11">
    <div class="layer-11-reg">
        <div class="dotty-dots first-regin"></div>

        <div id="link-content-left" class="link-content" style="opacity: 0; animation-delay: 0ms;">
            <div class="reg-at-end">
                <div class="left-layer-11">
                    <div class="bg-text-11">
                        <h1 class="bg-text-11-h1">LIENS UTILES :</h1>
                    </div>
                    <div class="sht-ext-11">
                        <p class="text-11 reg-small-txt-on-r2">En cas de difficultés pour consulter vos résultats, n'hésitez pas à nous contacter</p>
                    </div>
                    <a href="#contact">
                        <button class="main-button-11 reg-small-btn-on-r1">CONTACTEZ-NOUS</button>
                    </a>
                </div>
            </div>
        </div>

        <div id="link-content-right" class="link-content" style="opacity: 0; animation-delay: 0ms;">
            <div class="right-layer-11">
                <div class="right-side-11-reg">
                    <div class="note-11">
                        <div class="note-11-reg">
                            <img
                                src="assets/img/fbenat.webp"
                                alt="#fes"
                                width="150"
                                height="150"
                                class="img-note" />
                            <p class="notes-text reg-small-txt-on-r1">Accéder aux résultats de l'examen<br /> du permis de conduire</p>
                            <a href="https://www.securite-routiere.gouv.fr/resultats-du-permis-de-conduire#/" target="_blank">
                                <button class="note-button reg-small-btn-on-r1">VISITER LE SITE</button>
                            </a>
                        </div>
                    </div>
                    <div class="note-11">
                        <div class="note-11-reg">
                            <img
                                src="assets/img/ants.webp"
                                alt="#yes"
                                width="150"
                                height="150"
                                class="img-note" />
                            <p class="notes-text reg-small-txt-on-r1">Faire la demande d'obtention<br /> du permis de conduire</p>
                            <a href="https://ants.gouv.fr/" target="_blank">
                                <button class="note-button reg-small-btn-on-r1">VISITER LE SITE</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const linkContentLeft = document.getElementById('link-content-left');
        const linkContentRight = document.getElementById('link-content-right');
        let hasAnimated = false;

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting && !hasAnimated) {
                    hasAnimated = true;
                    linkContentLeft.style.opacity = 1;
                    linkContentLeft.style.transform = 'translateY(0)';
                    linkContentRight.style.opacity = 1;
                    linkContentRight.style.transform = 'translateY(0)';
                }
            });
        }, {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        });

        if (linkContentLeft && linkContentRight) {
            observer.observe(linkContentLeft);
            observer.observe(linkContentRight);
        }
    });
</script>