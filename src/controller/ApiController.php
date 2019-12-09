<?php


namespace App\Controller;


class ApiController
{

    public function getDestinations(){
        return [
            [
                'spot' => 'Bali',
                'position' => [
                    'lat' => '2.5',
                    'lng' => '45'
                ]
            ],
            [
                'spot' => 'Gold Coast',
                'position' => [
                    'lat' => '2.5',
                    'lng' => '45'
                ]
            ]
        ];
    }

    public function subscribeCustomer($customer)
    {
        //DAO pour inscrire le customer
        return 'OK';
    }

}
