<?php

namespace ADMC\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CoreController extends Controller
{
    public function indexAction()
    {
        $antispam = $this->container->get('admc_core.antispam');
        $text = '.............';
        echo var_dump($antispam->isSpam($text));
        
        return $this->render('ADMCCoreBundle:Core:index.html.twig', array(
            'id' => 5
        ));
    }

    
    
}
