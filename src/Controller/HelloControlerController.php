<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

final class HelloControlerController extends AbstractController
{
    #[Route('/hello/controler', name: 'app_hello_controler', methods: ['GET'])]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Metodo Get',
            
        ]);
    }

    #[Route('/amongus', name: 'hello_app', methods: ['POST'])]
    public function posth(Request $request): JsonResponse {
        $nome = $request->request->all()['nome'];
        return $this->json([
            'message' => "Metodo $nome",
            
        ]);
    }

    #[Route('/data', name: 'birthday', methods: ['POST'])]
    public function birthday(Request $request): JsonResponse {
        $year = $request->request->all()['year'];
        $age_cal = date("Y")-$year;

        if($age_cal >= 18){
            return $this->json([
            'message' => "Você é maior de idade",
            
        ]);
        }else{
            return $this->json([
                'message' => "Você é menor de idade",
                
            ]);
        }
    }

    
}
