                <html>
                    <head>
                        <title>
                            show
                        </title>
                        
                    </head>
                    <body>
                        <?php
                        $servername="localhost";
                        $username="root";
                        $password="";
                        $dbname="demoz";

                        $conn=mysqli_connect($servername,$username,$password,$dbname);
                        if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                        }
                        $sql="select * from formtable";
                        
                    $result= mysqli_query($conn,$sql);
                    
                        
                if (mysqli_num_rows($result) > 0) {
                
                    
                    echo "<table border=2px >
                    <tr>    
                    <th>name</th>
                    <th>email</th>
                    <th>gender</th>
                    </tr>";
                    while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$row['name']."</td>";
                    echo "<td>".$row['emailid']."</td>";
                    echo "<td>".$row['gend']."</td>";
                    echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "0 results";
                }
                 mysqli_close($conn);
                    ?>

                    


                    
                    </body>
                    </html>