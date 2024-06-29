<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@shinyshoe.net',
            'password' => Hash::make('admin')
        ]);
        DB::table('users')->insert([
            ['name' => 'Jaime Harrington', 'email' => 'jaime_harrington@email.com' , 'password' => Hash::make('08211014002')],
            ['name' => 'Jamison Ware', 'email' => 'jamison_ware@email.com' , 'password' => Hash::make('08211029028')],
            ['name' => 'Camden Williamson', 'email' => 'camden_williamson@email.com' , 'password' => Hash::make('08211018712')],
            ['name' => 'Zoe Hogan', 'email' => 'zoe_hogan@email.com' , 'password' => Hash::make('08211002468')],
            ['name' => 'Dylan Dodson', 'email' => 'dylan_dodson@email.com' , 'password' => Hash::make('08211031412')],
            ['name' => 'Jazmyn Odom', 'email' => 'jazmyn_odom@email.com' , 'password' => Hash::make('08211031386')],
            ['name' => 'Luna Macias', 'email' => 'luna_macias@email.com' , 'password' => Hash::make('08211004362')],
            ['name' => 'Bailey Fleming', 'email' => 'bailey_fleming@email.com' , 'password' => Hash::make('08211021892')],
            ['name' => 'Denzel Pineda', 'email' => 'denzel_pineda@email.com' , 'password' => Hash::make('08211010557')],
            ['name' => 'Skylar Villegas', 'email' => 'skylar_villegas@email.com' , 'password' => Hash::make('08211028972')],
            ['name' => 'Daniel Hendricks', 'email' => 'daniel_hendricks@email.com' , 'password' => Hash::make('08211022076')],
            ['name' => 'Victor Dodson', 'email' => 'victor_dodson@email.com' , 'password' => Hash::make('08211003648')],
            ['name' => 'Landyn Cross', 'email' => 'landyn_cross@email.com' , 'password' => Hash::make('08211023409')],
            ['name' => 'Taniyah Schwartz', 'email' => 'taniyah_schwartz@email.com' , 'password' => Hash::make('08211006657')],
            ['name' => 'Bailey Herrera', 'email' => 'bailey_herrera@email.com' , 'password' => Hash::make('08211017401')],
            ['name' => 'Layla Gill', 'email' => 'layla_gill@email.com' , 'password' => Hash::make('08211021497')],
            ['name' => 'Ibrahim Schmidt', 'email' => 'ibrahim_schmidt@email.com' , 'password' => Hash::make('08211016885')],
            ['name' => 'Yusuf Bennett', 'email' => 'yusuf_bennett@email.com' , 'password' => Hash::make('08211031913')],
            ['name' => 'Madilynn Rivera', 'email' => 'madilynn_rivera@email.com' , 'password' => Hash::make('08211005923')],
            ['name' => 'Jay Christensen', 'email' => 'jay_christensen@email.com' , 'password' => Hash::make('08211031882')],
            ['name' => 'Kason Wong', 'email' => 'kason_wong@email.com' , 'password' => Hash::make('08211016071')],
            ['name' => 'Erin Lane', 'email' => 'erin_lane@email.com' , 'password' => Hash::make('08211000277')],
            ['name' => 'Jack Villarreal', 'email' => 'jack_villarreal@email.com' , 'password' => Hash::make('08211001011')],
            ['name' => 'Danna Owen', 'email' => 'danna_owen@email.com' , 'password' => Hash::make('08211002026')],
            ['name' => 'Colten Gray', 'email' => 'colten_gray@email.com' , 'password' => Hash::make('08211003335')],
            ['name' => 'Kendal Pratt', 'email' => 'kendal_pratt@email.com' , 'password' => Hash::make('08211016819')],
            ['name' => 'Nylah Bender', 'email' => 'nylah_bender@email.com' , 'password' => Hash::make('08211012973')],
            ['name' => 'Sydney Santiago', 'email' => 'sydney_santiago@email.com' , 'password' => Hash::make('08211011443')],
            ['name' => 'Callie Stuart', 'email' => 'callie_stuart@email.com' , 'password' => Hash::make('08211006629')],
            ['name' => 'Colby Henderson', 'email' => 'colby_henderson@email.com' , 'password' => Hash::make('08211027805')],
            ['name' => 'Jordyn Singh', 'email' => 'jordyn_singh@email.com' , 'password' => Hash::make('08211005376')],
            ['name' => 'Marlene Zhang', 'email' => 'marlene_zhang@email.com' , 'password' => Hash::make('08211026628')],
            ['name' => 'Madison Riley', 'email' => 'madison_riley@email.com' , 'password' => Hash::make('08211015437')],
            ['name' => 'Deven Zimmerman', 'email' => 'deven_zimmerman@email.com' , 'password' => Hash::make('08211031237')],
            ['name' => 'Karli Rojas', 'email' => 'karli_rojas@email.com' , 'password' => Hash::make('08211011991')],
            ['name' => 'Ciara Jenkins', 'email' => 'ciara_jenkins@email.com' , 'password' => Hash::make('08211007026')],
            ['name' => 'Muhammad Wolf', 'email' => 'muhammad_wolf@email.com' , 'password' => Hash::make('08211012002')],
            ['name' => 'Jax Neal', 'email' => 'jax_neal@email.com' , 'password' => Hash::make('08211031318')],
            ['name' => 'Russell Dixon', 'email' => 'russell_dixon@email.com' , 'password' => Hash::make('08211020889')],
            ['name' => 'Zion Sosa', 'email' => 'zion_sosa@email.com' , 'password' => Hash::make('08211027093')],
            ['name' => 'Athena Compton', 'email' => 'athena_compton@email.com' , 'password' => Hash::make('08211001520')],
            ['name' => 'Taryn Newman', 'email' => 'taryn_newman@email.com' , 'password' => Hash::make('08211024790')],
            ['name' => 'Tyrell Gaines', 'email' => 'tyrell_gaines@email.com' , 'password' => Hash::make('08211017327')],
            ['name' => 'Dangelo Collier', 'email' => 'dangelo_collier@email.com' , 'password' => Hash::make('08211005384')],
            ['name' => 'Anya Hughes', 'email' => 'anya_hughes@email.com' , 'password' => Hash::make('08211016119')],
            ['name' => 'Dominic Park', 'email' => 'dominic_park@email.com' , 'password' => Hash::make('08211021589')],
            ['name' => 'Camryn Oconnell', 'email' => 'camryn_oconnell@email.com' , 'password' => Hash::make('08211015419')],
            ['name' => 'Camille Schaefer', 'email' => 'camille_schaefer@email.com' , 'password' => Hash::make('08211019092')],
            ['name' => 'James Fuentes', 'email' => 'james_fuentes@email.com' , 'password' => Hash::make('08211004150')],
            ['name' => 'Evangeline Peterson', 'email' => 'evangeline_peterson@email.com' , 'password' => Hash::make('08211006648')],
        ]);
    }
}
