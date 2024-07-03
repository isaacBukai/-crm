<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Customer;
use App\Repository\CustomerRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CustomerController extends AbstractController
{
    #[Route('/customer', name: 'customer_index', methods: ['GET'])]
    public function index(Request $request, CustomerRepository $customerRepository, EntityManagerInterface $entityManager): Response
    {
        $customers = $customerRepository->findAll();

//        $customer = (new Customer())
//            ->setName('87687686')
//            ->setFax('00000000');
//
//        $entityManager->persist($customer);
//        $entityManager->flush();

        return $this->render('customer/index.html.twig', compact('customers'));
    }
}
