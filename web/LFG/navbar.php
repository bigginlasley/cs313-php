<?php
// There are different ways to put the "active" class on the correct
// nav item. One way is to use JavaScript to find the item after the page
// has loaded, and add the class. Another way is to add a class in to the
// HTML that is generated. This will use the second approach.
// From StackOverflow: http://stackoverflow.com/a/12201089/1932766
// The second argument to pathinfo() strips the path and extension from the file name (PHP >= 5.2)
$file = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
// now $file will contain something like "about" and we can check later
// for this variable and use it to include the "active" class on the appropriate
// link item.
?>


<nav class="navbar navbar-inverse">
    <ul>
        <li><a class="active" href="LFG.php">Home</a></li>
        <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">Search</a>
        <div class="dropdown-content">
        <a href="person_search.php">By Person</a>
        <a href="activity_search.php">By Activity</a></li>
        <li class="floatright"><button class="clicker" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Login</button></li>
        <li class="floatright"><button class="clicker" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button></li>
    </ul>
</nav>