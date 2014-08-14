<?php

namespace Ttls\PanelBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Class PanelController
 * @package Ttls\PanelBundle\Controller
 * @Route("/adminPanel")
 */
class PanelController extends Controller
{
    /**
     * @Route("/dashboard")
     * @Security("has_role('ROLE_ADMIN')")
     * @Template()
     */
    public function dashboardAction()
    {
        return $this->render(
            'TtlsPanelBundle::index.html.twig',
            array()
        );
    }
}
