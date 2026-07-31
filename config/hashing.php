<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Hash Driver
    |--------------------------------------------------------------------------
    |
    | This option controls the default hash driver that will be used to hash
    | passwords for your application. By default, the Argon2id algorithm is
    | used as it is memory-hard and resistant to GPU/ASIC cracking, which is
    | the current OWASP recommendation for password storage.
    |
    | Supported: "bcrypt", "argon", "argon2id"
    |
    */

    'driver' => env('HASH_DRIVER', 'argon2id'),

    /*
    |--------------------------------------------------------------------------
    | Bcrypt Options
    |--------------------------------------------------------------------------
    |
    | Kept as a fallback for hosts without the Argon2 (libsodium) extension.
    | A work factor of 10 is the OWASP minimum; 12 is used here for margin.
    |
    */

    'bcrypt' => [
        'rounds' => env('BCRYPT_ROUNDS', 12),
        'verify' => true,
        'limit' => null,
    ],

    /*
    |--------------------------------------------------------------------------
    | Argon Options
    |--------------------------------------------------------------------------
    |
    | OWASP Password Storage Cheat Sheet minimum configuration for Argon2id:
    | memory = 19456 KiB (19 MiB), time (iterations) = 2, threads (parallelism) = 1.
    |
    */

    'argon' => [
        'memory' => env('ARGON_MEMORY', 19456),
        'threads' => env('ARGON_THREADS', 1),
        'time' => env('ARGON_TIME', 2),
        'verify' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | Rehash On Login
    |--------------------------------------------------------------------------
    |
    | Existing bcrypt hashes are transparently upgraded to the current driver
    | (Argon2id) the next time a user successfully authenticates.
    |
    */

    'rehash_on_login' => true,

];
