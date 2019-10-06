<?php include "header.php"; 
?>
<link rel="stylesheet" type="text/css" href="styles.css" />
<html>
<body>
   
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
                </ul>
                 <?php
                 
        function getPostTitlesFromDatabase () {
            //get all post titles from posts table
            include_once 'db_connect.php';
            $sql = "SELECT title FROM posts;";
            $result = mysqli_query ($conn, $sql);

            //get each result row as an assoc array then add title to $postTitles
            $postTitles = array ();
            while ($row = mysqli_fetch_assoc ($result)){
                array_push ($postTitles, $row ['title']);
            }
            return $postTitles;
        }
           ?>


               </main>
    </body>

    <?php include "footer.php";
    ?>

 </html>
