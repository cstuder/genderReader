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
	public static $spacingCharacters = array('+');

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
			'DK' => 46,
			'NO' => 47,
			'SW' => 48,
			'FI' => 49,
			'EE' => 50,
			'LV' => 51,
			'LT' => 52,
			'PL' => 53,
			'CZ' => 54,
			'SK' => 55,
			'HU' => 56,
			'RO' => 57,
			'BG' => 58,
			'BA' => 59,
			'HR' => 60,
			'XK' => 61,
			'MK' => 62,
			'ME' => 63,
			'SR' => 64,
			'SI' => 65,
			'AL' => 66,
			'GR' => 67,
			'RU' => 68,
			'BY' => 69,
			'MD' => 70,
			'UA' => 71,
			'AM' => 72,
			'AZ' => 73,
			'GE' => 74,
			'KZ' => 75,
			'TR' => 76,
			'SA' => 77,
			'IL' => 78,
			'CN' => 79,
			'IN' => 80,
			'JP' => 81,
			'KR' => 82,
			'VN' => 83,
			'other' => 84
	);
}