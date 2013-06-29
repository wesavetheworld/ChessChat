<?php

/**
 * Represents a Game
 * @author Philipp Miller
 */
class Game {
	
	/**
	 * Unique game id
	 * @var integer
	 */
	protected $gameId = 0;
	
	/**
	 * This hash will be used in URLs for non-public games
	 * (compare YouTube or PastBin URLs)
	 * @var string
	 */
	protected $gameHash = '';
	
	/**
	 * Timestamp when the game was created
	 * @var integer
	 */
	protected $timestamp = 0;
	
	/**
	 * Player one's id
	 * @var integer
	 */
	protected $whitePlayerId = 0;
	
	/**
	 * Player two's id
	 * @var integer
	 */
	protected $blackPlayerId = 0;
	
	/**
	 * Player one
	 * @var Player
	 */
	protected $whitePlayer = null;
	
	/**
	 * Player two
	 * @var Player
	 */
	protected $blackPlayer = null;
	
	/**
	 * Chessboard
	 * @see chessboard.tpl.php for an example
	 * @var array<array>
	 */
	protected $board = array();
	
	/**
	 * Chessboard represented as a string for easy transmission and storage
	 * Conventions:
	 * - 3 characters per piece. (3*32 = 96 total)
	 * - first character: piece type, capital for white
	 * - second character: file (column)
	 *		+ capital for king means no castling yet
	 * 		+ capital for pawn means he just did a double step, which is
	 * 		  relevant for en passant (update it after next move!)
	 * - third character: rank (row)
	 * - file 'x' for dead white pieces, file 'y' for dead black pieces
	 * - first chesspiece indicates who's turn it is (redundant with status)
	 * @var string
	 */
	protected $boardString = '';
	
	/**
	 * String representation of the board at the start of a game.
	 * @var string
	 */
	const DEFAULT_BOARD_STRING =
	'Ra1Nb1Bc1Qd1Kd1Bc1Nb1Ra1Pa2Pb2Pc2Pd2Pe2Pf2Pg2Ph2pa7pb7pc7pd7pe7pf7pg7ph7ra8nb8bc8qd8kd8bc8nb8ra8';
	
	/**
	 * Game status as a short integer value
	 * 
	 * Status constants can be combined to indicate
	 * who's turn/checkmate/stalemate/... it is.
	 * Examples:
	 * $this->status = Game::STATUS_CHECKMATE & Game::STATUS_WHITES_TURN;
	 * 	indicates, that black has won by checkmate.
	 * $this->status = Game::STATUS_DRAW & Game::STATUS_BLACKS_TURN;
	 * 	indicates, that black has offered a draw which was accepted by white.
	 * 
	 * 0 through 5 for ongoing games
	 * 6 through 9 for won games
	 * 10 through 15 for draws
	 * @see Game constants
	 * @var integer
	 */
	protected $status = 0;
	
	/**
	 * Game status for white player's turn
	 * @var integer 0b0
	 */
	const STATUS_WHITES_TURN = 0;
	
	/**
	 * Game status for black player's turn
	 * @var integer 0b1
	 */
	const STATUS_BLACKS_TURN = 1;
	
	/**
	 * Game status for check
	 * @var integer 0b10
	 */
	const STATUS_CHECK = 2;
	
	/**
	 * Game status for a draw offering that
	 * has not yet been accepted.
	 * @var integer 0b100
	 */
	const STATUS_DRAW_OFFERED = 4;
	
	/**
	 * Game status for last player's resignation
	 * @var integer 0b110
	 */
	const STATUS_RESIGNED = 6;
	
	/**
	 * Game status for laste player's checkmate
	 * @var integer 0b1000
	 */
	const STATUS_CHECKMATE = 8;
	
	/**
	 * Game status for last player's accepted draw
	 * @var integer 0b1010
	 */
	const STATUS_DRAW = 10;
	
	/**
	 * Game status for last player's achieved stalemate
	 * @var integer 0b1100
	 */
	const STATUS_STALEMATE = 12;
	
