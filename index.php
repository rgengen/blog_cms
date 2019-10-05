<?php include "header.php";
?>
<link rel="stylesheet" type="text/css" href="styles.css" />
<html>
<body>
    <?php
        function getPostTitlesFromDatabase () {
            //todo in module 4
            //get this data from datbase instead of hardcoding it
            $postTitles = array ("Blog Post 1", "Blog Post 2", "Blog Post 3");
            return $postTitles;
        }
        ?>
           <main>
           <ul style="list-style-type:none;">
           <style>
               
                
                a:link, a:visited {
  
  color: black;
  padding: 14px 25px;
  text-align: left;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  color: purple;}

                </style>

                    <?php
                    $postTitles = getPostTitlesFromDatabase ();

                    foreach ($postTitles as $postTitle){
                        echo "<li><a href='post.php?title='". $postTitle . "'>" . $postTitle . "</a></li>";
                    }
                    ?>
                 </ul>
           </main>
    </body>

    <?php include "footer.php";
    ?>

 </html>
