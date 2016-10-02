<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::any('/', function () {
    $pagetype="index";
    return view('frontend.index')->with(['pagetype'=>$pagetype]);
});

Route::any('/index', function () {
    $pagetype="index";
    return view('frontend.index')->with(['pagetype'=>$pagetype]);
});


Route::any('/register', function () {
    $pagetype="register";
    return view('frontend.register')->with(['pagetype'=>$pagetype]);
});

Route::get('/detail', function () {
    $pagetype="detail";
    return view('frontend.detail')->with(['pagetype'=>$pagetype]);
});

Route::any('/customer-wishlist', function () {
    $pagetype="customer-wishlist";
    return view('frontend.customer_wishlist')->with(['pagetype'=>$pagetype]);
});

Route::any('/customer-orders', function () {
    $pagetype="customer-orders";
    return view('frontend.customer_orders')->with(['pagetype'=>$pagetype]);
});

Route::any('/customer-order', function () {
    $pagetype="customer-order";
    return view('frontend.customer_order')->with(['pagetype'=>$pagetype]);
});

Route::any('/customer-account', function () {
    $pagetype="customer-account";
    return view('frontend.customer_account')->with(['pagetype'=>$pagetype]);
});

Route::any('/contact', function () {
    $pagetype="contact";
    return view('frontend.contact')->with(['pagetype'=>$pagetype]);
});

Route::any('/checkout5', function () {
    $pagetype="checkout5";
    return view('frontend.checkout5')->with(['pagetype'=>$pagetype]);
});

Route::any('/checkout4', function () {
    $pagetype="checkout4";
    return view('frontend.checkout4')->with(['pagetype'=>$pagetype]);
});

Route::any('/checkout3', function () {
    $pagetype="checkout3";
    return view('frontend.checkout3')->with(['pagetype'=>$pagetype]);
});

Route::any('/checkout2', function () {
    $pagetype="checkout2";
    return view('frontend.checkout2')->with(['pagetype'=>$pagetype]);
});

Route::any('/checkout1', function () {
    $pagetype="checkout1";
    return view('frontend.checkout1')->with(['pagetype'=>$pagetype]);
});

Route::any('/category', function () {
    $pagetype="category";
    return view('frontend.category')->with(['pagetype'=>$pagetype]);
});

Route::any('/basket', function () {
    $pagetype="basket";
    return view('frontend.basket')->with(['pagetype'=>$pagetype]);
});

Route::any('/forgotPassword', function () {
    $pagetype="forgotPassword";
    return view('frontend.forgotPassword')->with(['pagetype'=>$pagetype]);
});

Route::any('/forgotPassword2', function () {
    $pagetype="forgotPassword2";
    return view('frontend.forgotPassword2')->with(['pagetype'=>$pagetype]);
});



Route::any('/dash', function () {
    $pagetype="dash";
    return view('backend.dash')->with(['pagetype'=>$pagetype]);
});


Route::any('/orders', function () {
    $pagetype="orders";
    return view('backend.orders')->with(['pagetype'=>$pagetype]);
});

Route::get('/categories_main', function () {
    $pagetype="categories_main";
    return view('backend.categories_main')->with(['pagetype'=>$pagetype]);
});

Route::any('/categories_attr', function () {
    $pagetype="categories_attr";
    return view('backend.categories_attr')->with(['pagetype'=>$pagetype]);
});

Route::any('/categories_prodlist', function () {
    $pagetype="categories_prodlist";
    return view('backend.categories_prodlist')->with(['pagetype'=>$pagetype]);
});

Route::any('/products_add', function () {
    $pagetype="products_add";
    return view('backend.products_add')->with(['pagetype'=>$pagetype]);
});

Route::any('/products_edit', function () {
    $pagetype="products_edit";
    return view('backend.products_edit')->with(['pagetype'=>$pagetype]);
});

Route::any('/products_main', function () {
    $pagetype="products_main";
    return view('backend.products_main')->with(['pagetype'=>$pagetype]);
});

Route::any('/banners_main', function () {
    $pagetype="banners_main";
    return view('backend.banners_main')->with(['pagetype'=>$pagetype]);
});

Route::any('/static_main', function () {
    $pagetype="static_main";
    return view('backend.static_main')->with(['pagetype'=>$pagetype]);
});



