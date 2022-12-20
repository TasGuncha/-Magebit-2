<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magebit - Test 2021</title>
</head>
<body>
    <table>
        <tr>
            <th>Nr.p.k</th>
            <th>Email</th>
            <th>Date</th>
        </tr>
        <?php
            $conn = mysqli_connect("localhost","root","","magebit_test");

            $sql = "SELECT * FROM subscribings";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<td>" . $row['id'] . "</td><td>" . $row['email'] . "</td><td>" . $row['date'] . "</td></tr>";
                }
                echo "</table>";
            }
        ?>
    </table>
    <form method="post" action="../index.php?op=logout">
        <button type="submit">Logout</button>
    </form>
</body>
</html>