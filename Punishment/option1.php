<?php
            if(isset($_POST["submit"])){
                $con=new mysqli("localhost","root","","horror_signup");
                
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (isset($_POST["Sin"])) {
                        $sin = $_POST["Sin"];
                       

                        switch ($sin) {
                            case "talk":
                            $id=1;
                            punishment($id);
                            desc($id);
                            break;

                            case "steal":
                              $id=2;
                              punishment($id);
                              desc($id);
                              break;

                            case "lie":
                              $id=3;
                              punishment($id);
                              desc($id);
                              break;

                            case "fight":
                            $id=4;
                            punishment($id);
                            desc($id);
                            break;

                            case "food":
                            $id=5;
                            punishment($id);
                            desc($id);
                            break;

                            default:
                              echo "You have more than one Punishments..";
                          }
                        //echo "<p>You selected: $sin</p>";
                    } else {
                        echo "<p>No Option Selected.</p>";
                    }
                } else {
                    echo "<p>Invalid request method.</p>";
                }
            }


            function punishment($id) {
                $con=new mysqli("localhost","root","","horror_signup");
                $sql="SELECT * from images1 where id=$id";
                $result=$con->query($sql);
                if($result->num_rows>0)
                {
                    while($row=$result->fetch_assoc())
                    {
                        echo "
                                <body style='background:url(evilbg.jpg)
                                no-repeat center;'><center><img src='data:image;base64,{$row["image"]}' alt='img' height='250px' 
                                width='300px' style='padding:10% 10% 0% 10%;'>
                                <br>
                                <p style='color:red;font-family:chiller;font-size:48px;'id='demo'>
                                
                                <button onclick='typeWriter()' style='background-color:red;font-family:chiller;font-size:24px;text-weight:bold;'>Click me to know more</button>
                                <br>
                               </p>
                                </center>
                                </body>
                                
                             ";

                        echo "<br><hr>";
                    }
                }
              }

              function desc($id){
                switch ($id) {
                    case 1:
                    echo "<script>
                    var i = 0;
                    var txt = 'A minor who talks back to their parents or another adult might be disciplined by being sent to their room, having their privileges revoked, or being required to apologize.';

                    var speed = 50;

                    function typeWriter() {
                    if (i < txt.length) {
                        document.getElementById('demo').innerHTML += txt.charAt(i);
                        i++;
                        setTimeout(typeWriter, speed);
                    }
                    }
                    </script>";
                    break;

                    case 2:
                        echo "<script>
                    var i = 0;
                    var txt = 'A minor who steals might be disciplined by being required to return the stolen property, pay restitution to the victim, or apologize.';

                    var speed = 50;

                    function typeWriter() {
                    if (i < txt.length) {
                        document.getElementById('demo').innerHTML += txt.charAt(i);
                        i++;
                        setTimeout(typeWriter, speed);
                    }
                    }
                    </script>";
                      break;

                    case 3 :
                        echo "<script>
                        var i = 0;
                        var txt = 'A minor who lies might be disciplined by being grounded, having their privileges revoked, or being required to apologize.';
    
                        var speed = 50;
    
                        function typeWriter() {
                        if (i < txt.length) {
                            document.getElementById('demo').innerHTML += txt.charAt(i);
                            i++;
                            setTimeout(typeWriter, speed);
                        }
                        }
                        </script>";
                      break;

                    case 4 :
                        echo "<script>
                        var i = 0;
                        var txt = 'A minor who fights might be disciplined by being suspended from school, being sent to detention, or being required to apologize.';
    
                        var speed = 50;
    
                        function typeWriter() {
                        if (i < txt.length) {
                            document.getElementById('demo').innerHTML += txt.charAt(i);
                            i++;
                            setTimeout(typeWriter, speed);
                        }
                        }
                        </script>";
                    break;

                    case 5:
                        echo "<script>
                        var i = 0;
                        var txt = 'A minor who fights might be disciplined by being suspended from school, being sent to detention, or being required to apologize.';
    
                        var speed = 50;
    
                        function typeWriter() {
                        if (i < txt.length) {
                            document.getElementById('demo').innerHTML += txt.charAt(i);
                            i++;
                            setTimeout(typeWriter, speed);
                        }
                        }
                        </script>";
                    break;

                    default:
                      echo "You have more than one Punishments..";
                  }
              } 
?>