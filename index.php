<!DOCTYPE html>
<html>
<body>

<h1>The input formmethod Attribute</h1>

<p>The formmethod attribute defines the HTTP method for sending form-data to the action URL.</p>

<form action="/action_page.php" method="get" target="_blank">
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname"><br><br>
  <label for="lname">Last name:</label>
  <input type="text" id="lname" name="lname"><br><br>
  <input type="submit" value="Submit using GET">
  <input type="submit" formmethod="post" value="Submit using POST">
</form>

</body>
</html>

