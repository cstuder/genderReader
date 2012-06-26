<?php
/**
 * Dump all names as text
 * 
 * By default dumps all names, optionally specify with
 * a CLI switch:
 * 
 *  f fu m mu u
 *  
 * I.e.: php textDump.php fu
 * (Will dump all possible female names, including unisex names) 	
 * 
 * @author christian studer <cstuder@existenz.ch>
 * @license Simplified BSD License
 */

// Initialisation
require dirname(__FILE__) . '/../genderReader.php';
$switch = GenderReader::ALL;

// CLI arguments
if(isset($argv[1])) {
	$switch = strtolower($argv[1]);
}

// Fetch the names
$g = new GenderReader();
$names = $g->getNames($switch);

// Output 
foreach($names as $name) {
	echo "{$name}\n";
}
