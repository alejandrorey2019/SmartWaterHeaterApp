<!DOCTYPE html>
<!--Alejandro Reyes -->

<html>
    <head>
        <meta charset="utf-8" />
        <title>Smart Water Heater Project</title>
    </head>
 
    <body style="background-color: white;">
        <h1>Smart Water Heater</h1>
        <br>
        <?php        
        //this php script generate the first page in function of the file
        system("gpio mode 0 out");
        exec ("gpio read 0 ", $status );


        if ($status[0] == "0" ) {
            echo ("<input type = 'button' id='button_1' value = 'OFF' name = 'offButton' onclick ='change_status();' />");
        }
        else {
            echo ("<input type = 'button' id='button_1' value = 'ON' name = 'onButton' onclick ='change_status();' />");
        }	 
        ?>
        <!-- javascript -->
        <script src="script.js"></script>
    </body>
</html>