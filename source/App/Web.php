<?php
/**
 * Created by PhpStorm.
 * User: Rafael
 * Date: 29/07/2020
 * Time: 16:46
 */

namespace Source\App;


use Source\Core\Controller;
use Source\Support\Pager;

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
		$head = $this->seo->render(
			CONF_SITE_NAME . " - " . CONF_SITE_TITLE,
			CONF_SITE_DESC,
			url(),
			theme("/assets/imagens/share.jpg")
		);
		
		echo $this->view->render("home", [
			"head" => $head,
			"video" => "lDZGl9Wdc7Y"
		]);
	}
	
	/**
	 * SITE ABOUT
	 */
	public function about(): void
	{
		$head = $this->seo->render(
			"Descubra o ". CONF_SITE_TITLE . " - " . CONF_SITE_DESC,
			CONF_SITE_DESC,
			url("/sobre"),
			theme("/assets/imagens/share.jpg")
		);
		
		echo $this->view->render("about", [
			"head" => $head,
			"video" => "lDZGl9Wdc7Y"
		]);
	}
	
	/**
	 * SITE BLOG
	 * @param array|null $data
	 */
	public function blog(?array $data): void
	{
		$head = $this->seo->render(
			"Blog - ". CONF_SITE_NAME,
			"Confira em nosso blog dicas de como controlar e melhorar suas contas. Vamos toamr um café?",
			url("/blog"),
			theme("/assets/imagens/share.jpg")
		);
		
		$pager = new Pager(url("/blog/page/"));
		$pager->pager(100, 10, ($data['page'] ?? 1));
		
		echo $this->view->render("blog", [
			"head" => $head,
			"paginator" => $pager->render()
		]);
	}
	
	/**
	 * BLOG POST
	 * @param array $data
	 */
	public function blogPost(array $data): void
	{
		$postName = $data['postName'];
		
		$head = $this->seo->render(
			"POST NAME - ". CONF_SITE_NAME,
			"POST HEADLINE",
			url("/blog/{$postName}"),
			theme("BLOG IMAGE")
		);
		
		echo $this->view->render("blog-post", [
			"head" => $head,
			"data" => $this->seo->data()
		]);
	}
	
	/**
	 * SITE LOGIN
	 */
	public function login()
	{
		$head = $this->seo->render(
			"Entrar - " . CONF_SITE_TITLE,
			CONF_SITE_DESC,
			url("/entrar"),
			theme("/assets/imagens/share.jpg")
		);
		
		echo $this->view->render("auth-login", [
			"head" => $head,
		]);
	}
	
	/**
	 * SITE FORGET
	 */
	public function forget(): void
	{
		$head = $this->seo->render(
			"Recuperar Senha - " . CONF_SITE_TITLE,
			CONF_SITE_DESC,
			url("/recuperar"),
			theme("/assets/imagens/share.jpg")
		);
		
		echo $this->view->render("auth-forget", [
			"head" => $head,
		]);
	
	}
	
	/**
	 * SITE REGISTER
	 */
	public function register(): void
	{
		$head = $this->seo->render(
			"Criar Conta - " . CONF_SITE_TITLE,
			CONF_SITE_DESC,
			url("/cadastrar"),
			theme("/assets/imagens/share.jpg")
		);
		
		echo $this->view->render("auth-register", [
			"head" => $head,
		]);
	
	}
	
	/**
	 * SITE OPTIN CONFIRM
	 */
	public function confirm(): void
	{
		$head = $this->seo->render(
			"Confirme seu Cadastro - " . CONF_SITE_TITLE,
			CONF_SITE_DESC,
			url("/confirma"),
			theme("/assets/imagens/share.jpg")
		);
		
		echo $this->view->render("optin-confirm", [
			"head" => $head,
		]);
	}
	
	/**
	 * SITE OPTIN SUCCESS
	 */
	public function success(): void
	{
		$head = $this->seo->render(
			"Bem vindo(a) ao " . CONF_SITE_TITLE,
			CONF_SITE_DESC,
			url("/obrigado"),
			theme("/assets/imagens/share.jpg")
		);
		
		echo $this->view->render("optin-success", [
			"head" => $head,
		]);
	}
	
	/**
	 * SITE TERMS
	 */
	public function terms():void
	{
		$head = $this->seo->render(
		CONF_SITE_NAME . "- Termos de uso",
			CONF_SITE_DESC,
			url("/termos"),
			theme("/assets/imagens/share.jpg")
		);
		
		echo $this->view->render("terms", [
			"head" => $head
		]);
	}
	
	/**
	 * SITE NAV ERROR
	 * @param array $data
	 */
	public function error(array $data): void
	{
		$error = new \stdClass();
		$error->code = $data['errcode'];
		$error->title = "Ooops. Conteúdo indisponível :/";
		$error->message = "Sentimos muito,mas o conteúdo que vc está tentando ecessar não existe, está indisponível no momento ou foi removido :/";
		$error->linkTitle = "Continue navegando!";
		$error->link = url_back();
		
		$head = $this->seo->render(
			"{$error->code} | {$error->title}",
			$error->message,
			url_back("/ops/{$error->code}"),
			url("/assets/imagens/share.jpg"),
			false
		);
		
		echo $this->view->render("error", [
			"head" => $head,
			"error" => $error
		]);
	}
}