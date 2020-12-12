
var button_1 = document.getElementById("button_1");

//This function is asking for gpio.php, receiving datas and updating the index.php pictures
function change_status() {
var data = 0;
//send the pic number to gpio.php for changes
//this is the http request
var request = new XMLHttpRequest();
request.open( "GET" , "gpio.php?pin=0", true);
request.send(null);
    //receiving informations
request.onreadystatechange = function() {
    if (request.readyState == 4 && request.status == 200) {
            data = request.responseText;
            //update the index pic
            if ( !(data.localeCompare("0")) ){
                    button_1.value = "OFF";
            }
            else if ( !(data.localeCompare("1")) ) {
                    button_1.value = "ON";
            }
            else if ( !(data.localeCompare("fail"))) {
                    alert ("Response text value fail.");
                    return ("fail");			
            }
            else {
                    alert ("Something went really wrong!" );
                    return ("fail"); 
            }
    }
    //test if fail
    else if (request.readyState == 4 && request.status == 500) {
            alert ("server error");
            return ("fail");
    }
    //else 
    else if (request.readyState == 4 && request.status != 200 && request.status != 500 ) { 
            alert ("Something went wrong!");
            return ("fail"); }
    }	
	
return 0;
}