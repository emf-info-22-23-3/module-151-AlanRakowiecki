<!doctype html>
<html>
  <header>
    <link rel="stylesheet" type="text/css" href="stylesheets/main.css" />
</header>
  <body>
    <div id="conteneur">
      <h1>Les équipes de National League</h1>    
      <table border= "1">
      <tr>
        <td>ID</td>
        <td>Club</td>
      </tr>
      <?php
        require('ctrl.php');

        $equipe = getEquipes();

        for($i = 0; $i < count($equipe); $i++) {

          echo "<tr><td>" . $i . "</td>";
          echo "<td>" . $equipe[$i] . "</td></tr>";
          
        };
      ?>
      </table>
    </div>
  </body>
</html>