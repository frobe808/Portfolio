<!DOCTYPE html>
<html>
    <head>
        <title>My portfolio</title>
        <link rel="stylesheet" href="styles.css">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
    </head>
    <body>
        <div id="pageContainer">

            <header>
                <h1>Nick Haex</h1>
                <h2>Welcome to my portfolio</h2>
                <h3>Home <?php echo '<p>Hello World</p>'; ?></h3>
            </header>

            <aside>
                <nav>
                    <a href="index.html">Home</a>
                    <a href="skills.html">Skills</a>
                    <a href="portfolio.html">Portfolio</a>
                    <a href="contact.html">Contact</a>  
                </nav>
            </aside>

            <main>
                    <h2>Welcome to my portfolio</h2>

                    <p>
                        Ik ben Nick Haex en ben pas leraar geworden op Wico campus Neerpelt. 
                        Ik kijk enorm uit naar deze nieuwe uitdaging. Want ik leg graag dingen uit en zeg graag andere mensen wat ze moeten doen ;-) 
                    </p>

                    <p>
                        De opleidingen die ik in mijn carriere heb genoten zijn de volgende:
                    </p>

                    <ol>
                        <li>Industriele wetenschappen op TIO (the Wico Predecesor)</li>
                        <li>Informatie en Communicatie technieken op KHLIM</li>
                        <li>Communicatie en Multi-media Design op KHLIM</li>
                        <li>extra opleiding PHP-developer</li>
                    </ol>


                    <p>
                        mijn IT interesses liggen vooral op de vlakken van:
                    </p>
                    <ul>
                        <li>Web-ontwikkeling</li>
                        <li>data-beheer</li>
                        <li>cloud-hosting</li>
                        <li>Media & Design (not that i'm good at that)</li>
                        <li>Technologie in het algemeen </li>
                        <li>en als je deze niet voldoende vind maak ik je nog wel iets anders wijs</li>
                    </ul>

                    <p>
                        Als je dan nog iets wil weten over mijn hobbies:
                    </p>
                    <ul>
                        <li>Lezen</li>
                        <li>Muziek, vinyl-collector</li>
                        <li>ontsnappen uit de drukke wereld</li>
                        <li>Voetbal</li>
                    </ul>

            </main>

            <footer>
                &copy; Nick Haex - <span id="year"></span>
            </footer>
 
        </div>
    </body>
    <script>
        document.getElementById('year').innerHTML = new Date().getFullYear();
    </script>
</html>