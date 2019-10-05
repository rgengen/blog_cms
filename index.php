<?php include "header.php";
?>
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
                <ul>
                    <?php
                    $postTitles = getPostTitlesFromDatabase ();

                    foreach ($postTitles as $postTitle){
                        echo "<li><a href='post.php?title='. $postTitle . "'>" . $postTitle . "</a></li>";
                    }
                    ?>
                 </ul>
           </main>
    </body>

    <?php include "footer.php";
    ?>

 </html>
