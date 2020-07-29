<?php
/**
 * Created by PhpStorm.
 * User: Rafael
 * Date: 29/07/2020
 * Time: 16:46
 */

namespace Source\App;


use Source\Core\Controller;

/**
 * Web Controller
 * @package Source\App
 */
class Web extends Controller
{
	/**
	 * Web constructor.
	 */
	public function __construct()
	{
		parent::__construct(__DIR__ . "/../../themes/". CONF_VIEW_THEME ."/");
	}
	
	/**
	 * SITE HOME
	 */
	public function home(): void
	{
		echo "<h1>Home</h1>";
	}
	
	/**
	 * SITE NAV ERROR
	 * @param array $data
	 */
	public function error(array $data): void
	{
		echo "<h1>Error</h1>";
		var_dump($data);
	}
}