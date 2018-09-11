<?php
    include 'db.php';

    $query = 'SELECT * FROM chat ORDER BY id DESC';
    $result = $connection->query($query);
    $rows = $result->num_rows;
    $data = $result->fetch_all();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="stylesheets/style.css">
        <title>PHP Chat</title>
    </head>
    <body>
        <div id="container">
            <div id="chat_box">
                <div id="chat_data">

                </div>
                <form action="index.php" method="post">
                    <input placeholder="Enter your name"
                            type="text" name="name">

                    <textarea name="message"
                              placeholder="Enter Your Message"></textarea>

                    <button type="submit" name="submit">Submit</button>
                </form>
                <?php
                    $name = $_POST['name'];
                    $message = $_POST['message'];

                    if(isset($name) && strlen($name) > 0) {
                        $query = "INSERT INTO chat (name, message) VALUES
                        ('$name', '$message')";

                        $result = $connection->query($query);
                    }

                    $_POST['name'] = '';
                    $_POST['message'] = '';
                ?>
                <script type="text/javascript" src="scripts/main.js"></script>
            </div>
        </div>
    </body>
</html>
