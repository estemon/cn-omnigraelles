<?php $title = 'Activitats';
include('header.php');
?>

  <body>
    <form action="newActivity.php">
      <table>
        <tr>
          <td>
            <p class="newActivityTitle">Title</p>
          </td>
          <td colspan="3">
            <input type="text" name="title"/>
          </td>
        </tr>
        <tr>
          <td>
            <p class="newActivityTitle">Teacher</p>
          </td>
          <td colspan="3">
            <input type="text" name="teacher"/>
          </td>
        </tr>
        <tr>
          <td>
            <p class="newActivityTitle">Description</p>
          </td>
          <td colspan="3">
            <input type="textarea" name="description"/>
          </td>
        </tr>
        <tr>
          <td>
            <p class="newActivityTitle">Ages</p>
          </td>
          <td>
            Min:<input type="text" name="minAge" size="2"/>
          </td>
          <td>
            Opt:<input type="text" name="optAge" size="2"/>
          </td>
          <td>
            Max:<input type="text" name="maxAge" size="2"/>
          </td>
        </tr>
        <tr>
          <td colspan="4"><input type="submit" value="Submit new activity"></td>
        </tr>
      </table>
    </form>
  </body>
</html>