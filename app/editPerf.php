<?php

require './vendor/autoload.php';

use Application\DBConnection\MySQLConnection;

$db = new MySQLConnection();

include('includes/noHeader.php')


?>
<div class="container">

    <main class="main">

        <div style="text-align: center;">
            <form action="editPerf.php" method="post">
                
            </form>
        </div>

    </main>
</div>

<?php include('includes/footer.php') ?>