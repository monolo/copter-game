<?php
namespace Jet\CopterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Symfony\Component\HttpFoundation\Response;

class EntradaController extends Controller{
	/**
	 *@Route("/index")
	 */
	 public function indexAction(){
	 	return $this->render('JetCopterBundle:Entrada:index.html.twig');
	 }
}
