<php?
First Name: <input type="text" name="name" value="<?php echo $name;?>">

Last Nme: <input type="text" name="last name" value="<?php echo $last name;?>">



Subject: <textarea name="subject" rows="5" cols="40"><?php echo $sub;?></textarea>

Gender:
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="female") echo "checked";?>
value="female">Female
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="male") echo "checked";?>
value="male">Male
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="other") echo "checked";?>
value="other">Other
<php?>