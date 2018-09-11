<?php
    include 'db.php';

    $query = 'SELECT * FROM chat ORDER BY id DESC';
    $result = $connection->query($query);
    $rows = $result->num_rows;
    $data = $result->fetch_all();

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