	/**
	 * Game status for draw by threefold repetition rule
	 * @var integer 0b1110
	 */
	const STATUS_THREEFOLD_REPETITION = 14;
	
	/**
	 * Game status for draw by fifty moves rule
	 * @var integer 0b1111
	 */
	const STATUS_FIFTY_MOVES = 15;
	
	/**
	 * Every Game needs a GameController as a parent
	 * @var GameController
	 */
	protected $gameController = null;
	
	/**
	 * Initializes a Game with a
	 * GameController as a parent.
	 * @param 	GameController 	$gameController
	 */
	public function __construct(GameController $gameController) {
		$this->gameController = $gameController;
		// TODO
	}
	
	/**
	 * TODO
	 */
	public static function create() {
		// TODO
		// return new self(self::DEFAULT_BOARD_STRING);
	}
	
	/**
	 * Creates a hopefully unique hash for game identification.
	 * It containes digits and case sensitive letters
	 */
	protected function generateHash() {
		// put anything useful in the gamehash.
		// it doesn't have to be cryptographically safe,
		// just don't stumble over it.
		$hashString = $this->id
					+ $this->timestamp
					+ Core::$user->getName()
					+ $this->otherPlayer->getName()
					+ GAME_SALT;
		// generate hash:
		// generate md5, base64 it,
		// remove bad characters, then take only first few characters
		$this->hash = substr(
						str_replace(
							array('/','+','='), '',
							base64_encode(
								md5($hashString))),
						0, GAME_HASH_LENGTH);
	}
	
	/**
	 * Checks if provided string may be a valid game hash
	 * (Does not check if it exists!)
	 * @param 	string 		$string
	 * @return 	integer 	1, 0 or FALSE
	 */
	public static function hashPatternMatch($string) {
		return preg_match(self::getHashPattern(), $string);
	}
	
	/**
	 * Returns this game's hash.
	 * @return 	string
	 */
	public function getHash() {
		return $this->hash;
	}
	
	/**
	 * Returns the regex pattern for a valid
	 * game hash string.
	 * Unfortunately this can not be implemented as a const.
	 * @return 	string
	 */
	public static function getHashPattern() {
		return "#^[[:alnum:]]{".GAME_HASH_LENGTH."}$#i";
	}
	
	/**
	 * Checks and executes a given Move.
	 * @param Move $move
	 */
	public function move(Move &$move) {
		$this->validateMove($move);
		if ($move->valid) {
			// TODO execute/save move, update status
		}
	}
	
	/**
	 * Checks wether the given move is allowed
	 * for this player on this chessboard.
	 * Sets $move's flag and reason appropriately.
	 * @param 	Move 	$move;
	 */
	public function validateMove(Move &$move) {
		//TODO larissa
		$move->valid = true;
		// $move->valid = false;
		// $move->invalidReason = 'You Suck';
	}
	public static function boardFromString($boardStr) {}
	public static function boardToString($board) {}
	
	/**
	 * Returns this games current status.
	 * @see 	Game constants
	 * @return 	integer
	 */
	public function getStatus() {
		return $this->status;
	}
	
	/**
	 * Wether or not this game is over.
	 * @return 	boolean
	 */
	public function isOver() {
		return $this->status >= self::STATUS_RESIGNED;
	}
	
	/**
	 * Wether or not this game has ended in
	 * a draw. False if still running or
	 * one player has won.
	 * @return 	boolean
	 */
	public function isDraw() {
		return $this->status >= self::STATUS_DRAW;
	}
	
	/**
	 * Returns a games winner or
	 * false if it's a draw or
	 * null if it's not over yet.
	 * @return 	User|boolean
	 */
	public function getWinner() {
		if ($this->isOver()) {
			if ($this->draw()) {
				return false;
			} else {
				return ((boolean) $this->status % 2) ? $this->whitePlayer : $this->blackPlayer;
			}
		}
		return null;
	}
	
}
