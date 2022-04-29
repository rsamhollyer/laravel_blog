<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
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
    $post = Post::factory(5)->create(['user_id' => $user->id]);
    $comment = Comment::factory(5)->create();

    $user2 = User::factory()->create(['name' => 'Mary Sue']);
    $post2 = Post::factory(5)->create(['user_id' => $user2->id]);
    $comment2 = Comment::factory(5)->create();

    $user3 = User::factory()->create(['name' => 'Bobby Jo']);
    $post3 = Post::factory(5)->create(['user_id' => $user3->id]);
    $comment3 = Comment::factory(5)->create();

    $user4 = User::factory()->create(['name' => 'Eddy Fred']);
    $post4 = Post::factory(5)->create(['user_id' => $user4->id]);
    $comment4 = Comment::factory(5)->create();
  }
}
