<?php

/**
 * Loader class
 */

namespace WebSiteToYou\System\Library;

use WebSiteToYou\System\Library\Action as Action;

class Loader
{
	protected $registry;

	/**
	 * __construct
	 *
	 * @param    object $registry
	 */
	public function __construct(\WebSiteToYou\System\Library\Registry $registry)
	{
		$this->registry = $registry;
	}

	/**
	 * __get
	 *
	 * https://www.php.net/manual/en/language.oop5.overloading.php#object.get
	 *
	 * @param    string $key
	 *
	 * @return   object
	 */
	public function __get(string $key): object
	{
		return $this->registry->get($key);
	}

	/**
	 * __set
	 *
	 * https://www.php.net/manual/en/language.oop5.overloading.php#object.set
	 *
	 * @param    string $key
	 * @param    object $value
	 *
	 * @return    object
	 */
	public function __set(string $key, object $value): void
	{
		$this->registry->set($key, $value);
	}

	/**
	 * Controller
	 *
	 * https://wiki.php.net/rfc/variadics
	 *
	 * @param    string $route
	 * @param    array $data
	 *
	 * @return    mixed
	 */
	public function controller(string $route, mixed ...$args): mixed
	{




		// Sanitize the call
		$route = preg_replace('/[^a-zA-Z0-9_|\/]/', '', $route);

		// Keep the original trigger
		$trigger = $route;

		// Trigger the pre events
		$result = $this->event->trigger('controller/' . $trigger . '/before', [&$route, &$args]);

		// Make sure it's only the last event that returns an output if required.
		if ($result != null && !$result instanceof \Exception) {
			$output = $result;
		} else {
			$action = new \WebSiteToYou\System\Library\Action($route);
			$output = $action->execute($this->registry, $args);
		}

		// Trigger the post events
		$result = $this->event->trigger('controller/' . $trigger . '/after', [&$route, &$args, &$output]);

		if ($result && !$result instanceof \Exception) {
			$output = $result;
		}

		if (!$output instanceof \Exception) {
			return $output;
		}

		return '';
	}


	public function view(string $route, array $data = [], string $code = ''): string
	{
		// Sanitize the call
		$route = preg_replace('/[^a-zA-Z0-9_\/]/', '', $route);
		//print_r($route);
		//print_r($data);

		// Keep the original trigger
		$trigger = $route;

		// Trigger the pre events
		$this->event->trigger('view/' . $trigger . '/before', [&$route, &$data, &$code]);

		//return 'das';
		// Make sure its only the last event that returns an output if required.
		$output = $this->template->render($route, $data, $code);

		// Trigger the post events
		$this->event->trigger('view/' . $trigger . '/after', [&$route, &$data, &$output]);

		return $output;
	}

	/**
	 * View
	 *
	 * Loads the template file and generates the html code.
	 *
	 * @param    string $route
	 * @param    array $data
	 *
	 * @return   string
	 */
	public function view2(string $route, array $data = [], string $code = ''): string
	{
		// Sanitize the call
		$route = preg_replace('/[^a-zA-Z0-9_\/]/', '', $route);


		// Keep the original trigger
		$trigger = $route;

		// Trigger the pre events
		$this->event->trigger('view/' . $trigger . '/before', [&$route, &$data, &$code]);

		// Make sure its only the last event that returns an output if required.
		$output = $this->template->render($route, $data, $code);

		// Trigger the post events
		$this->event->trigger('view/' . $trigger . '/after', [&$route, &$data, &$output]);

		return $output;
	}
}
