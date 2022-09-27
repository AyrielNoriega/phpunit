<?php

namespace Tests\Feature\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\User;

class UserTest extends TestCase
{
    use RefreshDatabase;

    public function test_user()
    {
        //proseso antes de valdicion

        User::factory()->create([
            'email' => 'i@admin.com'
        ]);

        $this->assertDatabaseHas('users', [ //validar si existe i@admin.com
            'email' => 'i@admin.com'
        ]);

        $this->assertDatabaseMissing('users', [ //validar si el correo no@existe.com
            'email' => 'no@existe.com'
        ]);
    }
}
