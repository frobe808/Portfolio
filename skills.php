<?php 
    require_once('lib/controller.php');
    $data = Controller::dispatch('skills');
?>
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
                <h3>Skills</h3>
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
                    <h2>Hier vind je mijn skills</h2>

                    <div id="skillsPlaceholder"></div>
            </main>

            <footer>
                &copy; Nick Haex - <span id="year"></span>
            </footer>
 
        </div>
    </body>
    <script>
        document.getElementById('year').innerHTML = new Date().getFullYear();
        
        data = <?php echo json_encode($data); ?>;
        
        //sorteer de data
        var categories = {};

        for(var i = 0; i < data.length; i++){
            var item = data[i];

            // creeer de category als hij nog niet bestaat, anders kan je er ook niet aan toevoegen en krijg je een undefined
            if(!categories.hasOwnProperty(item.category)){
                categories[item.category] = [];
            }
            categories[item.category].push(item.name);
        }

        // maak de html

        var lijst = '';

        for(var cat in categories){
            var skills = categories[cat];
            lijst += '<h3>'+ cat +'</h3>';
            lijst += '<ul>';

            for(var i = 0; i < skills.length;i++){
                lijst += `<li>${skills[i]}</li>`;
            }

            lijst += '</ul>';
        }

        document.getElementById('skillsPlaceholder').innerHTML = lijst;

    </script>
</html>