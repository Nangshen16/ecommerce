<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //user
        \App\Models\User::factory()->create([
            'name'      => 'Admin1',
            'email'     => 'admin1@gmail.com',
            'password'  => Hash::make('admin12345'),
        ]);

       //user
        \App\Models\User::factory()->create([
            'name'      => 'Admin2',
            'email'     => 'admin2@gmail.com',
            'password'  => Hash::make('admin5432'),
        ]);

        
        //Category::)->create();
        \App\Models\Category::factory()->create([
            'name'          => 'Computer',
            'photo'         => 'Computer.jpg',
            'remark'        => ''
         ]);

         \App\Models\Category::factory()->create([
            'name'          => 'Phone',
            'photo'         => 'Phone.jpg',
            'remark'        => ''
         ]);

         \App\Models\Category::factory()->create([
            'name'          => 'Battery',
            'photo'         => 'Luminous.jpg',
            'remark'        => 'Best'
         ]);

         // For Item
        \App\Models\Item::factory()->create([
            'category_id'   => '1',
            'name'          => 'Acer',
            'photo'         => 'Acer.jpg',
            'remark'        => ''
         ]);

        \App\Models\Item::factory()->create([
            'category_id'   => '1',
            'name'          => 'Dell',
            'photo'         => 'Dell.jpg',
            'remark'        => ''
         ]);
        \App\Models\Item::factory()->create([
            'category_id'   => '2',
            'name'          => 'Apple iPhone',
            'photo'         => 'Apple iPhone.jpg',
            'remark'        => ''
         ]);

        \App\Models\Item::factory()->create([
            'category_id'   => '2',
            'name'          => 'Samsung Galaxy',
            'photo'         => 'Samsung Galaxy.jpg',
            'remark'        => ''
         ]);

        \App\Models\Item::factory()->create([
            'category_id'   => '3',
            'name'          => 'Incel',
            'photo'         => 'Incel.jpg',
            'remark'        => ''
         ]);

        \App\Models\Item::factory()->create([
            'category_id'   => '3',
            'name'          => 'Amara',
            'photo'         => 'Amara.jpg',
            'remark'        => ''
         ]);

         //for products
         // For Products
        // For Products
        \App\Models\Product::factory()->create([
            'category_id'   => '1',
            'item_id'       => '1',
            'name'          => 'Acer i7',
            'photo1'        => 'Acer i7-1.jpg',
            'photo2'        => 'Acer i7-2.jpg',
            'photo3'        => 'Acer i7-3.jpg',
            'photo4'        => 'Acer i7-4.jpg',
            'price'         => 1500000,
            'qty'           => 10,
            'remark'        => ''
         ]);

         \App\Models\Product::factory()->create([
            'category_id'   => '1',
            'item_id'       => '1',
            'name'          => 'Acer i5',
            'photo1'        => 'Acer i5-1.jpg',
            'photo2'        => 'Acer i5-2.jpg',
            'photo3'        => 'Acer i5-3.jpg',
            'photo4'        => 'Acer i5-4.jpg',
            'price'         => 1000000,
            'qty'           => 10,
            'remark'        => ''
         ]);

         \App\Models\Product::factory()->create([
            'category_id'   => '1',
            'item_id'       => '1',
            'name'          => 'Acer i3',
            'photo1'        => 'Acer i3-1.jpg',
            'photo2'        => 'Acer i3-2.jpg',
            'photo3'        => 'Acer i3-3.jpg',
            'photo4'        => 'Acer i3-4.jpg',
            'price'         => 500000,
            'qty'           => 10,
            'remark'        => ''
         ]);

        \App\Models\Product::factory()->create([
            'category_id'   => '1',
            'item_id'       => '2',
            'name'          => 'Dell i7',
            'photo1'        => 'Dell i7-1.jpg',
            'photo2'        => 'Dell i7-2.jpg',
            'photo3'        => 'Dell i7-3.jpg',
            'photo4'        => 'Dell i7-4.jpg',
            'price'         => 1500000,
            'qty'           => 10,
            'remark'        => ''
         ]);

         \App\Models\Product::factory()->create([
            'category_id'   => '1',
            'item_id'       => '2',
            'name'          => 'Dell i5',
            'photo1'        => 'Dell i5-1.jpg',
            'photo2'        => 'Dell i5-2.jpg',
            'photo3'        => 'Dell i5-3.jpg',
            'photo4'        => 'Dell i5-4.jpg',
            'price'         => 1000000,
            'qty'           => 10,
            'remark'        => ''
         ]);

         \App\Models\Product::factory()->create([
            'category_id'   => '1',
            'item_id'       => '2',
            'name'          => 'Dell i3',
            'photo1'        => 'Dell i3-1.jpg',
            'photo2'        => 'Dell i3-2.jpg',
            'photo3'        => 'Dell i3-3.jpg',
            'photo4'        => 'Dell i3-4.jpg',
            'price'         => 500000,
            'qty'           => 10,
            'remark'        => ''
         ]);

         \App\Models\Product::factory()->create([
            'category_id'   => '2',
            'item_id'       => '3',
            'name'          => 'Apple iPhone 14 Pro',
            'photo1'        => 'Apple iPhone 14 Pro-1.jpg',
            'photo2'        => 'Apple iPhone 14 Pro-2.jpg',
            'photo3'        => 'Apple iPhone 14 Pro-3.jpg',
            'photo4'        => 'Apple iPhone 14 Pro-4.jpg',
            'price'         => 500000,
            'qty'           => 10,
            'remark'        => ''
         ]);

         \App\Models\Product::factory()->create([
            'category_id'   => '2',
            'item_id'       => '3',
            'name'          => 'Apple iPhone 15 Pro',
            'photo1'        => 'Apple iPhone 15 Pro-1.jpg',
            'photo2'        => 'Apple iPhone 15 Pro-2.jpg',
            'photo3'        => 'Apple iPhone 15 Pro-3.jpg',
            'photo4'        => 'Apple iPhone 15 Pro-4.jpg',
            'price'         => 500000,
            'qty'           => 10,
            'remark'        => ''
         ]);

         \App\Models\Product::factory()->create([
            'category_id'   => '2',
            'item_id'       => '4',
            'name'          => 'Samsung Galaxy S20',
            'photo1'        => 'Samsung Galaxy S20-1.jpg',
            'photo2'        => 'Samsung Galaxy S20-2.jpg',
            'photo3'        => 'Samsung Galaxy S20-3.jpg',
            'photo4'        => 'Samsung Galaxy S20-4.jpg',
            'price'         => 500000,
            'qty'           => 10,
            'remark'        => ''
         ]);

        \App\Models\Product::factory()->create([
            'category_id'   => '2',
            'item_id'       => '4',
            'name'          => 'Samsung Galaxy S24',
            'photo1'        => 'Samsung Galaxy S24-1.jpg',
            'photo2'        => 'Samsung Galaxy S24-2.jpg',
            'photo3'        => 'Samsung Galaxy S24-3.jpg',
            'photo4'        => 'Samsung Galaxy S24-4.jpg',
            'price'         => 500000,
            'qty'           => 10,
            'remark'        => ''
         ]);


         

    }
}
