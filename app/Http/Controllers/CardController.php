<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardController extends Controller
{
    public function index(){
        $itemInfo = [
            ['image' => 'bakpao.jpg', 'name' => 'Salted Egg Steamed Bun', 'desc' => 'Steam buns with salted egg filling', 'status' => 'Very Like', 'rating' => '8'],
            ['image' => 'cheesecake.jpg', 'name' => 'Cheesecake', 'desc' => 'Cake with a soft textured cheese base', 'status' => 'Like', 'rating' => '7.8'],
            ['image' => 'fruit.jpg', 'name' => 'Fruits', 'desc' => 'Just fruit..', 'status' => 'Very Like', 'rating' => '8.9'],
            ['image' => 'ice cream.jpg', 'name' => 'Ice Cream', 'desc' => 'Dairy products that are frozen and mixed with flavors and sweeteners', 'status' => 'So Much Like', 'rating' => '9.5'],
            ['image' => 'pho.jpg', 'name' => 'Beef Pho', 'desc' => 'Noodle soup with beef broth, vegetables and sliced ​​beef', 'status' => 'So Much Like', 'rating' => '9.8'],
            ['image' => 'siomay.jpg', 'name' => 'Dimsum Shumai', 'desc' => 'Dimsum of steamed pork or shrimp wrapped in wonton skin', 'status' => 'Like', 'rating' => '7']
        ];
        return view('home', compact('itemInfo'));
    }

    public function detail($name){
        $itemInfo = [
            ['image' => 'bakpao.jpg', 'name' => 'Salted Egg Steamed Bun', 'desc' => 'Steam buns with salted egg filling', 'status' => 'Very Like', 'rating' => '8'],
            ['image' => 'cheesecake.jpg', 'name' => 'Cheesecake', 'desc' => 'Cake with a soft textured cheese base', 'status' => 'Like', 'rating' => '7.8'],
            ['image' => 'fruit.jpg', 'name' => 'Fruits', 'desc' => 'Just fruit..', 'status' => 'Very Like', 'rating' => '8.9'],
            ['image' => 'ice cream.jpg', 'name' => 'Ice Cream', 'desc' => 'Dairy products that are frozen and mixed with flavors and sweeteners', 'status' => 'So Much Like', 'rating' => '9.5'],
            ['image' => 'pho.jpg', 'name' => 'Beef Pho', 'desc' => 'Noodle soup with beef broth, vegetables and sliced ​​beef', 'status' => 'So Much Like', 'rating' => '9.8'],
            ['image' => 'siomay.jpg', 'name' => 'Dimsum Shumai', 'desc' => 'Dimsum of steamed pork or shrimp wrapped in wonton skin', 'status' => 'Like', 'rating' => '7']
        ];

        $chosen = [];

        foreach($itemInfo as $item){
            if($item['name'] == $name){
                $chosen = $item;
            }
        }

        return view('detail', compact('chosen'));
    }
}
