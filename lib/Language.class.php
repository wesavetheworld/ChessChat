<?php

class Language {
	
	/**
	 * abbreviation for this language
	 * as used by request headers etc.
	 * @var 	string
	 */
	protected $abbr;
	
	/**
	 * name of language in this language
	 * @var 	string
	 */
	protected $name;
	
	/**
	 * all languages known by this system
	 * @var 	array
	 */
	protected static $languages;
	
	/**
	 * all language variables of this language
	 * @var 	array
	 */
	protected $langVars;
	
	/**
	 * global language variables are the same in all
	 * languages
	 * @var 	array
	 */
	protected static $globalLangVars;
	
	/**
	 * require the needed language files
	 * @param 	string 	$abbr
	 */
	public function __construct($abbr) {
		
		// set $this->languages
		require_once(ROOT_DIR.'lang/languages.inc.php');
		
		// does the requested language exist?
		if (array_key_exists($abbr, self::$languages)) {
			$this->abbr = $abbr;
		} else {
			// default to english if language unknown
			$this->abbr = 'en';
		}
		
		$this->name = self::$languages[$abbr]['name'];
		
		require_once(ROOT_DIR.'lang/global.lang.php');
		require_once(ROOT_DIR.'lang/'.self::$languages[$this->abbr]['file'].'.lang.php');
	}
	
	/**
	 * return the language variable in this language
	 * see alias lang($langVar) for use in templates
	 * @param 	string 	$langVar
	 */
	public function getLanguageItem($langVar) {
		// search in global vars first
		if (array_key_exists($langVar,self::$globalLangVars)) {
			return self::$globalLangVars[$langVar];
		}
		// then search in language specific vars
		if (array_key_exists($langVar,$this->langVars)) {
			return $this->langVars[$langVar];
		}
		// nothing found -> let's print the langVar instead
		return $langVar;
	}
	
	/**
	 * Returns an array containing the names of all known
	 * languages in their respective languages
	 */
	public function getLanguageNames() {
		$languageNames = array();
		foreach(self::$languages as $lang) {
			$languageNames[] = $lang['name'];
		}
		return $languageNames;
	}
}