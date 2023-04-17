<?php

namespace Database\Seeders;

use App\Models\Beer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BeerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Beer::factory(100)->create();

        Beer::factory()->create([
            'name' => 'Duvel',
            'slug' => 'duvel',
            'images' => './Images/duvel.jpg',
            'type' => 'blonde',
            'country' => 'Belgium',
            'alcohol_percentage' => '8.5',
            'brewery' => 'Duvel Moortgat',
            'info' => 'Duvel beer is a Belgian strong pale ale that is known for its high alcohol content and unique taste. It is brewed by Duvel Moortgat, a Belgian brewery located in the town of Breendonk. Duvel is brewed with a combination of Pilsner malt and Saaz hops, which gives it a light and refreshing taste, along with a subtle bitterness. The beer is then re-fermented in the bottle with a special strain of yeast, which adds a spicy and fruity complexity to the flavor profile. Duvel has a characteristic golden color, a dense, frothy head, and a dry, crisp finish. With an alcohol content of 8.5%, Duvel is a potent beer that is best enjoyed in moderation.',

        ]);
    }
}
