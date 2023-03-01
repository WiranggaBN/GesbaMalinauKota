<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Dari Timur",
            "slug" => "dari-timur",
            "title_image" => "Dari Timur",
            "body" => "Selimut Tabernakel terdiri dari dua selimut yang berukuran 20 x 28. Dalam
            Keluaran 26 : 23 Tirai digantung tepat dibawah pengait dari kain tutupan
            Tabernakel. Pengait-pengait itu mempersatukan 2 bagian besar dari kain
            penutup Tabernakel, yang masing-masing dibuat dari 5 bagian dari 4 hasta.
            Jadi tiap bagian dari tutupan itu lebarnya 20 hasta = 4 x 5 hasta. Kain
            tutupan pertama menutupi Tabernakel mulai dari pintu Kemah sampai pada Tirai
            atau 2/3 bagian daripada kemah sembahyang yang merupakan bagian Kamar Suci
            yaitu 20 hasta."
        ],
        [
            "title" => "Dari Timur ke Barat",
            "slug" => "dari-timur-ke-barat",
            "title_image" => "Dari Timur ke Barat",
            "body" => "cupiditate mollitia, voluptates beatae optio illo ad porro esse
            pariatur.Ducimus consectetur nam commodi repudiandae excepturi minus porro!
            Molestiaeerror voluptatibus similique odio, id dignissimos ipsum vel
            voluptate natusconsequuntur iste perspiciatis aut hic laboriosam laudantium
            assumenda. Quosveniam quam aspernatur at minima, fuga ipsam ab? Fugit,
            ratione. Cum."
        ]
    ];

    public static function all() 
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug) 
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
