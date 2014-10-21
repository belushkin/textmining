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

        // Create directory for importing data from Novus
        $path = __DIR__ . '/../../../../../data/cache/' . date("Ymd");
        $directory = new Directory($path);
        if (!$directory->exists()) {
            $directory->create();
        }

        // Execute external programs for getting data
        //exec(__DIR__ . '/../../../../../data/r/novus.r');
        if (file_exists("$path/novus.csv")) {
            unlink("$path/novus.csv");
        }
        exec("cat $path/*.csv > $path/novus.csv");

        // Read combined csv file and put line by line to the database
        $file = new \SplFileObject($path . "/novus.csv");
        $file->setFlags(\SplFileObject::READ_CSV);
        foreach ($file as $row) {
            if (count($row) < 4) {
                continue;
            }
            list($id, $name, $hryvni, $kopiyki) = $row;
        }

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

