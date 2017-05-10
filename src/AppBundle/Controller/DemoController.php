<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class DemoController
{
    /**
    * @Route("/demo/{demoName}")
    */
    public function showDemo($demoName)
    {
	return new Response('Hello this sample project..!! Here I Have generated a dynamic String as :'.$demoName); 
    }
}

?>
