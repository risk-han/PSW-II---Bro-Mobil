<?php 

//Home
Breadcrumbs::for('home', function ($trail){
    $trail->push('Home', route('home'));
});

//Home -> DaftarMobil
Breadcrumbs::for('mobils.index', function ($trail){
    $trail->parent('home');
    $trail->push('DaftarMobil', route('mobils.index'));
});

//Home -> Contact
Breadcrumbs::for('contact', function ($trail){
    $trail->parent('home');
    $trail->push('Contact', route('contact'));
});

//Home -> Manage Car
Breadcrumbs::for('products', function ($trail){
    $trail->parent('home');
    $trail->push('Manage-Car', route('products.index'));
});

//Home -> DaftarMobil -> DetailMobil
Breadcrumbs::for('mobils.show', function ($trail, $mobil){
    $trail->parent('mobils.index');
    $trail->push('Detail '.$mobil->name, route('mobils.show', $mobil->id));
});

//Home -> Manage Car -> Edit
Breadcrumbs::for('products.edit', function ($trail, $product){
    $trail->parent('products');
    $trail->push('Edit '.$product->name, route('products.edit', $product->id));
});

//Home -> Manage Car -> Show
Breadcrumbs::for('products.show', function ($trail, $product){
    $trail->parent('products');
    $trail->push('Detail '.$product->name, route('products.show', $product->id));
});

//Home -> DaftarMobil -> DetailMobil -> Form pembayaran
Breadcrumbs::for('pembayaran.index', function ($trail){
    $trail->parent('mobils.show');
    $trail->push('Form-Pembayaran', route('pembayaran.index'));
});

Breadcrumbs::for('charts', function ($trail){
    $trail->parent('products');
    $trail->push('Grafik User', route('chart'));
});

Breadcrumbs::for('products.create', function ($trail){
    $trail->parent('products');
    $trail->push('Tambah Mobil', route('products.create'));
});

Breadcrumbs::for('pembayaran.create', function ($trail){
    $trail->parent('mobils.show');
    $trail->push('Form Pembayaran', route('pembayaran.create'));
});

Breadcrumbs::for('user', function ($trail){
    $trail->parent('home');
    $trail->push('Manage user', route('users.index'));
});

Breadcrumbs::for('search', function ($trail){
    $trail->parent('user');
    $trail->push('Cari User', route('search.index'));
});

