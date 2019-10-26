<?php 
/**
 * Classe NotFoundController
 *
 *Esta classe é a classe que gerencia as ações na pagina NotFound
 *
 *
 *@package Controller
 *
 *@author Fernando Gabriel M. da Silva <fernando99gabriel@gmail.com>
 */

class NotFoundController extends Controller{

	

	public function index()
	{
		
		$dados =  array();

		$this->loadTemplate('notfound',$dados);

	}

}