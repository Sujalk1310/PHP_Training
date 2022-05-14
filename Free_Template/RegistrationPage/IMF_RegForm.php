<html>
    <head>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
    <link rel='stylesheet' href='Style.css'>
    </head>
    <body>
    <br/>
    <h1 style="font-weight:bold;font-family: 'Raleway';text-align:center;text-shadow: 1px 1px 1px black;">Register Yourself</h1>
    <br/>
    <form method="post" name = 'f1' action="">
    <table>
            <tr>
                <td>
                    User Name
                </td>
                <td>:</td>
                <td>
                    <input type="text" name="UN" placeholder="New Username" required>
                </td>
            </tr>
            <tr>
                <td>
                    E-mail Id
                </td>
                <td>:</td>
                <td>
                <input type="email" name="EM" placeholder="Your Email Id" required>
                </td>
            </tr>
            <tr>
                <td>
                    Password
                </td>
                <td>:</td>
                <td>
                <input type="password" name="Pass" placeholder="Set Password" required>
                </td>
            </tr>
    </table>
    <br/>
        <h1 style="text-align:center;">
            <input class="Reg" type="submit" value="Register" onclick="validate()">
        </h1>
    </form>
    <?php
        if (isset($_POST['UN']) && isset($_POST['EM']) && isset($_POST['Pass'])){
            $conn = mysqli_connect("localhost", "root","","ims" );
            $q = "SELECT `Username` FROM `user`;";
            $result = $conn->query($q);
            $arr = [];
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()){
                    array_push($arr,$row['Username']);
                }
            }
            if (!in_array($_POST['UN'],$arr)){
                $sql = "INSERT INTO `user`(`Username`, `E-mail`, `Password`) VALUES ('$_POST[UN]','$_POST[EM]','$_POST[Pass]');";
                mysqli_query($conn,$sql);
            }
            else{
                echo "<script>alert('Already Present Username !!');</script>";
                echo "<script>return false;</script>";
            }
        }
    ?>
    </body>
</html>