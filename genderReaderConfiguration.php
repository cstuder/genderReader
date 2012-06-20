<?php
/**
 * genderReader configuration
 *
 * Basic configuration for the current version of nam_dict.txt.
 *
 * @author christian studer <cstuder@existenz.ch>
 * @license Simplified BSD License
 */
class GenderReaderConfig {
	public static $dictionary = 'gender.c/nam_dict.txt';

	public static $femaleIDs = array('F', '1F', '?F');
	public static $maleIDs = array('M', '1M', '?M');
	public static $unisexIDs = array('?');
	public static $equivalentIDs = array('=');

	public static $offsetID = 0;
	public static $offsetName = 3;
	public static $offsetSort = 29;

	public static $offsetsCountry = array(
			'GB' => 30,
			'IE' => 31,
			'US' => 32,
			'IT' => 33,
			'MT' => 34,
			'PT' => 35,
			'ES' => 36,
			'FR' => 37,
			'BE' => 38,
			'LU' => 39,
			'NL' => 40,
			'FY' => 41,
			'DE' => 42,
			'AT' => 43,
			'CH' => 44,
			'IS' => 45,
			
			// TODO continue here
				
	);
}