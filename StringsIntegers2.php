<!doctype html>
<html>
<head>
    <title>
        Variables and Constants
    </title>
</head>
<body>

        <!-- Sample 1 -->

        <h1>Define Strings </h1>

        <?php

            $name = "John, Smith";
            $message = "This is a String Message";
            echo $name . ":" . $message . "<br>";
            echo "$name: $message";

        ?>    

        <h1>Define Integers</h1>

        <?php

            $version = 7.5;
            echo "PHP Version is $version";

        ?>    

          <!-- Sample 2 -->

          <h1>Combine String and Integer</h1>
         
         <?php
            echo "$name: $message<br>";
            echo "name: $name<br>";
            $language = "PHP";
            echo $language . "version is" . $version;

        ?>


</body>
</html>

