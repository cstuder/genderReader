<?php
/**
 * genderReader
 *
 * @author christian studer <cstuder@existenz.ch>
 * @license Simplified BSD License
 */
require_once 'genderReaderConfiguration.php';

class GenderReader {
	/**
	 * Gender constants
	 *
	 * @var string
	 */
	const ALL = 'a';
	const FEMALE = 'f';
	const FEMALE_AND_UNISEX = 'fu';
	const MALE = 'm';
	const MALE_AND_UNISEX = 'mu';
	const UNISEX = 'u';

	/**
	 * Full path to the dictionary file
	 *
	 * @var string
	 */
	protected $dictionaryFile;

	/**
	 * Constructor accepts optional path to the dictionary file
	 *
	 * @param string $dictionaryFile
	 */
	public function __construct($dictionaryFile = NULL) {
		if($dictionaryFile === NULL) {
			$this->dictionaryFile = realpath(dirname(__FILE__) . '/' . GenderReaderConfig::$dictionaryFile);
		} else {
			$this->dictionaryFile = $dictionaryFile;
		}

		if(!is_readable($this->dictionaryFile)) {
			throw new Exception("Dictionary file '{$this->dictionaryFile}' is not readable.");
		}
	}

	/**
	 * Get all names for a specified gender
	 *
	 * @param string $gender
	 * @return array
	 */
	public function getNames($gender = self::ALL) {
		$names = array();

		// Gather all gender prefixes
		$prefixes = array();
		switch($gender) {
			default:
				throw new Exception("Unknown gender: '{$gender}'.");
				break;

			case self::ALL:
				$prefixes = array_merge(GenderReaderConfig::$femaleIDs, GenderReaderConfig::$maleIDs, GenderReaderConfig::$unisexIDs);
				break;

			case self::FEMALE:
				$prefixes = GenderReaderConfig::$femaleIDs;
				break;

			case self::FEMALE_AND_UNISEX:
				$prefixes = array_merge(GenderReaderConfig::$femaleIDs, GenderReaderConfig::$unisexIDs);
				break;

			case self::MALE:
				$prefixes = GenderReaderConfig::$maleIDs;
				break;

			case self::MALE_AND_UNISEX:
				$prefixes = array_merge(GenderReaderConfig::$maleIDs, GenderReaderConfig::$unisexIDs);
				break;
				
			case self::UNISEX:
				$prefixes = GenderReaderConfig::$unisexIDs;
				break;
		}

		// Open file for reading
		$file = fopen($this->dictionaryFile, 'r');
		
		$maxNameLength = GenderReaderConfig::$offsetSort - GenderReaderConfig::$offsetName;
		while($line = fgets($file)) {
			if(in_array(trim(substr($line, GenderReaderConfig::$offsetID, 2)), $prefixes)) {
				$names[] = $this->readName(substr($line, GenderReaderConfig::$offsetName, $maxNameLength));
			}
		}

		return $names;
	}
	
	/**
	 * Clean up name string
	 * 
	 * @param string $name
	 * @return string
	 */
	protected function readName($name) {
		// Replace spacings with spaces
		$name = trim(str_replace(GenderReaderConfig::$spacingCharacters, ' ', $name));
		
		// TODO Handle special characters
		
		return $name;
	}
}