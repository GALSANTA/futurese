<?php 
/**
 * Classe ControllerController
 *
 *Esta classe é a classe que gerencia as ações do site
 *
 *
 *@package Controller
 *
 *@author Fernando Gabriel M. da Silva <fernando99gabriel@gmail.com>
 */

class ControllerController extends Controller{

	

	public function index()
	{
		
		$dados =  array();

		$this->loadTemplate('home',$dados);

	}

	public function pros()
	{
		
		$dados =  array();

		$this->loadTemplate('pros',$dados);

	}

	public function contras()
	{
		
		$dados =  array();

		$this->loadTemplate('contras',$dados);

	}

	public function contato()
	{
		
		$dados =  array();

		$this->loadTemplate('contato',$dados);

	}
	public function sobre()
	{
		
		$dados =  array();

		$this->loadTemplate('sobre',$dados);

	}

}