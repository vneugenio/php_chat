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
                    <div class="message_details">
                        <span class="name">Bolts: </span>
                        <span class="message">Hello World!</span>
                        <span class="timestamp">12:30am</span>
                    </div>
                </div>
                <form action="index.php" method="post">
                    <input placeholder="Enter your name"
                            type="text" name="name">

                    <textarea name="enter_message"
                              placeholder="Enter Your Message"></textarea>

                    <button>Submit</button>
                </form>
            </div>
        </div>
    </body>
</html>
