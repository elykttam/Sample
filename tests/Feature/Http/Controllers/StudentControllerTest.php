<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Student;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StudentControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_can_view_listing(): void
    {
        $response = $this->get('/students');

        $response
            ->assertStatus(200);
    }

    public function test_can_create(): void
    {
        $response = $this->postJson('/students', $payload = [
            'first_name' => 'Kyle',
            'last_name' => 'Poblete',
            'middle_name' => 'Reyes',
            'birthdate' => '2003-08-15',
            'address_1' => 'Cavite',
        ]);

        $response
            ->assertCreated()
            ->assertJson($payload);
    }

    public function test_can_show(): void
    {
        $student = Student::factory()->create($payload = [
            'first_name' => 'Kyle',
            'last_name' => 'Poblete',
            'middle_name' => 'Reyes',
            'birthdate' => '2003-08-15',
            'address_1' => 'Cavite',
        ]);

        $response = $this->get('/students/' . $student->getKey());

        $response
            ->assertStatus(200)
            ->assertJson($payload);
    }

    public function test_can_update(): void
    {
        $student = Student::factory()->create([
            'first_name' => 'Kyle',
            'last_name' => 'Poblete',
            'middle_name' => 'Reyes',
            'birthdate' => '2003-08-15',
            'address_1' => 'Cavite',
        ]);

        $response = $this->putJson('/students/' . $student->getKey(), $payload = [
            'first_name' => 'Amanda',
            'last_name' => 'Sandagon',
            'middle_name' => 'Delica',
            'birthdate' => '2003-08-15',
            'address_1' => 'Cavite',
        ]);

        $response
            ->assertStatus(200)
            ->assertJson($payload);
    }

    public function test_can_delete(): void
    {
        $student = Student::factory()->create([
            'first_name' => 'Kyle',
            'last_name' => 'Poblete',
            'middle_name' => 'Reyes',
            'birthdate' => '2003-08-15',
            'address_1' => 'Cavite',
        ]);

        $response = $this->deleteJson('/students/' . $student->getKey());

        $response
            ->assertNoContent();
    }
}
