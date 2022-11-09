<?php

namespace Database\Seeders;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Napa',
            'price' => 20,
            'description' => 'Paracetamol is indicated for fever, common cold and influenza, headache, toothache, earache, bodyache, myalgia, neuralgia, dysmenorrhoea, sprains',
            'image' => 'https://media.istockphoto.com/id/1163955819/photo/pills-on-white-background.jpg?s=612x612&w=is&k=20&c=y9wCrWbsbAamvZ4X3q80k54DaSzKZgjvNF6DbH3s5cY=80'
        ]);
        DB::table('products')->insert([
            'name' => 'Antacids',
            'price' => 30,
            'description' => 'Antacids are medicines that counteract (neutralise) the acid in your stomach to relieve indigestion and heartburn. They come as a liquid or chewable tablets and can be bought from pharmacies and shops without a prescription.',
            'image' => 'https://media.istockphoto.com/id/155128250/photo/multicolored-antacid-tablets.jpg?s=612x612&w=is&k=20&c=Ov-dctLsff25erc51qeVAzZPNBylj-qQHuqOSq80vFc=80'
        ]);
        DB::table('products')->insert([
            'name' => 'Histasin',
            'price' => 40,
            'description' => 'Symptomatic treatment of allergic rhinitis, rash & urticaria.',
            'image' => 'https://media.istockphoto.com/id/149139370/photo/allergic-rhinitis.jpg?s=1024x1024&w=is&k=20&c=gp94E5EPRNynu838Luo64LgwOvzY58LpJ7E1ne23t5c=80'
        ]);
    }
}
