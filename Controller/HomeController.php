<?php 
/**
 * Classe HomeController
 *
 *Esta classe é a classe que gerencia as ações na pagina Home
 *
 *
 *@package Controller
 *
 *@author Fernando Gabriel M. da Silva <fernando99gabriel@gmail.com>
 */

class HomeController extends Controller{

	

	public function index()
	{
		
		$dados =  array();

		$this->loadTemplate('home',$dados);

	}

}