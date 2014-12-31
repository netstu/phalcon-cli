<?php namespace Danzabar\CLI\Input\Exceptions;

/**
 * Exception class for validation of arguments and options
 *
 * @package CLI
 * @subpackage Exception
 * @author Dan Cox
 */
class RequiredValueMissingException extends \Exception
{

	/**
	 * Argument or Option
	 *
	 * @var string
	 */
	protected $type;

	/**
	 * The expected var name
	 *
	 * @var string
	 */
	protected $key;

	/**
	 * Fire exception
	 *
	 * @return void
	 * @author Dan Cox
	 */
	public function __construct($type, $key, $code = 0, \Exception $previous = NULL)
	{
		$this->type = $type;
		$this->key = $key;

		parent::__construct("This action was expecting an $type for $key", $code, $previous);
	}

	/**
	 * Returns the type
	 *
	 * @return String
	 * @author Dan Cox
	 */
	public function getType()
	{
		return $this->type;
	}

	/**
	 * Returns the key
	 *
	 * @return String
	 * @author Dan Cox
	 */
	public function getKey()
	{
		return $this->key;
	}

} // END class RequiredValueMissingException extends \Exception