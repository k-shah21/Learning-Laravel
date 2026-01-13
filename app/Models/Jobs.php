<?php

namespace App\Models;

class Jobs
{
    public static function all(): array
    {
        $jobs = [
            [
                'title' => 'Programing',
                'salary' =>   '$55.000',
            ],
            [
                'title' => 'Programing',
                'salary' =>   '$55.000',
            ],
            [
                'title' => 'Programing',
                'salary' =>   '$55.000',
            ]
        ];

        return $jobs;
    }
}
