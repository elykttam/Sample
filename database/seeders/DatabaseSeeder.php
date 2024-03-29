<?php

namespace Database\Seeders;

use App\UserType;
use App\Models\Student;
use App\Models\StudentRegistration;
use App\Models\User;
use App\Models\Subject;
use App\Models\Post;
use App\Models\Tag;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    protected function seedMedia()
    {
        $student = Student::factory()->create();

        $student->media()->create([
            'name' => 'school_id.jpeg',
            'size' => 1024,
            'mime_type' => 'image/jpeg',
        ]);

        $postFour = Post::create([
            'title' => $title = 'Anrel talaga ang Team Darleng.',
            'slug' => Str::of($title)->slug('-'),
            'content' => fake()->paragraph(),
        ]);

        $postFour->media()->create([
            'name' => 'team_darleng_anrel.png',
            'size' => 2048,
            'mime_type' => 'image/png',
        ]);
    }
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->seedMedia();

        User::factory()->create([
            'email' => 'admin@mail.com',
            'type' => UserType::ADMIN->value,
        ]);

        User::factory(10)->create();
        Student::factory(500)
            ->has(Subject::factory()->count(10))
            ->create()
            ->each(function ($student) {
                StudentRegistration::factory()->create(['student_id' => $student->getKey()]);
            });

        $iot = Tag::create(['name' => 'IOT']);
        $tech = Tag::create(['name' => 'Technology']);
        $politics = Tag::create(['name' => 'Politics']);
        $sports = Tag::create(['name' => 'Sports']);
        $games = Tag::create(['name' => 'Games']);

        $postOne = Post::create([
            'title' => $title = 'What? Mango is better than Apple!',
            'slug' => Str::of($title)->slug('-'),
            'content' => fake()->paragraph(),
        ]);
        // to remove, just replace attach with detach
        $postOne->tags()->attach([
            $iot->getKey(),
            $tech->getKey(),
        ]);
        $postTwo = Post::create([
            'title' => $title = 'Philippines Senators are all GUILTY!',
            'slug' => Str::of($title)->slug('-'),
            'content' => fake()->paragraph(),
        ]);
        $postTwo->tags()->attach([
            $politics->getKey(),
        ]);
        $postThree = Post::create([
            'title' => $title = 'Clippers won the NBA 2024 Season!',
            'slug' => Str::of($title)->slug('-'),
            'content' => fake()->paragraph(),
        ]);
        $postThree->tags()->attach([
            $sports->getKey(),
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
