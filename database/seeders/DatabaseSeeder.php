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

        //User
        DB::table('users')->insert([
            'name'=>'Instrutor',
            'email'=>'instrutor@trilhas-1.com',
            'password'=>Hash::make('12345678'),                                                                                                                                                                                                                                                                                                                                                                                                                                                           
        ]);

        //Category
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

        //Collection
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
        
        /*------Adicionando Produtos------*/

        // Bermudas
        DB::table('clothing')->insert([
            'reference'=>'0001',
            'name'=>'Bermuda HF Linho Rosa',
            'description'=>'Bermuda Rosa feita com 
            100% de Linho da melhor qualidade
            que proporciona um maior conforto',
            'price'=>'274',
            'patch'=>'/roupas/bermuda_1.jpg',
            'category_id'=>'1',
            'user'=>'Instrutor',
            'collection_id'=>'1',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0002',
            'name'=>'Bermuda HF Jeans Dária',
            'description'=>'',
            'price'=>'256',
            'patch'=>'/roupas/bermuda_2.jpg',
            'category_id'=>'1',
            'user'=>'Instrutor',
            'collection_id'=>'1',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0003',
            'name'=>'Bermuda Jeans Destroyd',
            'description'=>'',
            'price'=>'99',
            'patch'=>'/roupas/bermuda_3.jpg',
            'category_id'=>'1',
            'user'=>'Instrutor',
            'collection_id'=>'1',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0004',
            'name'=>'Bermuda HF Poliester',
            'description'=>'',
            'price'=>'99',
            'patch'=>'/roupas/bermuda_4.jpg',
            'category_id'=>'1',
            'user'=>'Instrutor',
            'collection_id'=>'1',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0005',
            'name'=>'Bermuda HF Sarja Reta',
            'description'=>'',
            'price'=>'99',
            'patch'=>'/roupas/bermuda_4.jpg',
            'category_id'=>'1',
            'user'=>'Instrutor',
            'collection_id'=>'1',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0006',
            'name'=>'Bermuda HF Linho Alfa',
            'description'=>'',
            'price'=>'99',
            'patch'=>'/roupas/bermuda_5.jpg',
            'category_id'=>'1',
            'user'=>'Instrutor',
            'collection_id'=>'1',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0007',
            'name'=>'Bermuda HF Maxi Listras',
            'description'=>'',
            'price'=>'99',
            'patch'=>'/roupas/bermuda_6.jpg',
            'category_id'=>'1',
            'user'=>'Instrutor',
            'collection_id'=>'1',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0008',
            'name'=>'Bermuda HF em Viscose',
            'description'=>'',
            'price'=>'99',
            'patch'=>'/roupas/bermuda_7.jpg',
            'category_id'=>'1',
            'user'=>'Instrutor',
            'collection_id'=>'1',
        ]);

        // Blazers
        DB::table('clothing')->insert([
            'reference'=>'0009',
            'name'=>'Blazer Médio Sparkly',
            'description'=>'',
            'price'=>'133',
            'patch'=>'/roupas/blazer_1',
            'category_id'=>'2',
            'user'=>'Instrutor',
            'collection_id'=>'2',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0010',
            'name'=>'Blazer Cropped Colcci',
            'description'=>'',
            'price'=>'469',
            'patch'=>'/roupas/blazer_2',
            'category_id'=>'2',
            'user'=>'Instrutor',
            'collection_id'=>'2',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0011',
            'name'=>'Blazer Cropped Taier',
            'description'=>'',
            'price'=>'847',
            'patch'=>'/roupas/blazer_3',
            'category_id'=>'2',
            'user'=>'Instrutor',
            'collection_id'=>'2',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0012',
            'name'=>'Blazer Cropped Xadrez',
            'description'=>'',
            'price'=>'685',
            'patch'=>'/roupas/blazer_4',
            'category_id'=>'2',
            'user'=>'Instrutor',
            'collection_id'=>'2',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0013',
            'name'=>'Blazer Jeans Oversizd',
            'description'=>'',
            'price'=>'199',
            'patch'=>'/roupas/blazer_5',
            'category_id'=>'2',
            'user'=>'Instrutor',
            'collection_id'=>'2',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0014',
            'name'=>'Blazer Cropped Tweed',
            'description'=>'',
            'price'=>'335',
            'patch'=>'/roupas/blazer_6',
            'category_id'=>'2',
            'user'=>'Instrutor',
            'collection_id'=>'2',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0016',
            'name'=>'Blazer Cropped Ted Dark',
            'description'=>'',
            'price'=>'244',
            'patch'=>'/roupas/blazer_7',
            'category_id'=>'2',
            'user'=>'Instrutor',
            'collection_id'=>'2',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0017',
            'name'=>'Blazer Alongado Fares',
            'description'=>'',
            'price'=>'303',
            'patch'=>'/roupas/blazer_8',
            'category_id'=>'2',
            'user'=>'Instrutor',
            'collection_id'=>'2',
        ]);
        
        //Blusas 
        DB::table('clothing')->insert([
            'reference'=>'0018',
            'name'=>'Blusa Ombro A Ombro',
            'description'=>'',
            'price'=>'368',
            'patch'=>'/roupas/blusa_1',
            'category_id'=>'3',
            'user'=>'Instrutor',
            'collection_id'=>'3',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0019',
            'name'=>'Blusa Tule',
            'description'=>'',
            'price'=>'303',
            'patch'=>'/roupas/blusa_2',
            'category_id'=>'3',
            'user'=>'Instrutor',
            'collection_id'=>'3',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0020',
            'name'=>'Blusa Canelada',
            'description'=>'',
            'price'=>'341',
            'patch'=>'/roupas/blusa_3',
            'category_id'=>'3',
            'user'=>'Instrutor',
            'collection_id'=>'3',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0021',
            'name'=>'Blusa Ml Canelada',
            'description'=>'',
            'price'=>'303',
            'patch'=>'/roupas/blusa_4',
            'category_id'=>'3',
            'user'=>'Instrutor',
            'collection_id'=>'3',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0022',
            'name'=>'Blusa Ml Tricô',
            'description'=>'',
            'price'=>'747',
            'patch'=>'/roupas/blusa_5',
            'category_id'=>'3',
            'user'=>'Instrutor',
            'collection_id'=>'3',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0023',
            'name'=>'Blusa Canelada Cordão',
            'description'=>'',
            'price'=>'119',
            'patch'=>'/roupas/blusa_6',
            'category_id'=>'3',
            'user'=>'Instrutor',
            'collection_id'=>'3',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0024',
            'name'=>'Blusa Cropped Bufantes',
            'description'=>'',
            'price'=>'349',
            'patch'=>'/roupas/blusa_7',
            'category_id'=>'3',
            'user'=>'Instrutor',
            'collection_id'=>'3',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0025',
            'name'=>'Blusa Bordado Azul',
            'description'=>'',
            'price'=>'299',
            'patch'=>'/roupas/blusa_8',
            'category_id'=>'3',
            'user'=>'Instrutor',
            'collection_id'=>'3',
        ]);

        //Bodys
        DB::table('clothing')->insert([
            'reference'=>'0026',
            'name'=>'Body Tricô Cosmic',
            'description'=>'',
            'price'=>'219',
            'patch'=>'/roupas/body_1',
            'category_id'=>'4',
            'user'=>'Instrutor',
            'collection_id'=>'1',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0025',
            'name'=>'Body Um Ombro',
            'description'=>'',
            'price'=>'310',
            'patch'=>'/roupas/body_2',
            'category_id'=>'4',
            'user'=>'Instrutor',
            'collection_id'=>'1',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0027',
            'name'=>'Body Assimétrico',
            'description'=>'',
            'price'=>'226',
            'patch'=>'/roupas/body_3',
            'category_id'=>'4',
            'user'=>'Instrutor',
            'collection_id'=>'1',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0028',
            'name'=>'Body Com Decote',
            'description'=>'',
            'price'=>'299',
            'patch'=>'/roupas/body_4',
            'category_id'=>'4',
            'user'=>'Instrutor',
            'collection_id'=>'1',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0029',
            'name'=>'Body Amarração',
            'description'=>'',
            'price'=>'124',
            'patch'=>'/roupas/body_5',
            'category_id'=>'4',
            'user'=>'Instrutor',
            'collection_id'=>'1',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0030',
            'name'=>'Body Amarelo',
            'description'=>'',
            'price'=>'367',
            'patch'=>'/roupas/body_6',
            'category_id'=>'4',
            'user'=>'Instrutor',
            'collection_id'=>'1',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0031',
            'name'=>'Body Fem',
            'description'=>'',
            'price'=>'175',
            'patch'=>'/roupas/body_7',
            'category_id'=>'4',
            'user'=>'Instrutor',
            'collection_id'=>'1',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0032',
            'name'=>'Body Teems',
            'description'=>'',
            'price'=>'89',
            'patch'=>'/roupas/body_8',
            'category_id'=>'4',
            'user'=>'Instrutor',
            'collection_id'=>'1',
        ]);

        //Calças
        DB::table('clothing')->insert([
            'reference'=>'0033',
            'name'=>'Calça Sarja Thássia',
            'description'=>'',
            'price'=>'204',
            'patch'=>'/roupas/calca_1',
            'category_id'=>'6',
            'user'=>'Instrutor',
            'collection_id'=>'2',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0034',
            'name'=>'Calça Jeans Com Fendas',
            'description'=>'',
            'price'=>'360',
            'patch'=>'/roupas/calca_2',
            'category_id'=>'6',
            'user'=>'Instrutor',
            'collection_id'=>'2',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0035',
            'name'=>'Calça Graphic Garden',
            'description'=>'',
            'price'=>'428',
            'patch'=>'/roupas/calca_3',
            'category_id'=>'6',
            'user'=>'Instrutor',
            'collection_id'=>'2',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0036',
            'name'=>'Calça Xadrez Index',
            'description'=>'',
            'price'=>'188',
            'patch'=>'/roupas/calca_4',
            'category_id'=>'6',
            'user'=>'Instrutor',
            'collection_id'=>'2',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0037',
            'name'=>'Calça Linho Alfaiataria',
            'description'=>'',
            'price'=>'159',
            'patch'=>'/roupas/calca_5',
            'category_id'=>'6',
            'user'=>'Instrutor',
            'collection_id'=>'2',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0038',
            'name'=>'Calça Jeans Cargo',
            'description'=>'',
            'price'=>'319',
            'patch'=>'/roupas/calca_6',
            'category_id'=>'6',
            'user'=>'Instrutor',
            'collection_id'=>'2',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0039',
            'name'=>'Calça Pantalona Trend',
            'description'=>'',
            'price'=>'229',
            'patch'=>'/roupas/calca_7',
            'category_id'=>'6',
            'user'=>'Instrutor',
            'collection_id'=>'2',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0040',
            'name'=>'Calça Jeans kim',
            'description'=>'',
            'price'=>'179',
            'patch'=>'/roupas/calca_8',
            'category_id'=>'6',
            'user'=>'Instrutor',
            'collection_id'=>'2',
        ]);

        //Coletes
        DB::table('clothing')->insert([
            'reference'=>'0041',
            'name'=>'Colete Jeans Alfaitaria',
            'description'=>'',
            'price'=>'577',
            'patch'=>'/roupas/colete_1',
            'category_id'=>'7',
            'user'=>'Instrutor',
            'collection_id'=>'1',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0042',
            'name'=>'Colete Jeans Cropped',
            'description'=>'',
            'price'=>'693',
            'patch'=>'/roupas/colete_2',
            'category_id'=>'7',
            'user'=>'Instrutor',
            'collection_id'=>'1',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0043',
            'name'=>'Colete Plus Size',
            'description'=>'',
            'price'=>'149',
            'patch'=>'/roupas/colete_3',
            'category_id'=>'7',
            'user'=>'Instrutor',
            'collection_id'=>'2',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0044',
            'name'=>'Colete Alfaitaria Preto',
            'description'=>'',
            'price'=>'214',
            'patch'=>'/roupas/colete_4',
            'category_id'=>'7',
            'user'=>'Instrutor',
            'collection_id'=>'1',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0045',
            'name'=>'Colete Linho Iguana',
            'description'=>'',
            'price'=>'446',
            'patch'=>'/roupas/colete_5',
            'category_id'=>'7',
            'user'=>'Instrutor',
            'collection_id'=>'1',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0046',
            'name'=>'Colete Jeans Babadotop',
            'description'=>'',
            'price'=>'399',
            'patch'=>'/roupas/colete_6',
            'category_id'=>'7',
            'user'=>'Instrutor',
            'collection_id'=>'3',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0047',
            'name'=>'Colete Cropped Viscose',
            'description'=>'',
            'price'=>'418',
            'patch'=>'/roupas/colete_7',
            'category_id'=>'7',
            'user'=>'Instrutor',
            'collection_id'=>'3',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0048',
            'name'=>'Colete Alfaitaria Saoko',
            'description'=>'',
            'price'=>'368',
            'patch'=>'/roupas/colete_8',
            'category_id'=>'7',
            'user'=>'Instrutor',
            'collection_id'=>'3',
        ]);

        //Jaquetas
        DB::table('clothing')->insert([
            'reference'=>'0049',
            'name'=>'Jaqueta Sarja',
            'description'=>'',
            'price'=>'265',
            'patch'=>'/roupas/jaqueta_1',
            'category_id'=>'8',
            'user'=>'Instrutor',
            'collection_id'=>'1',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0050',
            'name'=>'Jaqueta Cropped Veludo',
            'description'=>'',
            'price'=>'180',
            'patch'=>'/roupas/jaqueta_2',
            'category_id'=>'8',
            'user'=>'Instrutor',
            'collection_id'=>'3',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0051',
            'name'=>'Jaqueta Jeans Cropped',
            'description'=>'',
            'price'=>'368',
            'patch'=>'/roupas/jaqueta_3',
            'category_id'=>'8',
            'user'=>'Instrutor',
            'collection_id'=>'3',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0052',
            'name'=>'Jaqueta Cropped Jeans',
            'description'=>'',
            'price'=>'429',
            'patch'=>'/roupas/jaqueta_4',
            'category_id'=>'8',
            'user'=>'Instrutor',
            'collection_id'=>'3',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0053',
            'name'=>'Jaqueta Sarja Preta',
            'description'=>'',
            'price'=>'149',
            'patch'=>'/roupas/jaqueta_5',
            'category_id'=>'8',
            'user'=>'Instrutor',
            'collection_id'=>'2',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0054',
            'name'=>'Jaqueta Puffer Cropped',
            'description'=>'',
            'price'=>'987',
            'patch'=>'/roupas/jaqueta_6',
            'category_id'=>'8',
            'user'=>'Instrutor',
            'collection_id'=>'2',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0055',
            'name'=>'Jaqueta Blue Steel',
            'description'=>'',
            'price'=>'788',
            'patch'=>'/roupas/jaqueta_7',
            'category_id'=>'8',
            'user'=>'Instrutor',
            'collection_id'=>'4',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0056',
            'name'=>'Jaqueta Cropped Xadrez',
            'description'=>'',
            'price'=>'250',
            'patch'=>'/roupas/jaqueta_8',
            'category_id'=>'8',
            'user'=>'Instrutor',
            'collection_id'=>'4',
        ]);

        //Jardineiras
        DB::table('clothing')->insert([
            'reference'=>'0057',
            'name'=>'Jardineira Jeans',
            'description'=>'',
            'price'=>'89',
            'patch'=>'/roupas/jardineira_1',
            'category_id'=>'9',
            'user'=>'Instrutor',
            'collection_id'=>'4',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0058',
            'name'=>'Jardineira Destroyed',
            'description'=>'',
            'price'=>'61',
            'patch'=>'/roupas/jardineira_2',
            'category_id'=>'9',
            'user'=>'Instrutor',
            'collection_id'=>'4',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0059',
            'name'=>'Jardineira Jeans',
            'description'=>'',
            'price'=>'109',
            'patch'=>'/roupas/jardineira_3',
            'category_id'=>'9',
            'user'=>'Instrutor',
            'collection_id'=>'4',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0060',
            'name'=>'Jardineira Jeans Relax',
            'description'=>'',
            'price'=>'79',
            'patch'=>'/roupas/jardineira_4',
            'category_id'=>'9',
            'user'=>'Instrutor',
            'collection_id'=>'3',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0061',
            'name'=>'Jardineira Sarja',
            'description'=>'',
            'price'=>'98',
            'patch'=>'/roupas/jardineira_5',
            'category_id'=>'9',
            'user'=>'Instrutor',
            'collection_id'=>'4',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0062',
            'name'=>'Jardineira Zune Jeans',
            'description'=>'',
            'price'=>'',
            'patch'=>'/roupas/jardineira_6',
            'category_id'=>'9',
            'user'=>'Instrutor',
            'collection_id'=>'3',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0063',
            'name'=>'Jardineira Baggy',
            'description'=>'',
            'price'=>'57',
            'patch'=>'/roupas/jardineira_7',
            'category_id'=>'9',
            'user'=>'Instrutor',
            'collection_id'=>'4',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0064',
            'name'=>'Jardineira Sarja Reta',
            'description'=>'',
            'price'=>'79',
            'patch'=>'/roupas/jardineira_8',
            'category_id'=>'9',
            'user'=>'Instrutor',
            'collection_id'=>'4',
        ]);

        //Macacão
        DB::table('clothing')->insert([
            'reference'=>'0065',
            'name'=>'Macacão Catsuit Veludo',
            'description'=>'',
            'price'=>'149',
            'patch'=>'/roupas/macacao_1',
            'category_id'=>'10',
            'user'=>'Instrutor',
            'collection_id'=>'2',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0066',
            'name'=>'Macacão Ml Rosa',
            'description'=>'',
            'price'=>'129',
            'patch'=>'/roupas/macacao_2',
            'category_id'=>'10',
            'user'=>'Instrutor',
            'collection_id'=>'2',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0067',
            'name'=>'Macacão em Sarja Roxo',
            'description'=>'',
            'price'=>'134',
            'patch'=>'/roupas/macacao_3',
            'category_id'=>'10',
            'user'=>'Instrutor',
            'collection_id'=>'2',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0068',
            'name'=>'Macacões Lizien Gelcie',
            'description'=>'',
            'price'=>'54',
            'patch'=>'/roupas/macacao_4',
            'category_id'=>'10',
            'user'=>'Instrutor',
            'collection_id'=>'2',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'00669',
            'name'=>'Macaquinho de Amarração',
            'description'=>'',
            'price'=>'25',
            'patch'=>'/roupas/macacao_5',
            'category_id'=>'10',
            'user'=>'Instrutor',
            'collection_id'=>'1',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0070',
            'name'=>'Macacão Acetinado Black',
            'description'=>'',
            'price'=>'74',
            'patch'=>'/roupas/macacao_6',
            'category_id'=>'10',
            'user'=>'Instrutor',
            'collection_id'=>'4',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0071',
            'name'=>'Macacão Linho',
            'description'=>'',
            'price'=>'65',
            'patch'=>'/roupas/macacao_7',
            'category_id'=>'10',
            'user'=>'Instrutor',
            'collection_id'=>'4',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0072',
            'name'=>'Macacão Fluted Metallic',
            'description'=>'',
            'price'=>'49',
            'patch'=>'/roupas/macacao_8',
            'category_id'=>'10',
            'user'=>'Instrutor',
            'collection_id'=>'4',
        ]);

        //Sandalias
        DB::table('clothing')->insert([
            'reference'=>'0073',
            'name'=>'Sandália Platform Twist',
            'description'=>'',
            'price'=>'153',
            'patch'=>'/roupas/sandalia_1',
            'category_id'=>'11',
            'user'=>'Instrutor',
            'collection_id'=>'1',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0074',
            'name'=>'Sandália Olie',
            'description'=>'',
            'price'=>'284',
            'patch'=>'/roupas/sandalia_2',
            'category_id'=>'11',
            'user'=>'Instrutor',
            'collection_id'=>'1',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0075',
            'name'=>'Sandália Forever',
            'description'=>'',
            'price'=>'114',
            'patch'=>'/roupas/sandalia_3',
            'category_id'=>'11',
            'user'=>'Instrutor',
            'collection_id'=>'1',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0076',
            'name'=>'Sandalia Vizzano',
            'description'=>'',
            'price'=>'169',
            'patch'=>'/roupas/sandalia_',
            'category_id'=>'11',
            'user'=>'Instrutor',
            'collection_id'=>'1',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0077',
            'name'=>'Sandalia Fem',
            'description'=>'',
            'price'=>'199',
            'patch'=>'/roupas/sandalia_5',
            'category_id'=>'',
            'user'=>'Instrutor',
            'collection_id'=>'',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0078',
            'name'=>'Sandália Papete',
            'description'=>'',
            'price'=>'99',
            'patch'=>'/roupas/sandalia_6',
            'category_id'=>'11',
            'user'=>'Instrutor',
            'collection_id'=>'4',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0079',
            'name'=>'Sandalia Quiz',
            'description'=>'',
            'price'=>'249',
            'patch'=>'/roupas/sandalia_7',
            'category_id'=>'11',
            'user'=>'Instrutor',
            'collection_id'=>'3',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0080',
            'name'=>'Sandália Arezzo Espiral',
            'description'=>'',
            'price'=>'519',
            'patch'=>'/roupas/sandalia_8',
            'category_id'=>'11',
            'user'=>'Instrutor',
            'collection_id'=>'1',
        ]);

        //Shorts
        DB::table('clothing')->insert([
            'reference'=>'0081',
            'name'=>'Shorts Alfaitaria Preto',
            'description'=>'',
            'price'=>'49',
            'patch'=>'/roupas/short_1',
            'category_id'=>'12',
            'user'=>'Instrutor',
            'collection_id'=>'1',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0082',
            'name'=>'Short Linho Clochard',
            'description'=>'',
            'price'=>'34',
            'patch'=>'/roupas/short_2',
            'category_id'=>'12',
            'user'=>'Instrutor',
            'collection_id'=>'1',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0083',
            'name'=>'Short Cintura Alta',
            'description'=>'',
            'price'=>'49',
            'patch'=>'/roupas/short_3',
            'category_id'=>'12',
            'user'=>'Instrutor',
            'collection_id'=>'1',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0084',
            'name'=>'Shorts Heleny',
            'description'=>'',
            'price'=>'83',
            'patch'=>'/roupas/short_4',
            'category_id'=>'12',
            'user'=>'Instrutor',
            'collection_id'=>'1',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0085',
            'name'=>'Short Jeans Clochard',
            'description'=>'',
            'price'=>'36',
            'patch'=>'/roupas/short_5',
            'category_id'=>'12',
            'user'=>'Instrutor',
            'collection_id'=>'1',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0086',
            'name'=>'Short Envelope',
            'description'=>'',
            'price'=>'37',
            'patch'=>'/roupas/short_6',
            'category_id'=>'12',
            'user'=>'Instrutor',
            'collection_id'=>'1',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0087',
            'name'=>'Short Khaki',
            'description'=>'',
            'price'=>'99',
            'patch'=>'/roupas/short_7',
            'category_id'=>'12',
            'user'=>'Instrutor',
            'collection_id'=>'1',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0088',
            'name'=>'Short Poly',
            'description'=>'',
            'price'=>'76',
            'patch'=>'/roupas/short_8',
            'category_id'=>'12',
            'user'=>'Instrutor',
            'collection_id'=>'1',
        ]);

        //Bolsas
        DB::table('clothing')->insert([
            'reference'=>'0089',
            'name'=>'Bolsa Trento',
            'description'=>'',
            'price'=>'244',
            'patch'=>'/roupas/bolsa_1',
            'category_id'=>'5',
            'user'=>'Instrutor',
            'collection_id'=>'1',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0090',
            'name'=>'Bolsa Bucket',
            'description'=>'',
            'price'=>'779',
            'patch'=>'/roupas/bolsa_2',
            'category_id'=>'5',
            'user'=>'Instrutor',
            'collection_id'=>'3',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0092',
            'name'=>'Bolsa Clutch',
            'description'=>'',
            'price'=>'56',
            'patch'=>'/roupas/bolsa_3',
            'category_id'=>'3',
            'user'=>'Instrutor',
            'collection_id'=>'2',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0093',
            'name'=>'Bolsa Crossbody',
            'description'=>'',
            'price'=>'599',
            'patch'=>'/roupas/bolsa_4',
            'category_id'=>'3',
            'user'=>'Instrutor',
            'collection_id'=>'4',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0094',
            'name'=>'Bolsa Tote',
            'description'=>'',
            'price'=>'859',
            'patch'=>'/roupas/bolsa_5',
            'category_id'=>'3',
            'user'=>'Instrutor',
            'collection_id'=>'1',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0095',
            'name'=>'Bolsa iTote Soft',
            'description'=>'',
            'price'=>'645',
            'patch'=>'/roupas/bolsa_6',
            'category_id'=>'3',
            'user'=>'Instrutor',
            'collection_id'=>'2',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0096',
            'name'=>'Bolsa Bergamo Preto',
            'description'=>'',
            'price'=>'299',
            'patch'=>'/roupas/bolsa_7',
            'category_id'=>'3',
            'user'=>'Instrutor',
            'collection_id'=>'3',
        ]);
        DB::table('clothing')->insert([
            'reference'=>'0097',
            'name'=>'Bolsa Rubber Rosa Neon',
            'description'=>'',
            'price'=>'129',
            'patch'=>'/roupas/bolsa_8',
            'category_id'=>'3',
            'user'=>'Instrutor',
            'collection_id'=>'4',
        ]);
    }
}