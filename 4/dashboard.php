<?php include("assets/includes/header.php"); ?>

  <fieldset>
    <table>
    <tr>
      <th>STUDENT NAME</th><th>COURSE NUMBER</th><th>VIEW</th><th>DELETE</th>
    </tr>

    <form>
    <?php
    require ('assets/db/mysqli_connect.php');
    $r = @mysqli_query($con, $fetchSurveys);
    $rowNum = 0;
    if($r){
      while($row = mysqli_fetch_array($r, MYSQLI_BOTH)){
        $rowClass=($rowNum%2==0) ? "even" : "odd";
        echo"<tr class= $rowClass>
          <th></th><th></th><th></th><th><input type=\"checkbox\" name=\"serveyToDelete\" value=\"\"/></th>";
      }
    } else {
?>
      <tr class=<?php echo ($rowNum%2==0) ? "even" : "odd" ?>>
      <th>Error pulling surveys.</th>
<?php
    }
  echo "</tr>
      </form>
      </tr>
    </table>
  </fieldset>";

  include("assets/includes/footer.php");
?>
