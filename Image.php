<?php

imagecreatefrompng('500-506.png');
echo hash_file('md5', '500-506.png')."<br>";

imagecreatefrompng('389-385.png'); 	
echo hash_file('md5', '389-385.png')."<br>";

imagecreatefrompng('makeup.png');
echo hash_file('md5', 'makeup.png')."<br>";


