<?php include 'header.php';?>

<div id="quotePage">

<!-- Figure out Forms! -->
<form action="/submit.php">
    <p>Get a Free Quote!</p>
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name" required><br><br>

  <label for="email">Email:</label><br>
  <input type="email" id="email" name="email" required><br><br>

  <label for="address">Address:</label><br>
  <input type="text" id="address" name="address" required><br><br>

  <label for="number">Phone Number:</label><br>
  <input type="text" id="number" name="number" required><br><br>

  <button type="submit">Submit</button>
</form>

</div>

<?php include 'footer.php';?>