<?php include "header.php"; 
?>
<html>

    <body>
        <main>
        <header> New Blog Post</header>
              <form action="/submit-post.php" method="POST">
                    Title: <input type="text" name="title"><br>
                    Date: <input type="text" name="date"><br>
                    Author: <input type="text" name="author"><br>
                    Content:<textarea rows="4" cols="50">
                    Write your blog post here
                            </textarea>
                            
                    <input type="submit" value="Submit">
                  </form> 
    </main>
    </body>
    <?php include "footer.php";
    ?>
    </div>
 <html>