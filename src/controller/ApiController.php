<?php


namespace App\Controller;


class ApiController
{

    public function getDestinations(){
        return [
            [
                'spot' => 'Bali',
                'position' => [
                    'lat' => '-8.80507876834652',
                    'lng' => '115.11340369779452'
                ]
            ],
            [
                'spot' => 'Gold Coast',
                'position' => [
                    'lat' => '-28.162557',
                    'lng' => '153.55002880000006'
                ]
            ],
            [
                'spot' => 'Oahu North Shore',
                'position' => [
                    'lat' => '21.6648658',
                    'lng' => '-158.05296090000002'
                ]
            ],
        ];
    }

    public function subscribeCustomer($customer)
    {
        //DAO pour inscrire le customer
        return 'OK';
    }

}
