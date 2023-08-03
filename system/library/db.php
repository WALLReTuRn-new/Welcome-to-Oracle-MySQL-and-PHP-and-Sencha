<?php

/**
 * DB
 */

namespace WebSiteToYou\System\Library;

class DB
{
	private object $adaptor;

	/**
	 * Constructor
	 *
	 * @param	string	$adaptor
	 * @param	string	$hostname
	 * @param	string	$username
	 * @param	string	$password
	 * @param	string	$database
	 * @param	int		$port
	 *
	 */
	public function __construct(string $adaptor, string $hostname, string $username, string $password, string $database, string $port = '')
	{



		$class = 'WebSiteToYou\System\Library\DB\\' . $adaptor;



		if (class_exists($class)) {
			$this->adaptor = new $class($hostname, $username, $password, $database, $port);
		} else {
			throw new \Exception('Error: Could not load database adaptor ' . $adaptor . '!');
		}
	}

	/**
	 * Last insert id
	 *
	 * Gets the last insert id
	 *
	 * @return	int	returns the id of last insert;
	 */
	public function insert($sql)
	{
		return $this->adaptor->insert($sql);
	}
	public function update($sql)
	{
		return $this->adaptor->delete($sql);
	}
	public function delete($sql)
	{
		return $this->adaptor->delete($sql);
	}
	public function dropTable($sql)
	{
		return $this->adaptor->dropTable($sql);
	}
	public function createTable($sql)
	{
		return $this->adaptor->createTable($sql);
	}
	/**
	 * Query
	 *
	 * @param	string	$sql
	 * 
	 * @return	array
	 */
	public function query(string $sql): bool|object
	{
		return $this->adaptor->query($sql);
	}

	/**
	 * Escape
	 *
	 * @param	string	$value
	 * 
	 * @return	string
	 */
	public function escape(string $value): string
	{
		return $this->adaptor->escape($value);
	}

	/**
	 * Count Affected
	 *
	 * Gets the total number of affected rows from the last query
	 *
	 * @return	int	returns the total number of affected rows.
	 */
	public function countAffected(): int
	{
		return $this->adaptor->countAffected();
	}

	/**
	 * Get Last ID
	 *
	 * Get the last ID gets the primary key that was returned after creating a row in a table.
	 *
	 * @return	int returns last ID
	 */
	public function getLastId($table): int
	{
		return $this->adaptor->getLastId($table);
	}

	/**
	 * Is Connected
	 *
	 * Checks if a DB connection is active.
	 *
	 * @return	bool
	 */
	public function isConnected(): bool
	{
		return $this->adaptor->isConnected();
	}
}
