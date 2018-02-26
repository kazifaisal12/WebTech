<?php
$dom = simplexml_load_file("Student.xml");

foreach($dom->student as $h)
	{
		echo "<h4>Course: $h->cname</h4>"."<br>";
		echo "<h4>Name: $h->name</h4>"."<br>";
		echo "<h4>ID: $h->id</h4>"."<br>";
		echo "<h4>CGPA :$h->cgpa</h4>"."<br><br><br>";
		
	}

?>