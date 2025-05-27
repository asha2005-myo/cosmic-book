<?php include('db.php'); ?>
<?php include('header.php'); ?>

<div class="container">
  <h1>All Books</h1>
  <div class="books">
    <?php
    $result = $conn->query("SELECT * FROM books");
    while($row = $result->fetch_assoc()) {
      echo "<div class='book'>";
      echo "<img src='assets/images/" . $row['cover_image'] . "' alt='Cover'>";
      echo "<h2>" . $row['title'] . "</h2>";
      echo "<p>" . substr($row['description'], 0, 100) . "...</p>";
      echo "<a href='book.php?id=" . $row['id'] . "'>Read more</a>";
      echo "</div>";
    }
    ?>
  </div>
</div>

<?php include('footer.php'); ?>
