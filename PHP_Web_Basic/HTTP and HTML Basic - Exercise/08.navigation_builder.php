<form>
    <input type="text" name="name"><br>
    <input type="text" name="age"><br>
    <input type="radio" name="gender" value="male"> Male <br>
    <input type="radio" name="gender" value="female"> Female <br>
    <input type="submit" name="submit">
    <br>
</form>


<?php
    if (isset($_GET['name']) && isset($_GET['age'])
            && isset($_GET['gender'])) {
        $form = $_GET;
        $num = strval($form['name']);
        echo $num . $form['age'];
        //echo "My name is $form[name]. I am $form[age] years old. I am $form[gender].";
    }
