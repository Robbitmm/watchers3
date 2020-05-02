<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>

        <meta name="viewport" content="width=device-width, inicial-scale=1.0">
        <script src="Scripts/Btn.js"></script>

        <link rel="stylesheet" href="Styles/menu.css"/>

        <title>Home - Watchers</title>
    </head>

    <body>
        <header>
            <nav>
                <ul id="Btn" class="Menu Menu_bar close">
                    <li><a href="#">Menu</a></li>
                    <!--<li><a href="#">Categorias</a></li>-->
                    <li><a href="#Filmes">Filmes</a></li>
                    <li><a href="#Series">Séries</a></li>
                </ul>
            </nav>
    
            <img id="BtnMenu" class="btnMenu open" src="Images/Btn_menu.png" onclick="Condition_menu()"/>
            <img id="logo" class="Logo" src="Images/Logo black.png" />
            <img class="search_icon" src="Images/Search.png" onclick="Condition_search()"/>
    
            <input id="search_input" class="search close"/>
        </header>
    </body>
</html>