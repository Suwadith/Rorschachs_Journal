/**
 * Created by PhpStorm.
 * User: Yohan Punchihewa
 * Date: 7/30/2016
 * Time: 1:01 AM
 */

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact US!!!</title>
</head>
<body>
    <h1>Contact Us !!</h1>
    <form name = "contactus_form" onsubmit="return validate()" action="connectDB.php" method="post">
        <table>
        <tr>
           <td>Full Name : <input type = "text" name = "name"  size = "30" style = "height:30px; margin-left:29px;" required="true"><br/></td>
        </tr>
        <tr></tr>
        <tr>
            <td>Email Address : <input type = "text" name = "email"  size="30" style = "height:30px">
                <div class="tooltip"> <img src ="http://localhost/web/pages/contImg/information.png" alt="heart img" width="22px" height="22px" align="middle"/>
                    <span class="tooltiptext">Enter address as somebody@mymail.com </span>
                </div>
            </td>
        </tr>
        <tr>
            <td>Would you like to receive email notifications for new movie releases? <input type = "checkbox" id = "email" value = "notify"></td>

        </tr>
        <tr>
            <td>Rate our site : <br/>
            <input type="radio" name = "ratings" value = "rate1">Bad
                <input type="radio" name = "ratings" value = "rate2">Meh
                <input type="radio" name = "ratings" value = "rate3">Average
                <input type="radio" name = "ratings" value = "rate4">Good
                <input type="radio" name = "ratings" value = "rate5">Awesome</td>
        </tr>
        <tr>

        </tr>
        <tr>
            <td> Comment(s) :</td>
        </tr>
        <tr>
            <td><textarea name = "comments" rows="6" style = "height: 200px; width: 360px;resize: none;" required="true"></textarea></td>
        </tr>
        <tr>
            <td><input type = "submit" value = "Submit" style = "margin-left: 200px;"></td>
        </tr>
        </table>
    </form>
</body>
<script type="text/javascript">
    function validate(){
        if (document.getElementById("notify").checked) =
    }
</script>
<style>
a:link, a:visited {
    background-color: #f44336;
        color: white;
        padding: 14px 25px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
    }
    a:hover, a:active {
    background-color: black;
    }
    .tooltip {
    position: relative;
    display: inline-block;
}

    .tooltip .tooltiptext {
    visibility: hidden;
    width: 200px;
        background-color: white;
        color: black;
        text-align: center;
        border-radius: 4px;
        padding: 4px 0;
        position: absolute;
        z-index: 1;
        top: -5px;
        left: 110%;
    }

    .tooltip .tooltiptext::after {
    content: "";
    position: absolute;
    top: 50%;
    right: 100%;
    margin-top: -5px;
        border-width: 4px;
        border-style: solid;
        border-color: transparent transparent transparent transparent;
    }
    .tooltip:hover .tooltiptext {
    visibility: visible;
}
    td {
    padding: 10px;
    }
    h1{
    margin-left:200px;
    }
    body{
    background-color : rgb(255, 255, 255);
        color: #000000;
        font-family: "Source Sans Pro", Arial, sans-serif;
    }
</style>
</html>