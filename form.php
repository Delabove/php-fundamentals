
<?php

//1. has form been submitted

if(isset($_POST['searchterm']))
    echo htmlspecialchars($_POST['searchterm'], ENT_QUOTES);
    ?>

<h1>Registration form</h1>
<form
    action=""
    method="post">

    Userame: <input type="text" name="name"> <br><br>
    Passwsord: <input type="password" name="password"><br><br>
    Gender:
        <input type="radio" name="gender" value="f">Female
        <input type="radio" name="gender" value="m">Male
        <input type="radio" name="gender" value="o">Other <br><br>
    Favorite Color:
    <select name="color" id="">
        <option value="">Please Select</option>
        <option value="#f00">Red</option>
        <option value="#0f0">Green</option>
        <option value="#00f">Blue</option>
    </select> <br> <br>
    Languages Spoken:
    <select name="languages[]" multiple size="3">
        <option value="en">English</option>
        <option value="fr">French</option>
        <option value="it">Italian</option>
    </select> <br> <br>
    Comments: <textarea name="comments" id="" cols="4" rows="5"></textarea><br><br>
    <input type="checkbox" name="tc" value="ok">
    I accept the T&amp;C <br><br>
    <input type="submit" value="SUBMIT">

</form>

