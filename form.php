
<?php

//1. has form been submitted

if(isset($_POST['searchterm']))
//    if 'searchterm' form post is set
//echo $_POST['searchterm']; if we echoed this post, it would be insecure. must escape
//htmlspecialchars and ENT_QUOTES escapes special characters to avoid cross site scripting

    echo htmlspecialchars($_POST['searchterm'], ENT_QUOTES);


    ?>


<form
    action=""
    method="post">

    <input type="text" name="searchterm">
    <input type="submit" value="SEARCH">

</form>

