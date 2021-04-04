
<ul>
    <?php
    include 'db_connection.php';

    $conn = OpenCon();

    $sql = 'SELECT * FROM users';
    $result = $conn->query($sql);

    foreach ($result as $row)
    {
        printf(
          '<li><span style="color:%s">%s (%s)</span></li>',
           htmlspecialchars($row['color'], ENT_QUOTES),
            htmlspecialchars($row['name'], ENT_QUOTES),
            htmlspecialchars ($row['gender'], ENT_QUOTES));

    }
    CloseCon($conn);

    ?>
</ul>
