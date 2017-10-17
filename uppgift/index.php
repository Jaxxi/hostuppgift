<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.php">
    <link href='https://fonts.google.com/specimen/Tangerine' rel='stylesheet' type='text/css'>

    <meta charset="utf-8">
    <title>Lilium website</title>
  </head>
<body>
    <div class="navbar">
        <ul>
            <li><a class="test" href="index.php">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Scanslations</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Image section</a></li>
            <li><a href="#">GLZine</a></li>
            <li><a href="#">Lesbian recources</a></li>
            <li><a href="#">Links</a></li>
            <li><a href="#">Contact</a></li>

        </ul>
    </div>
    <div class="main-title">
      <h1 id=big-title>Lilium Ent</h1>

    </div>
    <!-- <form action="index.php" method="post"> -->
		<!-- <input type="text" name="title"><br> -->
    <!-- <input type="text" name="message"><br> -->
		<!-- <input type="submit" name="submit"> -->
    <!-- </form> -->

    <?php
    $dbh = new PDO("mysql:host=localhost;dbname=news;charset=utf8" , "root" , "");

    if(isset($_POST['submit'])) {

      $sql = "insert into news(userid, title, content)
              values (1, ' " . $_POST['title'] . "', '" . $_POST['message'] . "')";
              $stmt = $dbh->prepare($sql);
              $stmt->execute();
            }

      $sql = "select * from news";
      $stmt = $dbh->prepare($sql);
      $stmt->execute();

      while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
      {
        echo "<h1> {$row['title']}</h1>";
        echo "<p> {$row['content']} </p>";

      }
    ?>
</body>
</html>
