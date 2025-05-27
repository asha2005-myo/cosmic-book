<?php
include('db.php');
include('header.php');
$id = intval($_GET['id']);
$result = $conn->query("SELECT books.*, authors.name AS author_name FROM books JOIN authors ON books.author_id = authors.id WHERE books.id = $id");
$row = $result->fetch_assoc();
?>
<div class="container">
  <div class="book-detail">
    <img src="assets/images/<?php echo $row['cover_image']; ?>" alt="Cover">
    <h1><?php echo $row['title']; ?></h1>
    <h3>By <?php echo $row['author_name']; ?></h3>
    <p><?php echo $row['description']; ?></p>
  </div>
</div>
<?php include('footer.php'); ?>
