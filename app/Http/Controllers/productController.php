<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    private $products = [
        [
            "id" => "1",
            "title" => "IPhone 9",
            "description" => "An apple mobile which which An displa",
            "price" => "549",
            "images" => "imag1.png"
        ], [
            "id" => "2",
            "title" => "IPhone X",
            "description" => "SIM-Free,  A12 Bionic chip with mobile",
            "price" => "254",
            "images" => "imag2.png"
        ],
        [
            "id" => "3",
            "title" => "Vodafone",
            "description" => " 6.5-inch Super Retina HD An mobile apple",
            "price" => "200",
            "images" => "imag3.png"
        ],
        [
            "id" => "4",
            "title" => "Orange",
            "description" => "super Retina HD displa HD displa box box",
            "price" => "1000",
            "images" => "imag4.png"
        ],[
            "id" => "5",
            "title" => "Fruit nuts",
            "description" => "original fauji cereal muesli 250gm box pack",
            "price" => "637",
            "images" => "imag5.png"
        ], [
            "id" => "6",
            "title" => "Skin Beauty",
            "description" => "Product name: rorec collagen hyaluronic",
            "price" => "3247",
            "images" => "imag6.png"
        ],
        [
            "id" => "7",
            "title" => "Eau De Perfume",
            "description" => "Genuine  Al-Rehab spray perfume from ",
            "price" => "4562",
            "images" => "imag7.png"
        ],
        [
            "id" => "8",
            "title" => "Laptop 4",
            "description" => "super Retina HD displa HD displa displa",
            "price" => "921",
            "images" => "imag8.png"
        ]
    ];

    function getAllProject()
    {
        return view('products', ["products" => $this->products]);
    }
    function aboutPage()
    {
        return view('about');
    }
    function contactPage()
    {
        return view('contact');
    }
    function landingPage()
    {
        return view('landing');
    }
    function getProjectDetailse($id)
    {

        foreach ($this->products as $key => $value) {
            if ($value["id"] == $id) {
                return view("details",["productId"=>$value]);
            }
        }
        return  abort(404);
    }
}


// private $products = [
//     [
//         "id" => "1",
//         "title" => "iPhone 9",
//         "description" => "An apple mobile which is nothing like apple",
//         "price" => "549",
//         "images" => "https://i.dummyjson.com/data/products/1/1.jpg"
//     ], [
//         "id" => "2",
//         "title" => "iPhone X",
//         "description" => "SIM-Free, Model A19211 6.5-inch Super Retina HD display with OLED technology A12 Bionic chip with",
//         "price" => "254",
//         "images" => "https://i.dummyjson.com/data/products/2/1.jpg"
//     ],
//     [
//         "id" => "3",
//         "title" => "vodavone",
//         "description" => " 6.5-inch Super Retina HD display ",
//         "price" => "200",
//         "images" => "https://i.dummyjson.com/data/products/4/1.jpg"
//     ],
//     [
//         "id" => "4",
//         "title" => "orange",
//         "description" => "super Retina HD display ",
//         "price" => "1000",
//         "images" => "https://i.dummyjson.com/data/products/5/1.jpg"
//     ]
// ];