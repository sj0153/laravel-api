<?php

namespace Database\Seeders;

use App\Models\Supplier;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        User::truncate();
        Product::truncate();
        Supplier::truncate();
        \App\Models\User::factory(2)->create();



        
        
        $product1 = Product::create(['name' => "Štark smoki",'description' => "flips sa kikirikijem", 'price' => "36.99", 'supplier_id' => $supplier1->id,'supplier_name'=>$supplier1->name]);
        $product2 = Product::create(['name' => "Najlepše želje Soko štark",'description' => "mlečna čokolada sa visokim sadržajem mleka", 'price' => "199.99", 'supplier_id' => $supplier1->id,'supplier_name'=>$supplier1->name]);
        $product3 = Product::create(['name' => "Nestle Crunch",'description' => "čokoladni desert od mlečne čokolade sa žitom", 'price' => "167.99", 'supplier_id' => $supplier2->id,'supplier_name'=>$supplier2->name]);
        $product4 = Product::create(['name' => "Swisslion choco biscuit",'description' => "mlečna čokolada sa keksom sa maslacem", 'price' => "169.99", 'supplier_id' => $supplier3->id,'supplier_name'=>$supplier3->name]);
        $product5 = Product::create(['name' => "Coca-Cola 330ml",'description' => "osvežavajuće bezalkoholno piće", 'price' => "68.99", 'supplier_id' => $supplier4->id,'supplier_name'=>$supplier4->name]);
        $product5 = Product::create(['name' => "Fanta narandža 2l",'description' => "osvežavajuće bezalkoholno piće sa ukusom narandže", 'price' => "140.00", 'supplier_id' => $supplier4->id,'supplier_name'=>$supplier4->name]);
    }
}
