<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TestDefaultController extends AbstractController
{
    public function index()
    {
        return new JsonResponse('SYMFONY FRAMEWORK IS RUNNING FOR DEFAULT HOME');
    }
}
