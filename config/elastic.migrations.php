<?php

return [
    'table' => env('ELASTIC_MIGRATIONS_TABLE', 'elastic_migrations'),
    'directory' => env('ELASTIC_MIGRATIONS_DIRECTORY', base_path('elastic/migrations'))
];