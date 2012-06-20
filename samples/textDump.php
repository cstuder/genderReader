<?php
/**
 * Dump all names as text
 * 
 * By default dumps all names, optionally specify with
 * CLI switches:
 * 
 *  -female
 * 	-male
 *  -unisex
 *  
 * I.e.: php textDump.php -female -unisex
 * (Will dump all possible female names, including unisex names) 	
 * 
 * @author christian studer <cstuder@existenz.ch>
 * @license Simplified BSD License
 */

// Initialisation
require dirname(__FILE__) . '/../genderReader.php';

// TODO continue here