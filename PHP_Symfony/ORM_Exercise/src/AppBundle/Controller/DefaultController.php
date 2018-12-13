<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Car;
use AppBundle\Entity\Customer;
use AppBundle\Entity\Part;
use AppBundle\Entity\Sale;
use AppBundle\Entity\Supplier;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="index")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/customer/{id}", name="customer")
     * @param Request $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function singleCustomerAction(Request $request, $id)
    {

        $customer = $this
            ->getDoctrine()
            ->getRepository(Customer::class)
            ->find($id);
        $final = ['count'=>0,'price'=>0];
        foreach($customer->getSales() as $sale) {
            /** @var Sale $sale */
            /** @var Car $carToGet */
            $carToGet = $sale->getCar();
            $car = $this
                ->getDoctrine()
                ->getRepository(Car::class)
                ->find($carToGet->getId());
            /** @var Part $part */
            foreach($car->getParts() as $part) {
                $final['price'] += floatval($part->getPrice());
            }
            $final['count']++;
        }
        return $this->render('customer/singleCustomer.html.twig', [
            'customer' => $customer,
            'final' => $final]);
    }

    /**
     * @Route("/car/{id}/parts", name="single_car_parts")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function testAll(Request $request, $id)
    {

        $car = $this
            ->getDoctrine()
            ->getRepository(Car::class)
            ->find($id);

        return $this->render('cars/cars_parts.html.twig', [
            'car' => $car]);
    }

    /**
     * @Route("/suppliers/", name="suppliers")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function suppliersAll(Request $request)
    {
        $suppliers = $this
            ->getDoctrine()
            ->getRepository(Supplier::class)
            ->findAll();
        $sortedSuppliers = ['Local' => [], 'Importer' => []];

        foreach ($suppliers as $supplier) {
            if ($supplier->getIsImporter()) {
                $sortedSuppliers['Importer'][] = $supplier;
                continue;
            }
            $sortedSuppliers['Local'][] = $supplier;
        }

        return $this->render('suppliers/suppliers.html.twig',
            ['suppliers' => $sortedSuppliers]);
    }

    /**
     * @Route("/cars/", name="cars")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function carsAll(Request $request)
    {
        $makeCars = $this
            ->getDoctrine()
            ->getRepository(Car::class)
            ->getAllByMake();
        $allCars = $this
            ->getDoctrine()
            ->getRepository(Car::class)
            ->findAll();
        return $this->render('cars/carMake.html.twig',
            ['cars' => $makeCars,
                'allCars' => $allCars]);
    }

    /**
     * @Route("/cars/{make}", name="cars_ordered")
     * @param Request $request
     * @param string $make
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function carsOrdered(Request $request, string $make)
    {
        $sortedCars = $this
            ->getDoctrine()
            ->getRepository(Car::class)
            ->getByModelSorted($make);

        return $this->render('cars/sortedCars.html.twig',
            ['cars' => $sortedCars]);
    }

    /**
     * @Route("/customers/all/", name="customers")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function customerAction(Request $request)
    {
        $order = '';
        return $this->render('customer/all.html.twig',
            ['order' => $order]);
    }

    /**
     * @Route("/customers/all/{order}", name="customers_order")
     * @param Request $request
     * @param $order
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function customerOrderAction(Request $request, $order)
    {
        $customers = $this
            ->getDoctrine()
            ->getRepository(Customer::class)
            ->findBy([], ['birthDate' => $order]);
        dump($customers);
        return $this->render('customer/all.html.twig',
            ['customers' => $customers,
                'order' => $order]);
    }
}
