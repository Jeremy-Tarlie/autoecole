<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto-école BENAT - Le permis en un claquement de doigts</title>
    <meta name="description" content="Auto-école BENAT à Saint-André-de-Cubzac et Pugnac : Passez votre permis avec nos cours de conduite et de code. Inscrivez-vous maintenant !">

    <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" type="text/css" href="assets/css/homePartie1.css">
    <link rel="stylesheet" type="text/css" href="assets/css/homePartie2.css">
    <link rel="stylesheet" type="text/css" href="assets/css/homePartie3.css">
    <link rel="stylesheet" type="text/css" href="assets/css/response.css">
    <link rel="stylesheet" type="text/css" href="assets/css/mentions-legales.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    </link>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    </link>

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body>


    <?php
    function handleScrollScript()
    {
        echo "
    <script>
        function handleScroll(sectionId) {
            const section = document.getElementById(sectionId);
            if (section) {
                section.scrollIntoView({ behavior: 'smooth' });
            }
        }

        function toggleMenuBar() {
            const menuBar = document.getElementById('navbar-menu-h');
            if (menuBar.classList.contains('undisplay')) {
                menuBar.classList.remove('undisplay');
            } else {
                menuBar.classList.add('undisplay');
            }
        }
    </script>
    ";
    }

    handleScrollScript();
    ?>

    <div class="flex flex-col gap-0">
        <nav class="navbar">
            <a href="/">
                <img
                    src="assets/img/logo-nav.svg"
                    alt="iopl"
                    width="180"
                    height="62"
                    class="cursor-pointer" />
            </a>
            <ul class="navbar-menu">
                <?php
                $items = ['ACCUEIL', 'STATISTIQUES', 'SERVICES', 'AGENCES', 'CONTACT'];
                foreach ($items as $index => $item) {
                    $sectionId = strtolower($item);
                    echo "<li class='navbar-item pointer' onclick='handleScroll(\"$sectionId\")'>$item</li>";
                }
                ?>
            </ul>
            <svg
                aria-hidden="true"
                focusable="false"
                data-prefix="fas"
                data-icon="bars"
                onclick="toggleMenuBar()"
                class="svg-inline--fa fa-bars nav-selection"
                role="img"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 448 512">
                <path fill="currentColor" d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"></path>
            </svg>
        </nav>
        <ul id="navbar-menu-h" class="navbar-menu-h undisplay">
            <?php
            $menuItems = [
                ['page' => 'acceuil', 'label' => 'ACCUEIL'],
                ['page' => 'permis', 'label' => 'STATISTIQUES'],
                ['page' => 'code', 'label' => 'SERVICES'],
                ['page' => 'qsn', 'label' => 'AGENCES'],
                ['page' => 'contact', 'label' => 'CONTACT']
            ];

            foreach ($menuItems as $index => $item) {
                $page = $item['page'];
                $label = $item['label'];
                echo "<li class='navbar-item-h'>
                    <div data-page='$page' class='one-styling-nav pointer' onclick='handleScroll(\"$page\")'>
                        $label
                    </div>
                </li>";
            }
            ?>
        </ul>
    </div>