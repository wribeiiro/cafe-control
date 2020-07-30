<?php
/**
 * Created by PhpStorm.
 * User: Rafael
 * Date: 30/07/2020
 * Time: 13:27
 */

namespace Source\Models\Faq;


use Source\Core\Model;

/**
 * Class Question
 * @package Source\Models\Faq
 */
class Question extends Model
{
	/**
	 * Question constructor.
	 */
	public function __construct()
	{
		parent::__construct("faq_questions", ["id"], ["channel_id", "question", "response"]);
	}
	
	/**
	 * @return bool
	 */
	public function save(): bool
	{
	
	}
}