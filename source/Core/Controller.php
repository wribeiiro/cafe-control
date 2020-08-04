<?php

namespace Source\Core;

use Source\Support\Message;
use Source\Support\Seo;

/**
 * Class Controller
 *
 * @author Rafael Soje <rafaelsoje@gmail.com>
 * @package Source\Core
 */
class Controller
{
	/**
	 * @var View
	 */
	protected $view;
	/**
	 * @var Seo
	 */
	protected $seo;
	
	/**@var message */
	protected $message;
	
	/**
	 * Controller constructor.
	 * @param string|null $pathToViews
	 */
	public function __construct(string $pathToViews = null)
	{
		$this->view = new View($pathToViews);
		$this->seo = new Seo();
		$this->message = new Message();
	}
}