<div class="layer-9">
    <div class="slide-rider">
        <div class="reg-h2">
            <h2>Avis :</h2>
        </div>
        <div class="responsive">
            <div class="slick-slider">
                <?php
                $reviews = [
                    [
                        "name" => "Zoe Blanche",
                        "stars" => 5,
                        "comment" => "super auto école. directrices très arrangeantes et monitrices adorables. efficacité des heures de conduite absolue. je recommence mille fois",
                        "link" => "https://maps.app.goo.gl/YqbM6Ck4HW2ecJ1S8",
                        "img" => "assets/img/reviews/review-1.webp"
                    ],
                    [
                        "name" => "Naeh Cherry",
                        "stars" => 5,
                        "comment" => "J'ai passé mon permis en janvier 2022 avec eux.. je suis ravie de cette auto-école, j'ai trouvé tout le monde à l'écoute et sympathique. Arrangeant pour les horaires de conduite. Je recommande sans hésité cette auto-école!",
                        "link" => "https://maps.app.goo.gl/r1xrdyZjyr6Xbwtr7",
                        "img" => "assets/img/reviews/review-2.webp"
                    ],
                    [
                        "name" => "Cécilia Poirier",
                        "stars" => 5,
                        "comment" => "Excellente auto-école, Sandra super monitrice, ils ont su me redonner confiance en moi après tant d’échecs dans une autre auto-école... Grâce à eux j’ai mon permis.",
                        "link" => "https://maps.app.goo.gl/yn9wRfq3acqgAZZ77",
                        "img" => "assets/img/reviews/review-3.webp"
                    ],
                    [
                        "name" => "Virginie TAFNA",
                        "stars" => 5,
                        "comment" => "Je suis très heureuse de m'être inscrite dans cet établissement. Madame Bénat et son équipe sont très accueillantes, pédagogues et compréhensives. Je viens d'avoir mon permis de conduire du premier coup. Merci à vous toutes pour cette expérience inoubliable et le début de ma nouvelle Vie. Je recommande à 200%  💫",
                        "link" => "https://maps.app.goo.gl/5Z6dQ3d6b2W5v4JN6",
                        "img" => "assets/img/reviews/review-4.webp"
                    ],
                    [
                        "name" => "Kelly Sudre",
                        "stars" => 5,
                        "comment" => "Super auto école ! Et ma monitrice était vraiment super et directrice très accueillante encore merci beaucoup !",
                        "link" => "https://maps.app.goo.gl/X2ycqSFQeaGLQdP66",
                        "img" => "assets/img/reviews/review-6.webp"
                    ],
                    [
                        "name" => "Joey Armengol",
                        "stars" => 5,
                        "comment" => "Un pur bonheur, auto-école à l’écoute, accueil agréable, permis en poche (merci à l’équipe)",
                        "link" => "https://maps.app.goo.gl/ZTF8DhTb4TW8UwZV8",
                        "img" => "assets/img/reviews/review-7.webp"
                    ],
                    [
                        "name" => "Matt Herr",
                        "stars" => 5,
                        "comment" => "Super expérience, auto école au top !",
                        "link" => "https://maps.app.goo.gl/vDn1tKog82fevP79A",
                        "img" => "assets/img/reviews/review-8.webp"
                    ]
                ];

                foreach ($reviews as $review) {
                    echo '<div class="slick-slide">';
                    echo '<div class="card-review">';
                    echo '<div class="top-rev">';
                    echo '<div class="left-rev">';
                    echo '<div class="ll-rev">';
                    echo '<img src="' . htmlspecialchars($review['img']) . '" alt="Image de ' . htmlspecialchars($review['name']) . '" width="46" height="46">';
                    echo '</div>';
                    echo '<div class="lr-rev">';
                    echo '<div class="lr-txt">' . htmlspecialchars($review['name']) . '</div>';
                    echo '<div class="lr-stars">';
                    for ($i = 0; $i < $review['stars']; $i++) {
                        echo '<span class="stars">★</span>';
                    }
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '<div class="bottom-rev">';
                    echo '<p class="width-me">' . htmlspecialchars($review['comment']) . '</p>';
                    echo '</div>';
                    echo '<div class="button-nouv">';
                    echo '<a href="' . htmlspecialchars($review['link']) . '" target="_blank" rel="noopener noreferrer">';
                    echo '<button class="button-mutton">VOIR L\'AVIS</button>';
                    echo '</a>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
    $(document).ready(function() {
        $('.slick-slider').slick({
            dots: true,
            infinite: true,
            speed: 500,
            slidesToShow: 3,
            slidesToScroll: 3,
            responsive: [{
                    breakpoint: 1150,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 800,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });

        $(window).on('scroll', function() {
            $('.layer-9').each(function() {
                var elementTop = $(this).offset().top;
                var windowBottom = $(window).scrollTop() + $(window).height();
                if (elementTop < windowBottom) {
                    $(this).addClass('css-0');
                }
            });
        }).trigger('scroll');
    });
</script>