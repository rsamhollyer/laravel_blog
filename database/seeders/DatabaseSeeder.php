<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Mews\Purifier\Casts\CleanHtml;

class DatabaseSeeder extends Seeder {
  /**
   * Seed the application's database.
   *
   * @return void
   */


  protected $casts = [
    'body' => CleanHtml::class,
  ];

  public function run() {
    $user = User::factory()->create(['name' => 'John Doe']);
    Post::factory(5)->create(['user_id' => $user->id]);
    $user2 = User::factory()->create(['name' => 'Mary Sue']);
    Post::factory(5)->create(['user_id' => $user2->id]);
    $user3 = User::factory()->create(['name' => 'Bobby Jo']);
    Post::factory(5)->create(['user_id' => $user3->id]);
    $user4 = User::factory()->create(['name' => 'Eddy Fred']);
    Post::factory(5)->create(['user_id' => $user4->id]);
  }
}
