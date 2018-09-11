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
                    <?php
                        for($i = 0; $i < $rows; $i++){

                    ?>
                        <div class="message_details">
                            <span class="name">
                                <?php echo $data[$i][1] . ':'; ?>
                            </span>
                            <span class="message">
                                <?php echo $data[$i][2]; ?>
                            </span>
                            <span class="timestamp">
                                <?php echo $data[$i][3]; ?>
                            </span>
                        </div>

                    <?php
                        }
                    ?>
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

                    unset($_POST);
                ?>
            </div>
        </div>
    </body>
</html>
