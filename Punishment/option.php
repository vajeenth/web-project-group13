<?php
            if(isset($_POST["submit"])){
                $con=new mysqli("localhost","root","","horror_signup");
                
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (isset($_POST["Sin"])) {
                        $sin = $_POST["Sin"];
                       

                        switch ($sin) {
                            case "lie":
                            $id=8;
                            punishment($id);
                            break;

                            case "kill":
                              $id=9;
                              punishment($id);
                              break;

                            case "food":
                              $id=10;
                              punishment($id);
                              break;

                            default:
                              echo "Your favorite color is neither red, blue, nor green!";
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
                $sql="SELECT * from images where id=$id";
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
                                <script>
                            var i = 0;
                            var txt = 'According to the Bible, murder is a serious sin and those who commit murder will be punished. The punishment may be in this life or in the next, but it will be severe.';

                            var speed = 50;

                            function typeWriter() {
                            if (i < txt.length) {
                                document.getElementById('demo').innerHTML += txt.charAt(i);
                                i++;
                                setTimeout(typeWriter, speed);
                            }
                            }
                            </script>
                             ";

                        echo "<br><hr>";
                    }
                }
              }
?>