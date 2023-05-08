<!doctype html>

<!--
    Auteur:             Sep de Graaff
    Aanmaakdatum:       5-7-2023

    Omschrijving:       Main pagina
 -->

<html>
    <head>
        <title>
            MaxServ Stage Opdracht
        </title>
        <!-- Decleratie tekenset -->
        <meta charset="UTF-8">
        <!-- Decleratie viewport -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Link naar css bestand -->
        <link rel="stylesheet" href="Styles/style.css">
    </head>
    <body>
        <main>
            <section id="section-wrapper">
                <div class="row">
                    <div id="courses-box" class="box-wrapper">
                        <h1 class="heading-m">
                            Check out our most popular courses!
                        </h1>
                    </div>
                    <div class="box-wrapper">
                        <h2 class="heading-S">
                            Animation
                        </h2>
                        <p class="body-m">
                            Learn the latest animation
                            techniques to create stunning
                            motion design and captivate
                            your audience.
                        </p>
                    </div>
                    <div class="box-wrapper">
                        <h2 class="heading-S">
                            Design
                        </h2>
                        <p class="body-m">
                            Create beautiful, usable
                            interfaces to help shape the
                            future of how the web looks.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="box-wrapper">
                        <h2 class="heading-S">
                            Photography
                        </h2>
                        <p class="body-m">
                            Explore critical fundamentals like
                            lighting, composition, and focus
                            to capture exceptional photos.
                        </p>
                    </div>
                    <div class="box-wrapper">
                        <h2 class="heading-S">
                            Crypto
                        </h2>
                        <p class="body-m">
                            All you need to know to get
                            started investing in crypto. Go
                            from beginner to advanced with
                            this 54 hour course.
                        </p>
                    </div>
                    <div class="box-wrapper">
                        <h2 class="heading-S">
                            Business
                        </h2>
                        <p class="body-m">
                            A step-by-step playbook to help
                            you start, scale, and sustain your
                            business without outside
                            investment.
                        </p>
                        <?php
                            require 'Includes/variables.php';

                            echo $get_started;
                        ?>
                    </div>
                </div>
            </section>
        </main>
        <footer>

        </footer>
    </body>
</html>
