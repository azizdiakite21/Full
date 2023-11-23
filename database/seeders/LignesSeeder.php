<?php

namespace Database\Seeders;

use App\Models\Ligne;
use Illuminate\Database\Seeder;

class LignesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ligne::create([
            'prix'=>5000,
            'depart'=>'Lomé',
            'arrivee'=>'Sokodé',
            'arrets'=>'https://www.google.com/maps/embed?pb=!1m40!1m12!1m3!1d2024125.3308513758!2d-0.059459511177852885!3d7.750545599235134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m25!3e0!4m5!1s0x10294dc366c5cb3b%3A0x221133ef84b9b035!2zU29rb2TDqQ!3m2!1d8.977983199999999!2d1.1448981!4m5!1s0x102926b24c402fe1%3A0x9e15770ea51cc2ab!2sSotouboua!3m2!1d8.5653801!2d0.9772873999999999!4m5!1s0x10260ea7ec14c4d1%3A0x545f2106f2f9ce39!2zQXRha3BhbcOp!3m2!1d7.5286908!2d1.1305049!4m5!1s0x1023e1c113185419%3A0x3224b5422caf411d!2zTG9tw6k!3m2!1d6.1256261!2d1.2254182999999998!5e0!3m2!1sfr!2stg!4v1654788248729!5m2!1sfr!2stg'
        ]);

        Ligne::create([
            'prix'=>5000,
            'depart'=>'Sokodé',
            'arrivee'=>'Lomé',
            'arrets'=>'https://www.google.com/maps/embed?pb=!1m40!1m12!1m3!1d2024125.3308513758!2d-0.059459511177852885!3d7.750545599235134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m25!3e0!4m5!1s0x10294dc366c5cb3b%3A0x221133ef84b9b035!2zU29rb2TDqQ!3m2!1d8.977983199999999!2d1.1448981!4m5!1s0x102926b24c402fe1%3A0x9e15770ea51cc2ab!2sSotouboua!3m2!1d8.5653801!2d0.9772873999999999!4m5!1s0x10260ea7ec14c4d1%3A0x545f2106f2f9ce39!2zQXRha3BhbcOp!3m2!1d7.5286908!2d1.1305049!4m5!1s0x1023e1c113185419%3A0x3224b5422caf411d!2zTG9tw6k!3m2!1d6.1256261!2d1.2254182999999998!5e0!3m2!1sfr!2stg!4v1654788248729!5m2!1sfr!2stg'
        ]);

        Ligne::create([
            'prix'=>6000,
            'depart'=>'Kara',
            'arrivee'=>'Lomé',
            'arrets'=>'https://www.google.com/maps/embed?pb=!1m40!1m12!1m3!1d2023408.6374536569!2d-0.2037024177840955!3d7.898203527242405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m25!3e0!4m5!1s0x102b8ab6208ef0a5%3A0xed6525fdf247987d!2sKara!3m2!1d9.5486112!2d1.1977157999999999!4m5!1s0x10294dc366c5cb3b%3A0x221133ef84b9b035!2zU29rb2TDqQ!3m2!1d8.977983199999999!2d1.1448981!4m5!1s0x10260ea7ec14c4d1%3A0x545f2106f2f9ce39!2zQXRha3BhbcOp!3m2!1d7.5286908!2d1.1305049!4m5!1s0x1023e1c113185419%3A0x3224b5422caf411d!2zTG9tw6k!3m2!1d6.1256261!2d1.2254182999999998!5e0!3m2!1sfr!2stg!4v1654788655119!5m2!1sfr!2stg'
        ]);

        Ligne::create([
            'prix'=>6000,
            'depart'=>'Lomé',
            'arrivee'=>'Kara',
            'arrets'=>'https://www.google.com/maps/embed?pb=!1m40!1m12!1m3!1d2023408.6374536569!2d-0.2037024177840955!3d7.898203527242405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m25!3e0!4m5!1s0x102b8ab6208ef0a5%3A0xed6525fdf247987d!2sKara!3m2!1d9.5486112!2d1.1977157999999999!4m5!1s0x10294dc366c5cb3b%3A0x221133ef84b9b035!2zU29rb2TDqQ!3m2!1d8.977983199999999!2d1.1448981!4m5!1s0x10260ea7ec14c4d1%3A0x545f2106f2f9ce39!2zQXRha3BhbcOp!3m2!1d7.5286908!2d1.1305049!4m5!1s0x1023e1c113185419%3A0x3224b5422caf411d!2zTG9tw6k!3m2!1d6.1256261!2d1.2254182999999998!5e0!3m2!1sfr!2stg!4v1654788655119!5m2!1sfr!2stg'
        ]);

    }
}
