<?php
/**
 * Created by PhpStorm.
 * User: adrie
 * Date: 13/11/2018
 * Time: 10:28
 */

namespace App\Controller;

use App\Entity\Ano;
use App\Entity\Apresentacao;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class NesefController extends AbstractController
{

    /**
     * @\Symfony\Component\Routing\Annotation\Route("/")
     */
    public function homepage(EntityManagerInterface $em){
        #return new Response('first try');

        $repository = $em->getRepository(Apresentacao::class);
        $apresentacao = $repository->find(1);

        $anorep = $em->getRepository(Ano::class);


//        $cRepo = $em->getRepository('KaleLocationBundle:Country');
//        $countries = $cRepo->findBy(array(), array('name'=>'asc'));

        $anos = $anorep->findBy(array(), array('ano'=>'desc'));
        
//        dump();

        return $this->render('nesef.html.twig', [ 'apresentacao' => $apresentacao,
            'anos' => $anos, ]);
    }

}