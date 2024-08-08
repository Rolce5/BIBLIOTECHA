<?php
//database connection
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'library_management';

//connectinng
$conn = new mysqli($host, $username, $password, $dbname);

//checking
if ($conn->connect_error) {
    die('Connection failed:'. $conn->connect_error);
}

//retriving 
$transaction_id = '1';
$sql = "SELECT*FROM transactions WHERE id = '$transaction_id'";
$result = $conn->query($sql);



//close connection
$conn->close();

/*variable definition
$id = $transaction["id"];
$member_name = $transaction["member_name"];
$book_title = $transaction["book_title"];
$borrow_date = $transaction["borrow_date"];
$return_date = $transaction["return_date"];
$statuss = $transaction["statuss"];*/
?>

<?php
include __DIR__ . '/layouts/header.php';
?>

<!DOCTYPE html>
<html lan="en">
    <head>
        <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <title>Transaction Details</title>
        <link rel="stylesheet" href="../BIBLIOTECHA/public/assets/css/style.css"> 
    </head>
   
    <body>
        <div class="container" style="margin: 100px;">
            <h1 class="sed">Transaction Details</h1>
           <?php if ($result->num_rows > 0) : ?>
    <?php $transaction = $result->fetch_assoc();?>
   

            <table>
                <tr>
                    <th>Transaction ID</th>
                    <td><?php echo $transaction['id'];?></td>
                </tr>
                <tr>
                    <th>Member Name</th>
                    <td><?php echo $transaction['member_name'];?></td>
                </tr>
                <tr>
                    <th>Book Title</th>
                    <td><?php echo $transaction['book_title'];?></td>
                </tr>
                <tr>
                    <th>Borrow Date</th>
                    <td><?php echo $transaction['borrow_date'];?></td>
                </tr>
                <tr>
                    <th>Return Date</th>
                    <td><?php echo $transaction['return_date'];?></td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td><?php echo $transaction['statuss'];?></td>
                </tr>
            </table>
            <?php else : ?>
            <?php  echo"No transaction found."; ?>
            <?php endif; ?>
        </div>
    </body>
</html>

<?php
include __DIR__ . '/layouts/footer.php';
?>