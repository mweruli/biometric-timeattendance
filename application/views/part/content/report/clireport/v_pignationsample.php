<body>
    <div id="container">
        <h1>Countries</h1>
        <div id="body">
            <?php
//            print_array($results);
            foreach ($results as $data) {
                echo $data['pin_no'] . " - " . $data['client_email'] . "<br>";
            }
            ?>
            <p><?php echo $links; ?></p>
        </div>
        <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
    </div>
</body>