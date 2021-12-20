<!DOCTYPE html>
<html lang="en">
<head>
<title>Prisoner Search</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>


ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 10%;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}


li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

li a.active {
  background-color: #04AA6D;
  color: white;
}

li a:hover:not(.active) {
  background-color: #555;
  color: white;
}



button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}

</style>
</head>
<body>

<ul>
  <li><a class="active" href="Lawyerdash.php">Dashboard</a></li>
  <li><a href="Sprisoner.php">View Prisoner</a></li>
  <li><a href="#contact">Case File Download</a></li>
  <li><a href="Meeting.php">Schedule Meeting</a></li>
  <li><a href="#about">Message</a></li>
  <li><a href="#about">My Supervise</a></li>
  <li><a href="#about">Request for Prisoner assign</a></li>
</ul>

</body>
</html>
