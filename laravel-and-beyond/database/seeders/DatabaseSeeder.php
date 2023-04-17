<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Beer;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Beer::factory()->create([
            'name' => 'Duvel',
            'slug' => 'duvel',
            'image' => './Images/duvel.jpg',
            'type' => 'blonde',
            'country' => 'Belgium',
            'alcohol_percentage' => '8.5',
            'brewery' => 'Duvel Moortgat',
            'info' => 'Duvel beer is a Belgian strong pale ale that is known for its high alcohol content and unique taste. It is brewed by Duvel Moortgat, a Belgian brewery located in the town of Breendonk. Duvel is brewed with a combination of Pilsner malt and Saaz hops, which gives it a light and refreshing taste, along with a subtle bitterness. The beer is then re-fermented in the bottle with a special strain of yeast, which adds a spicy and fruity complexity to the flavor profile. Duvel has a characteristic golden color, a dense, frothy head, and a dry, crisp finish. With an alcohol content of 8.5%, Duvel is a potent beer that is best enjoyed in moderation.',  
        ]);
        Beer::factory()->create([
            'name' => 'Orval',
            'slug' => 'orval',
            'image' => './Images/orval.jpg',
            'type' => 'blonde',
            'country' => 'Belgium',
            'alcohol_percentage' => '6.2',
            'brewery' => 'Orval Abbey',
            'info' => 'Orval beer is a Trappist beer that is brewed by the Orval Abbey located in Belgium. It is known for its distinct taste that is a result of the unique combination of hops and Brettanomyces yeast used in its brewing process. This beer has a complex and fruity flavor profile with a dry and slightly bitter finish. Orval beer is also known for its distinctive bottle shape and label design, which features a picture of the abbey\'s famous fish pond. The Orval Abbey uses the proceeds from the sale of this beer to support its monastic community and charitable works.',
        ]);
        Beer::factory()->create([
            'name' => 'Augustijn',
            'slug' => 'duvel',
            'image' => './Images/Augustijn.jpg',
            'type' => 'blonde',
            'country' => 'Belgium',
            'alcohol_percentage' => '8.5',
            'brewery' => 'Van Steenberge Brewery',
            'info' => 'Duvel beer is a Belgian strong pale ale that is known for its high alcohol content and unique taste. It is brewed by Duvel Moortgat, a Belgian brewery located in the town of Breendonk. Duvel is brewed with a combination of Pilsner malt and Saaz hops, which gives it a light and refreshing taste, along with a subtle bitterness. The beer is then re-fermented in the bottle with a special strain of yeast, which adds a spicy and fruity complexity to the flavor profile. Duvel has a characteristic golden color, a dense, frothy head, and a dry, crisp finish. With an alcohol content of 8.5%, Duvel is a potent beer that is best enjoyed in moderation.',  
        ]);
       
        Beer::factory(10)->create();
    }
}
