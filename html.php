

<html>
   <head></head>
   <body>
      <ul>
         <?php for($i=1;$i<=count($_GET);$i++){ ?>
         <li>Menu Item <?php echo $_GET['name' . $i]; ?></li>
         <?php } ?>
      </ul>
      <p>
        <!-- <?php

        var_dump($_GET)
        ?> -->
   </body>
</html>

