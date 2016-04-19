<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->artistSeeder();
        $this->locationSeeder();
        $this->polymorphicPhotosSeeder();
    }

    protected function artistSeeder()
    {
        $this->call(ArtistsTableSeeder::class);
        $this->call(DiscographiesTableSeeder::class);
        $this->call(MusicsTableSeeder::class);
        $this->call(DiscographyMusicTableSeeder::class);
    }

    protected function locationSeeder()
    {
        $this->call(RegionsTableSeeder::class);
        $this->call(PrefecturesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
    }

    protected function polymorphicPhotosSeeder()
    {
        $this->call(PolymorphicPhotosTableSeeder::class);
    }
}
