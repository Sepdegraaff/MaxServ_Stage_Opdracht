<!doctype html>

<!--
    Author:             Sep de Graaff
    Date:               5-7-2023

    Description:       Main pagina
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
        <!--  Main section  -->
        <main>
            <?php
                //Require php file to use the variables
                require 'Includes/variables.php';

            ?>
            <!--Section wrapper to wrap the two rows-->
            <section id="section-wrapper">
                <!--Short code echoing the 2 variables filled with HTML-->
                <?php
                    echo $row_1;

                    echo $row_2;
                ?>
            </section>
        </main>
    </body>
</html>
