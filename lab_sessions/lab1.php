<?php

# declaring regular variable
$bio = "Hi` I am miirshe software engineer";
echo $bio;  

# count length of bio variable by using strlen()
echo "\nThe Length letters of your bio : ".strlen($bio);

# word count of bio variable by using str_word_count()
echo "\nThe Length words of your bio : ".str_word_count($bio);

# replace one word in to the another word by using str_replace()
echo "\n".str_replace("miirshe","abdikafi",$bio);

# reversed words by using strrev()
echo "\nThe Reversed Word : ".strrev($bio);

# get word positon by using strpos()
echo "\nWord Position : ".strpos($bio,"m");


?>