<?php
/**
 * Created by PhpStorm.
 * User: Rafael
 * Date: 30/07/2020
 * Time: 13:56
 */

namespace Source\Models;


use Source\Core\Model;

/**
 * Class Category
 * @package Source\Models
 */
class Category extends Model
{
	/**
	 * Category constructor.
	 */
	public function __construct()
	{
		parent::__construct("categories", ["id"], ["title", "id"]);
	}
	
	/**
	 * @param string $uri
	 * @param string $columns
	 * @return Category
	 */
	public function findByUri(string $uri, string $columns = "*"): Category
	{
		$find = $this->find("uri = :uri", "uri={$uri}", $columns);
		return $find->fetch();
	}
	
	/**
	 * @return bool
	 */
	public function save(): bool
	{
	
	}
	
}