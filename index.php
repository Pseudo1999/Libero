<?php
include_once('connection.php');
$con = connection();

if(isset($_POST['submit']))
    {

         $YESNO = $_POST['yesno'];
         $postcode = $_POST['postcode'];
         $username = $_POST['username'];
         $number = $_POST['number'];

         $sql = "INSERT INTO `answers` (`post_code`, `yes/no`, `email`, `mobile_number`) VALUES ('$postcode','$YESNO','$username','$number')";

        $con->query($sql) or die($con->error);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Pannel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="header">
            <span class="logo"><img src="assets/logo.PNG"></span>
            <span class="libero"><img src="assets/libero.png"></span>

                <div class="links">
                    <ul>
                        <li><a href="#">HOME</a></li>
                        <li class="news"><a href="#">NEWS</a></li>
                        <li class="events"><a href="#">EVENTS</a></li>
                        <li class="world"><a href="#">WORLD</a></li>
                    </ul>
                </div>
            <span class="search"><img src="assets/search.png"></span>
    </div>
    
    <div class="container">
            <div class="leftcontent">
            <span class="how"><h2>How do you feel about recycling?</h2></span>

            <span class="postcode"><h2>Postcode:</h2></span>
            <form method="post">
                <div class="code">
                    <input type="username" name="postcode"  class="inputfield" >
                </div>
            

            <span class="should"><h2>Should the government start enforcing garbage<br>
            separation and recycling schemes across your area? </h2></span>
            
            <div class="buttons2">
                <button><input type="radio"  name="yesno" value="yes">Yes</button>
                <button><input type="radio"  name="yesno" value="no" >No</button>
            </div>

            <div class="email">
                <span><h2>E-mail Address:</h2></span>
                <input class="inputfield" type="email" name="username" >
                <span><h2>Mobile Number:</h2></span>
                <input class="inputfield" type="username" name="number" >
                </div>
     
                <div class="submits">
                    <button type="submit" name="submit" value="submit"><h2>Submit</h2></button>
                </div>
            


            </form>

    </div>
   
    <div class="horizontal">
                <hr>
            </div>

    <div class="rightcontent">
            <span class="phasellus"><h2>Phasellus augue <br> sapien</h2></span>
            <div class="blueline">
            
                <img class="firstpic" src="assets/1b.jpeg" alt="">
                <div class="middlecontent">
                    <h2>Vestibulum sit amet<br>tempor orci</h2>
                    <button type="submit">Read more>></button>
                </div>
            </div>
            <div class="augue">
                <h2>Phasellus augue sapien, <br>aliquam sit amet mauris</h2>
            </div>

            <div class="blueline2">
                <img src="assets/1c.jpeg" alt="">
                <div class="middlecontent2">
                    <h2>Vestibulum sit amet<br>tempor orci</h2>
                    <button type="submit">Read more>></button>
                </div>
            </div>

            <div class="augue">
                <h2>Phasellus augue sapien, <br>aliquam sit amet mauris</h2>
            </div>

                <div class="bar">
                    <hr>
                </div>

                <div class="lowercontent">
                        <div class="firstlist">
                                <h4>Rutrum</h4>
                                    <div class="underline">
                                        <hr>
                                    </div>
                                <span class="words">
                                    <h5>Fermentum <br> Nerque <br> Consequat</h5>
                                </span>
                        </div>

                        <div class="secondlist">
                                <h4>Malesuada</h4>
                                     <div class="underline">
                                        <hr>
                                    </div>
                                <span class="words">
                                    <h5>Tellus <br> Condimentum <br> Consectetur </h5>
                                </span>
                        </div>

                        <div class="thirdlist">
                                <h4>Pellentensque</h4>
                                    <div class="underline">
                                            <hr>
                                    </div>
                                <span class="words">
                                    <h5>Habitant <br> Morbie <br> Tiristique</h5>
                                </span>
                        </div>

                        <div class="fourthlist">
                                <h4>Quisque</h4>
                                    <div class="underline">
                                        <hr>
                                    </div>
                                <span class="words">
                                    <h5>Pharetra <br> Volutpat <br> Tristique </h5>
                                </span>
                        </div>
                            <div class="circles">
                                <div class="circle"><h2 id="phasellus">Phasellus</h2></div>
                                <div class="circle"><h2 id="phasellus" >Augue</h2></div>
                                <div class="circle"><h2 id="phasellus" >Sapien</h2></div>
                            </div>

                </div>
    </div>

    <script>
        
    </script>
</body>
</html>