<!Doctype php>
<?php>
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <div id= "parent"> 
    <div id="header"> 
    <head>
    <title>
    Post 1
    </title>
    <h1>Blog CMS</h1>
    <nav>
            <a href="index.php">Home</a> |
            <a href="post-submission.php">New Post</a> |
      </nav> 
    </head>
    </div>
  
    <body>
        <main>
        <header> New Blog Post</header>
              <form action="/action_page.php" method="get">
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
    <div id="footer">
    <footer>
        <p>Created by Rosa Genetti for IDESN 3535 2019</p>
    </footer> 
    </div>
    </div>
 <?