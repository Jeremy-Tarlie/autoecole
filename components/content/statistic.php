<div class="auto-layout">
    <div></div>
    <div id="statistic-element">
        <div class="layer-5-1" id="serv">
            <div class="up-5-1">
                <div class="relative w-fit h-fit">
                    <img
                        src="assets/img/multi-car.webp"
                        alt="something to"
                        width="667"
                        height="668"
                        class="up-5-1-pic" />
                    <div class="div-in-pic">
                        <div class="text-in-pic">
                            <h1>
                                <span class="num-big">
                                    5000+
                                </span>
                                <br />
                                ETUDIANTS SATISFAITS
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="down-5-1">
                <div>
                    <h1>
                        Nos consultants vous aident à
                        <br />
                        obtenir
                        <span class="le-permis-5">
                            le permis
                        </span>
                        rapidement !
                    </h1>
                </div>
                <div class="the-list-reg">
                    <ul class="the-list">
                        <div class="same-gapping pi-num">
                            <li>
                                <span class="Num-li">
                                    +20
                                </span>
                                <span class="color-black">
                                    &nbsp;&nbsp;&nbsp; Années d'expérience
                                </span>
                            </li>
                            <li>
                                <span class="Num-li">
                                    8
                                </span>
                                <span class="color-black">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Moniteurs expérimentés
                                </span>
                            </li>
                            <li>
                                <span class="Num-li">
                                    8
                                </span>
                                <span class="color-black">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Voitures
                                </span>
                            </li>
                            <li>
                                <span class="Num-li">
                                    2
                                </span>
                                <span class="color-black">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Agences
                                </span>
                            </li>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const element = document.getElementById('statistic-element');
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    element.classList.add('css-0'); // Add your animation class
                    observer.unobserve(element);
                }
            });
        }, {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        });

        observer.observe(element);
    });
</script>