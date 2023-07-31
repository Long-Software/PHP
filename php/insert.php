<?php
    @include('builder.php');
    if(isset($_POST['button_save'])) {
        $vaccination_card = $_POST["vaccination_card"];
        $phone_number = $_POST["phone_number"];
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $id_card = $_POST["id_card"];

        $hostname = 'localhost';
        $username = 'root';
        $password = 'vaccination';
        $database = 'year2';

        $q = new Query;
        $conn = mysqli_connect($hostname, $username, $password, $database);
        if($conn) {
            $query = mysqli_query($conn, $q->insert('staffs', $vaccination_card.','.$phone_number.','.$first_name.','.$last_name.','.$id_card));
            if ($query) {
                echo "Query Sucessfull";
            } else {
                echo "Query Fail";
            }
            
        } else {
            echo "Fail to Connect";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert a Staff</title>
</head>

<body>
    <h1>Insert a Staff</h1>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        <table>
            <tr>
                <td>Vaccination Card</td>
                <td><input type="text" name="vaccination_card" /></td>
            </tr>
            <tr>
                <td>Phone Number</td>
                <td><input type="text" name="phone_number" /></td>
            </tr>
            <tr>
                <td>First Name</td>
                <td><input type="text" name="first_name" /></td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td><input type="text" name="last_name" /></td>
            </tr>
            <tr>
                <td>ID Card</td>
                <td><input type="text" name="id_card" /></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="save_button" /></td>
            </tr>
        </table>
    </form>
</body>

</html>