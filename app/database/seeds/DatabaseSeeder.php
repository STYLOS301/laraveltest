<?php 
use Illuminate\Database\Seeder;
class DatabaseSeeder
extends Seeder
{
 /* protected $faker;
  public function getFaker()
  {
    if (empty($this->faker))
    {
      $faker = Faker\Factory::create();
      $faker->addProvider(new Faker\Provider\Base($faker));
      $faker->addProvider(new Faker\Provider\Lorem($faker));
    }
    return $this->faker = $faker;
  } */
  public function run()
  {
      Eloquent::unguard();
      $this->call("ResourceSeeder");
  }
}
?>