<html>
<title>Home page</title>
<head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/mystyle.css" />
    
    
</head>
<style>

</style>

<body>
<?php include 'header.inc.php'; ?>
<div class="container-fluid">

  <div class="row">
    <div class="col" style="background-color:lightgrey;">
    <h1>Project 2</h1><br>
    <p>This is a project for web programming 2</p>
    </div>
  </div>
  <div class="row">
    <div class="col" ><br>
        <h4>About</h4><br>
        <p>Project information</p>
        <a class="btn btn-primary" href="about.php" role="button">View</a>
    </div>
    <div class="col" ><br>
        <h4>Post List</h4><br>
        <p>A list of all the post titles</p>
        <a class="btn btn-primary" href="Part01_PostList.php" role="button">View</a>
    </div>
    <div class="col" ><br>
        <h4>Single Post</h4><br>
        <p>A page with info of a single post from a user</p>
        <a class="btn btn-primary" href="Part02_SinglePost.php?id=20" role="button">View</a>
    </div>
    <div class="col" ><br>
        <h4>Single Image</h4><br>
        <p>Information on one image from a selected post</p>
        <a class="btn btn-primary" href="Part03_SingleImage.php?id=53" role="button">View</a>
    </div>
    <div class="col" ><br>
        <h4>Search</h4><br>
        <p>Filter through posts with a specific word</p>
        <a class="btn btn-primary" href="Part04_Search.php" role="button">View</a>
    </div>
  </div>

</div>


<?php include 'footer.inc.php'; ?>

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="bootstrap/js/bootstrap.bundle.min.js" ></script>
</body>

</html>