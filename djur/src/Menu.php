<?php
    require_once("./src/common.php");

    class Menu {
        function __construct() {
        }

        
        function render() {
            echo "<div>";

            echo "<ul class = \"navigation\">";
            echo "<li><a href=\"#\">Räv</a></li>";
            echo "<li><a href=\"#\">Älg</a></li>";
            echo "<li><a href=\"#\">Hund</a></li>";
            echo "<li><a href=\"#\">Katt</a></li>";
            echo "</ul>";

            echo "</div>";
        }
        
    }
?>