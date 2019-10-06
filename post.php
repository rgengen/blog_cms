<?php include "header.php"; 
?>
  
<html>
    <body>
        <main>
        <?php
        function getPostDetailsFromDatabase (){
            //get post title
            $postTitle = rawurldecode ($_GET["title"]);
            
            //get post that matches post title
            include_once 'db_connect.php';
            $sql= "SELECT * FROM posts WHERE title = '". $postTitle. "'";
            $result = mysqli_query ($conn,$sql);

            //get the first row from the result as an assoc array
            $postDetails = mysqli_fetch_assoc ($result);
                                return $postDetails;
        }
        ?>
       
    </body>
    <?php include "footer.php";
    ?>
    </div>
 </html>