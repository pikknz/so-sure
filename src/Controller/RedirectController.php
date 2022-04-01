<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RedirectController extends AbstractController
{
    #[Route('/redirect', name: 'app_redirect')]
    public function index(): Response
    {
        if ($this->isGranted('ROLE_USER'))
        {
            return $this->redirectToRoute('app_profile');
        }

        if ($this->isGranted('ROLE_ADMIN'))
        {
            return $this->redirectToRoute('app_admin');
        }

        if ($this->isGranted('ROLE_SUPER_ADMIN'))
        {
            return $this->redirectToRoute('app_restricted');
        }
        return $this->redirectToRoute('app_login');
    }
}
