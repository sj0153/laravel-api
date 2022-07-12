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



        $supplier1 = Supplier::create(['name'=>"Soko Štark d.o.o",'contact'=>"kontaktcentarSRB@atlanticgrupa.com",'p&s'=>"slatkiši, flipsi, keks i čokolade"]);
        $supplier2 = Supplier::create(['name'=>"Nestle Adrianic S d.o.o.",'contact'=>"0800 000 100",'p&s'=>"hranu za bebe, medicinsku hranu, flaširanu vodu, žitarice za doručak, kafu i čaj, slatkiše, mlečne proizvode, sladoled, smrznutu hranu, hranu za kućne ljubimce"]);
        $supplier3 = Supplier::create(['name'=>"Swisslion d.o.o.",'contact'=>"0800 122 122",'p&s'=>"čokolade, krem, medenjaci, keks, žele proizvodi i sladoledi"]);
        $supplier4 = Supplier::create(['name'=>"Coca-Cola HBC-Srbija d.o.o",'contact'=>"kupac@cchellenic.com",'p&s'=>"bezalkoholna gazirana pića"]);
        
        $product1 = Product::create(['name' => "Štark smoki",'description' => "flips sa kikirikijem", 'price' => "36.99", 'supplier_id' => $supplier1->id,'supplier_name'=>$supplier1->name]);
        $product2 = Product::create(['name' => "Najlepše želje Soko štark",'description' => "mlečna čokolada sa visokim sadržajem mleka", 'price' => "199.99", 'supplier_id' => $supplier1->id,'supplier_name'=>$supplier1->name]);
        $product3 = Product::create(['name' => "Nestle Crunch",'description' => "čokoladni desert od mlečne čokolade sa žitom", 'price' => "167.99", 'supplier_id' => $supplier2->id,'supplier_name'=>$supplier2->name]);
        $product4 = Product::create(['name' => "Swisslion choco biscuit",'description' => "mlečna čokolada sa keksom sa maslacem", 'price' => "169.99", 'supplier_id' => $supplier3->id,'supplier_name'=>$supplier3->name]);
        $product5 = Product::create(['name' => "Coca-Cola 330ml",'description' => "osvežavajuće bezalkoholno piće", 'price' => "68.99", 'supplier_id' => $supplier4->id,'supplier_name'=>$supplier4->name]);
        $product6 = Product::create(['name' => "Fanta narandža 2l",'description' => "osvežavajuće bezalkoholno piće sa ukusom narandže", 'price' => "140.00", 'supplier_id' => $supplier4->id,'supplier_name'=>$supplier4->name]);
    }
}
