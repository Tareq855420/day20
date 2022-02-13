<?php


namespace App\Classes;

class Product
{
    public function getAllProduct()
    {
        return [
            0 =>
                [
                'id' => 1,
                'name' => 'New Product',
                'price' => '4500',
                'description' => 'description',
                'image' => 'ac'
            ],
            1 =>
                [
                    'id' => 2,
                    'name' => 'New T-Shirt',
                    'price' => '500',
                    'description' => 'description',
                    'image' => '2.jpg'
                ],
            2 =>
                [
                    'id' => 3,
                    'name' => 'New Shari',
                    'price' => '10500',
                    'description' => 'description',
                    'image' => '3.jpg'
                ],
        ];
    }
}