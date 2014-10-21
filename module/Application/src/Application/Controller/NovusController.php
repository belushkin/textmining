<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;
use Application\Model\Directory;

class NovusController extends AbstractActionController
{

    public function indexAction()
    {
        return new ViewModel();
    }

    public function fetchAction()
    {
        $request = $this->getRequest();

        if (!$request instanceof ConsoleRequest) {
            throw new \RuntimeException('You can only use this action from a console!');
        }

        $path = __DIR__ . '/../../../../../data/cache/' . date("Ymd");
        $directory = new Directory($path);
        $directory->create();

//        $objectManager = $this
//            ->getServiceLocator()
//            ->get('Doctrine\ORM\EntityManager');
//
//        $bread = new \Application\Entity\Bread();
//        $bread->setName('Marco Pivetta');
//        $bread->setDate(new \DateTime("now"));
//        $bread->setPrice(2.3);
//        $objectManager->persist($bread);
//        $objectManager->flush();

        return "!";
    }

    public function findAction()
    {
        $request = $this->getRequest();

        if (!$request instanceof ConsoleRequest){
            throw new \RuntimeException('You can only use this action from a console!');
        }

        print_r($request->getParams());
        return "!";
    }

    public function showAction()
    {
        $request = $this->getRequest();

        if (!$request instanceof ConsoleRequest){
            throw new \RuntimeException('You can only use this action from a console!');
        }

        print_r($request->getParams());
        return "!";
    }

    public function deleteAction()
    {
        $request = $this->getRequest();

        if (!$request instanceof ConsoleRequest){
            throw new \RuntimeException('You can only use this action from a console!');
        }

        print_r($request->getParams());
        return "!";
    }


}

