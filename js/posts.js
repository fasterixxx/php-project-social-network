/**
 * Created by Paja on 2.7.2015.
 */

/*function process(){
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("posts").innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","update_posts.php?email="+email,true);
    xmlhttp.send();

    setTimeout(process(),5000);

}*/

function process(){
    document.getElementById("posts").innerHTML = email;
}
