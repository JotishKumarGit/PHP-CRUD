<?php
include ('Database.php'); ?>

<a href="index.php">Home</a>

<table border="1px" cellpadding="10px" cellspacing="0px">
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Age</th>
        <th colspan="2">Actions</th>
    </tr>

    <?php
    $ins = "SELECT * FROM student";
    $data = mysqli_query($con, $ins);
    // we have to check rows are present or not in database (condition)
    $result = mysqli_num_rows($data);
    if ($result){
        while ($row = mysqli_fetch_array($data)) {
            ?>

            <tr>
                <td><?php echo $row['firstname']; ?></td>
                <td><?php echo $row['lastname']; ?></td>
                <td><?php echo $row['age']; ?></td>
                <td><a href="Update.php?id=<?php echo $row['id']; ?>">Edit</a></td>
                <td><a onclick="return confirm('Are you sure, you want to delete?')" href="Delete.php?id=<?php echo $row['id']?>">Delete</a></td>

            </tr>
            <?php
        }
    } else {
        ?>
        <tr>
            <td>Record not found</td>
        </tr>
        <?php
    }

    ?>
</table>