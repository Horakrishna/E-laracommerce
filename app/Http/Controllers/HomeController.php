<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index(){
   	return view('front-end.home.home');
   }

   public function product(){
   	return view('front-end.product.product');
   }

   public function productdetail(){
   	return view('front-end.product.product-details');
   }
   public function cart(){
   	return view('front-end.cart.cart');
   }
   public function checkout(){
   	return view('front-end.checkout.checkout');
   }
   public function login(){
   	return view('front-end.login.login');
   }
}
