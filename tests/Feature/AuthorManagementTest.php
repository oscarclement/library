<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Author;
use Carbon\Carbon;

class AuthorManagementTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function an_author_can_be_created() 
    {
        $this->withoutExceptionHandling();
        $this->post('/author', [
            'name' => 'Clem Aurthur',
            'dob' => '11/07/1985'
        ]);
        $author = Author::all();
        $this->assertCount(1, $author);
        $this->assertInstanceOf(Carbon::class, $author->first()->dob);
        $this->assertEquals('1985/07/11', $author->first()->dob->format('Y/d/m'));
    }
}
