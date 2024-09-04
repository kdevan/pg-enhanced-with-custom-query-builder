<?php

namespace Tests\Feature;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class QueryBuilderTest extends TestCase
{
    use RefreshDatabase;

    public function test_the_custom_query_builder_with_tpetry_builder(): void
    {
        $user = User::create([
            'name' => 'hello',
            'email' => 'hello@hello.com',
            'password' => 'secret',
        ]);

        $user = User::query()->customQuery()->first();

        $this->assertDatabaseHas('users', [
            'email' => $user->email
        ]);
    }

    public function test_the_custom_query_builder_with_eloquent_builder(): void
    {
        $comment = Comment::create([
            'comment' => 'hello there', 
            'is_visible' => true
        ]);

        $comment = Comment::query()->customQuery()->first();

        $this->assertDatabaseHas('comments', [
            'id' => $comment->id
        ]);
    }
}
