<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Localhost</title>
	<link rel="stylesheet" type="text/css" href="colors-fresh.css" media="all">
	<link rel="stylesheet" type="text/css" href="wp-admin.css" media="all">
	<style type="text/css">
	body {
		padding: 10px;
		background-color: #efefef;
	}
	</style>
</head>
<body>
	<h2>Localhost Dashboard!</h2>
	<p>Welcome to localhost. Below is a list of sites/projects, click on one to launch.</p>
	<h3>Links</h3>
	<p><a href="http://wordpress.org/latest.zip" class="button">Latest WordPress</a> <a href="http://codex.wordpress.org/Main_Page" class="button">WordPress Codex</a></p>
	<p><a href="http://drupal.org/project/drupal" class="button">Drupal Download Page</a></p>
	<h3>Tools</h3>
	<p> <a href="phpinfo.php" class="button">phpinfo</a> </p>
	<p> <a href="phpmyadmin" class="button">phpmyadmin</a></p>
	<h3>Projects</h3>
<?php 
// open this directory 
$myDirectory = opendir(".");

// get each entry
while($entryName = readdir($myDirectory)) {
	$dirArray[] = $entryName;
}

echo "<pre>";
print_r(filetype($dirArray[$index]));
echo "</pre>";

// close directory
closedir($myDirectory);

//	count elements in array
$indexCount	= count($dirArray);


// sort 'em
sort($dirArray[]);

//if (filetype($dirArray[$index]) == 'dir') {

// loop through the array of files and print them all
for($index=0; $index < $indexCount; $index++) {
        if (substr("$dirArray[$index]", 0, 1) != "."){ // don't list hidden files
		
        $type = (filetype($dirArray[$index]));

        if ( $type == 'dir'){ 

        print("<a href=\"$dirArray[$index]\" class=\"button\">$dirArray[$index]</a> <a href=\"$dirArray[$index]/wp-admin\" class=\"button\">wp-admin</a><br /><br />");
		}
	}
}


?>


</body>
</html>
