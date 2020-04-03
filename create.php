<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> Netland CP</title>
</head>

<body>
    <a href="index.php">Return</a>
    <?php
    $S = $_GET['type'];
    ?>
    <form action="create_update.php?type=<?php echo $S; ?>" method="post">
        <table>
            <tbody>
                <tr>
                    <td><strong>Title</strong></td>
                    <td><input type="text" name="title"></td>
                </tr>
                <tr>
                    <td><strong>Rating</strong></td>
                    <td><input type="text" name="rating"></td>
                </tr>
                <tr>
                    <td><strong>Country</strong></td>
                    <td><input type="text" name="country"></td>
                </tr>
                <tr>
                    <td><strong>Language</strong></td>
                    <td><input type="text" name="language"></td>
                </tr>
                <tr>
                    <td><strong>Description</strong></td>
                    <td><textarea name="description" cols="80" rows="10"></textarea></td>
                </tr>
            </tbody>
        </table>
        <input type="submit">
    </form>
</body>
</html>