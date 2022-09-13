<?php 
    include("connect.php");
    
    $query = $mysqli->prepare("SELECT * FROM contacts");
    $query->execute();
    $array = $query->get_result();
    
    echo'
        <html>
            <head></head>
            <body>
                <center>
                <h1>Contact Me Messages</h1>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Message</th>
                    </tr>
                    <tbody>';

                    while($array_row = $array->fetch_assoc()){
                        $id = $array_row['id'];
                        $full_name = $array_row['full_name'];
                        $email = $array_row['email'];
                        $phone = $array_row['phone'];
                        $message = $array_row['message'];
                        
                        echo '<tr>';
                        echo '<td>' .$id. '</td>';
                        echo '<td>' .$full_name. '</td>';
                        echo '<td>' .$email. '</td>';
                        echo '<td>' .$phone. '</td>';
                        echo '<td>' .$message. '</td>';
                        echo '</tr>';
                    }
                    echo'
                    </tbody>
                </table>
                </center>
            </body>
        </html>
    '
    ?>