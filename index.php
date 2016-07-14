<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" href="css/style.css" rel="stylesheet" media="screen" />
        <title>Evaluate A Doz</title>
        <script src="js/jquery-3.0.0.min.js"></script>
        <script src="js/animatedtablesorter-0.2.2/tsort.min.js"></script>
        <script src="js/jquery-autocomplete-master/src/jquery.autocomplete.min.js"></script>
        <script src="js/jquery-ui-1.12.0/jquery-ui.js"></script>
        <script>
            $(document).ready(
                    function () {
                        $("table.tableSorter").tableSort();
                        $("#tags").autocomplete({
                            source: "ajax.php", minLength: 2
                        });
                    });
        </script>
    </head>

    <body>
        <div id="container">

            <header>
                <a href="http://localhost/EvaluateADoz/index.php"><img src="images/daumen_OCA_dagobert83+qubodup (1).png" alt="Evaluate A Doz" /></a>
                <h2><b>Evaluate A Doz</b></h2>
                <p>Bewerten Sie ihren Dozenten</p>
            </header>

            <nav>
                <ul>
                    <li><a href="#"> nav</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>

            <section id="content">
                <article>
                    <h1>container and content section</h1>                    
                    <h2>article</h2>             
                    <h2> reset first</h2>           
                </article>
            </section>

            <aside>
                <h2>aside</h2>
            </aside>

            <footer>		
                <h2>footer</h2>
            </footer>
            
        </div>
    </body>
</html>
