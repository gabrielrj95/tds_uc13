<?php
$pass_md5 = md5("asdf@123");
$pass_sha1 = sha1("asdf@123");
echo "pass_md5 ".$pass_md5;
echo "<br>";
echo "pass_sha1 ".$pass_sha1;
echo "<br>";
echo "md5 ".md5("asdf@123");
echo "<br>";
echo "md5 ".md5("asdf@123 ");
echo "<br>";
echo "md5 ".md5("1");
?>