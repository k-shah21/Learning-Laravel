<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Jobs
{
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Programming',
                'salary' => '$55,000',
            ],
            [
                'id' => 2,
                'title' => 'Data Science',
                'salary' => '$75,000',
            ],
        ];
    }

    public static function find(int $id): array
    {


        $jobs =  Arr::first(static::all(), fn($job) => $job['id'] === $id);


        if (!$jobs) {
            return abort(404);
        }
        return $jobs;
    }
}
