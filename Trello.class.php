<?php

/**
* Trello Class [ Trello.class.php ]
*
* @author	Eric Potvin
* @package	PHPClasses
* @link		https://github.com/BookOfZeus/trello.com
*/

/**
* Trello class
*
* Trello Hash / De-Hash
*
* @package PHPClasses
* @subpackage Encryption
*/
class Trello {

	/**
	 * Const for the base hash
	 */
	const BASE_HASH = 7;
	/**
	 * Const for the hash
	 */
	const HASH = 37;

	/**
	 * Available letters
	 *
	 * @var String
	 */
	private static $letters = 'acdegilmnoprstuw';

	/**
	 * hash()
	 * Hash a string (code provided by Trello)
	 *
	 * @param	String	$str	String to hash
	 * @return	Integer
	 */
	public static function hash($str) {
		$len = strlen($str);
		if($len == 0) {
			return FALSE;
		}
		$hash = self::BASE_HASH;
		for($i = 0; $i < $len; $i++) {
			$pos = (int)strpos(self::$letters, $str[$i]);
			$hash = ($hash * 37 + $pos);
		}
		return $hash;
	}

	/**
	 * deHash()
	 * Hash a string (code provided by Trello)
	 *
	 * @param	Integer	$hash	Hashed value of the string
	 */
	public static function deHash(&$hash, &$stack) {
		$len = strlen(self::$letters);
		for ($i = 0; $i < $len; $i++) {
			if(($hash - $i) % 37 === 0) {
				$hash = ($hash - $i) / 37;
				if($hash == 0) {
					break;
				}
				$stack = self::$letters[$i] . $stack;
				self::deHash($hash, $stack);
				break;
			}
		}
	}

}
