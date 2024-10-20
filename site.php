<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
/*   // PDO
  // define PDO  tell about the database file
  $pdo = new Sqlite3('sqlite:jukebox.sqlite');

  // write SQL to select 10 tracks
  $statement = $pdo->query("
  SELECT * FROM tracks
  LIMIT 10
  ");

  // run the SQL
  $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
 */
  ?>

  <?php
    
    $i = 0;
    while($i < 10) {
      echo "Hello World! <br>";
      $i++;
    }
  ?>

  <?php
    // SQLite3
    // define SQLite3  tell about the database file
    $sqlite = new Sqlite3('jukebox.sqlite');

    // write SQL to select 10 tracks
    $statement = $sqlite->query("
    SELECT * FROM tracks
    LIMIT 10
    ");

    // run the SQL
    $rows = [];
    while ($row = $statement->fetchArray(SQLITE3_ASSOC)) {
      $rows[] = $row;
    }
  ?>

  <!-- create ol with list of albums -->

  <table>
    <thead>
      <tr>
        <th>Name</th>
        <th>Composer</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($rows as $row) : ?>
        <tr>
          <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['composer']; ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  
</body>
</html>
