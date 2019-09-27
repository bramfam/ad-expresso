<?php

use Illuminate\Database\Seeder;
use App\Project ;
class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$this->seedProjectInformation();
    }

    protected function seedProjectInformation(){

       factory(Project::class,10)->create()->each(function($u,$key) use Faker $faker){
        factory(Milestone::class,5)->make([
            'project_id' => $u->id,
            'milestone_description' => $faker->text
        ])->each(function($ms,$key){
            print "Milestone..";
            dump($ms);
            print "Key..";
            dump($key);
           /* factory(Contributor::class,5)->create([
                'contributor_key' => $u->key,
                'milestone_id' => $u->milestone_id
            ]);*/
        });
    });

}

}
