<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('users')->insert([
            'name'=>'Instrutor',
            'email'=>'instrutor@trilhas-1.com',
            'password'=>Hash::make('12345678'),                                                                                                                                                                                                                                                                                                                                                                                                                                                           
        ]);

        DB::table('category')->insert([
            'name'=>'Bermuda'
        ]);

        DB::table('category')->insert([
            'name'=>'Blazer'
        ]);

        DB::table('category')->insert([
            'name'=>'Blusa'
        ]);

        DB::table('category')->insert([
            'name'=>'Body'
        ]);

        DB::table('category')->insert([
            'name'=>'Bolsa'
        ]);

        DB::table('category')->insert([
            'name'=>'Calça'
        ]);

        DB::table('category')->insert([
            'name'=>'Colete'
        ]);

        DB::table('category')->insert([
            'name'=>'Jaqueta'
        ]);

        DB::table('category')->insert([
            'name'=>'Jardineira'
        ]);

        DB::table('category')->insert([
            'name'=>'Macacão'
        ]);

        DB::table('category')->insert([
            'name'=>'Sandalia'
        ]);

        DB::table('category')->insert([
            'name'=>'Short'
        ]);

        DB::table('collection')->insert([
            'description'=>'Verão 2023'
        ]);

        DB::table('collection')->insert([
            'description'=>'Inverno 2023'
        ]);

        DB::table('collection')->insert([
            'description'=>'Primavera 2023'
        ]);

        DB::table('collection')->insert([
            'description'=>'Outono 2023'
        ]);

        DB::table('clothing')->insert([
            'reference'=>'0001',
            'name'=>'Bermuda HF Slim',
            'description'=>'Bermuda preta feita com 100% de algodão da melhor qualidade
             que proporciona um maior conforto',
            'price'=>'99',
            'patch'=>'/roupas/bermuda_08_1680741732.jpg',
            'category_id'=>'1',
            'user'=>'Instrutor',
            'collection_id'=>'1',
        ]);

        DB::table('clothing')->insert([
            'reference'=>'0002',
            'name'=>'Blazer HF Slim',
            'description'=>'Blazer vermelho feita com 100% algodão da melhor qualidade
             que proporciona um maior conforto',
            'price'=>'99',
            'patch'=>'/roupas/blazer_01_1681339014.jpg',
            'category_id'=>'2',
            'user'=>'Instrutor',
            'collection_id'=>'3',
        ]);

        DB::table('clothing')->insert([
            'reference'=>'0003',
            'name'=>'Mochila HF Minimalista',
            'description'=>'Mochila rosa feita com 100% couro da melhor qualidade
             que proporciona um maior conforto',
            'price'=>'199',
            'patch'=>'/roupas/bolsa_1680655747.jpg',
            'category_id'=>'5',
            'user'=>'Instrutor',
            'collection_id'=>'1',
        ]);

        DB::table('clothing')->insert([
            'reference'=>'0004',
            'name'=>'Blusa HF Wabi',
            'description'=>'Blusa verde feita com 100% algodão da melhor qualidade
             que proporciona um maior conforto',
            'price'=>'60',
            'patch'=>'/roupas/blusa.jpg',
            'category_id'=>'3',
            'user'=>'Instrutor',
            'collection_id'=>'1',
        ]);

        DB::table('clothing')->insert([
            'reference'=>'0005',
            'name'=>'Body HF Hand',
            'description'=>'Body azul ciano feita com 100% algodão da melhor qualidade
             que proporciona um maior conforto',
            'price'=>'60',
            'patch'=>'/roupas/body.jpg',
            'category_id'=>'4',
            'user'=>'Instrutor',
            'collection_id'=>'1',
        ]);

        DB::table('clothing')->insert([
            'reference'=>'0006',
            'name'=>'Calça HF Jeans Fendal',
            'description'=>'Calça Fendal feita com jeans da melhor qualidade
             que proporciona um maior conforto',
            'price'=>'120',
            'patch'=>'/roupas/calca.jpg',
            'category_id'=>'6',
            'user'=>'Instrutor',
            'collection_id'=>'2',
        ]);

        DB::table('clothing')->insert([
            'reference'=>'0007',
            'name'=>'Colete HF Jeans',
            'description'=>'Colete feito com jeans da melhor qualidade
             que proporciona um maior conforto',
            'price'=>'80',
            'patch'=>'/roupas/colete.jpg',
            'category_id'=>'7',
            'user'=>'Instrutor',
            'collection_id'=>'4',
        ]); 
        
        DB::table('clothing')->insert([
            'reference'=>'0008',
            'name'=>'Jaqueta HF Veludo',
            'description'=>'Jaqueta feito com jeans da melhor qualidade
             que proporciona um maior conforto',
            'price'=>'80',
            'patch'=>'/roupas/jaqueta.jpg',
            'category_id'=>'8',
            'user'=>'Instrutor',
            'collection_id'=>'3',
        ]);

        DB::table('clothing')->insert([
            'reference'=>'0009',
            'name'=>'Jardineira HF Jeans',
            'description'=>'Jardineira feito com jeans da melhor qualidade
             que proporciona um maior conforto',
            'price'=>'150',
            'patch'=>'/roupas/jardineira.jpg',
            'category_id'=>'9',
            'user'=>'Instrutor',
            'collection_id'=>'3',
        ]);

        DB::table('clothing')->insert([
            'reference'=>'0010',
            'name'=>'Macacão HF Mangas Longa',
            'description'=>'Macação feito com 100% Viscose da melhor qualidade
             que proporciona um maior conforto',
            'price'=>'150',
            'patch'=>'/roupas/macacao.jpg',
            'category_id'=>'10',
            'user'=>'Instrutor',
            'collection_id'=>'2',
        ]);

        DB::table('clothing')->insert([
            'reference'=>'0011',
            'name'=>'Sandalia HF',
            'description'=>'Sandalia feita com 100% couro da melhor qualidade
             que proporciona um maior conforto',
            'price'=>'250',
            'patch'=>'/roupas/sandali.jpg',
            'category_id'=>'11',
            'user'=>'Instrutor',
            'collection_id'=>'1',
        ]);

        DB::table('clothing')->insert([
            'reference'=>'0012',
            'name'=>'Short HF Linho',
            'description'=>'Short preto feita com 100% linho da melhor qualidade
             que proporciona um maior conforto',
            'price'=>'250',
            'patch'=>'/roupas/short.jpg',
            'category_id'=>'12',
            'user'=>'Instrutor',
            'collection_id'=>'1',
        ]);
        


        

    }
}
