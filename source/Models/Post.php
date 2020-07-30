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
 * Class Post
 * @package Source\Models
 */
class Post extends Model
{
	/**
	 * Post constructor.
	 */
	public function __construct()
	{
		parent::__construct("posts", ["id"], ["title", "id", "subtitle", "content"]);
	}
	
	/**
	 * @param null|string $terms
	 * @param null|string $params
	 * @param string $columns
	 * @return Model
	 */
	public function find(?string $terms = null, ?string $params = null, string $columns = "*"): Model
	{
		$terms = "status = :status AND post_at <= NOW()" . ($terms ? " AND {$terms}" : "");
		$params = "status=post".($params ? "&{$params}" : "");
		return parent::find($terms, $params, $columns);
	}
	
	/**
	 * @param string $uri
	 * @param string $columns
	 * @return null|Post
	 */
	public function findByUri(string $uri, string $columns = "*"): ?Post
	{
		$find = $this->find("uri = :uri", "uri={$uri}", $columns);
		return $find->fetch();
	}
	
	/**
	 * @return null|User
	 */
	public function author(): ?User
	{
		if($this->author) {
			return (new User())->findById($this->author);
		}
		return null;
	}
	
	/**
	 * @return null|Category
	 */
	public function category(): ?Category
	{
		if($this->category){
			return (new Category())->findById($this->category);
		}
		return null;
	}
	
	/**
	 * @return bool
	 */
	public function save(): bool
	{
		//Post update
		if(!empty($this->id)){
			$postId = $this->id;
			
			$this->update($this->safe(), "id = :id", "id={$postId}");
			if($this->fail()){
				$this->message->error("Erro ao atualizar, verifique os dados");
				return false;
			}
		}
		
		//Post create
		$this->data = $this->findById($postId)->data();
		return true;
	}
}