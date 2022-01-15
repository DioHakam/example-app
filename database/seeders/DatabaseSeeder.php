<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Dio Hakam Dalu',
            'email'=> 'diohakamd@gmail.com',
            'password' => Hash::make('diohakamdalu')
        ]);

        Category::create([
            'name' => 'tech',
            'slug' => 'tech'
        ]);

        Category::create([
            'name' => 'sport',
            'slug' => 'sport'
        ]);

        Post::create([
            'category_id'   => 1,
            'user_id'       => 1,
            'title'         => 'Post Pertama',
            'slug'          => 'post-pertama',
            'short'         => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis,    quod. Voluptas saepe sed aperiam placeat officia vitae excepturi rerum dignissimos?',
            'body'          => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam dolores tempore minus quas! Quasi culpa iste veniam
repellat similique molestias, quas obcaecati itaque illum dolore. Sapiente necessitatibus voluptatum recusandae nemo
temporibus asperiores in vero illum cum. Reiciendis eius neque rerum provident odit quibusdam quidem enim itaque sed
nemo, architecto velit doloribus at accusantium voluptate mollitia ab fugit aut illum distinctio eum laborum modi.</p><p>Deserunt saepe ex a quis debitis neque tempore commodi fuga corrupti accusantium dignissimos sed enim, repudiandae
beatae nemo, labore magnam dolores, doloribus id totam quas et. Mollitia, soluta eaque. Aut, consequatur. Deleniti,
aliquid. Ad incidunt sint illum voluptatem hic corporis obcaecati ducimus, labore quidem doloribus blanditiis fugiat
excepturi. Veritatis placeat corrupti dolores odio amet itaque voluptatum aliquid maiores nulla, recusandae dolore
doloremque impedit deleniti totam! Illum vel sequi nisi minus quae culpa, ipsum vitae quos error eos beatae mollitia
accusantium aut dolor et odio molestiae facilis voluptate.</p>',
        ]);

        Post::create([
            'category_id'   => 1,
            'user_id'       => 1,
            'title'         => 'Post kedua',
            'slug'          => 'post-kedua',
            'short'         => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis,    quod. Voluptas saepe sed aperiam placeat officia vitae excepturi rerum dignissimos?',
            'body'          => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam dolores tempore minus quas! Quasi culpa iste veniam
repellat similique molestias, quas obcaecati itaque illum dolore. Sapiente necessitatibus voluptatum recusandae nemo
temporibus asperiores in vero illum cum. Reiciendis eius neque rerum provident odit quibusdam quidem enim itaque sed
nemo, architecto velit doloribus at accusantium voluptate mollitia ab fugit aut illum distinctio eum laborum modi.</p><p>Deserunt saepe ex a quis debitis neque tempore commodi fuga corrupti accusantium dignissimos sed enim, repudiandae
beatae nemo, labore magnam dolores, doloribus id totam quas et. Mollitia, soluta eaque. Aut, consequatur. Deleniti,
aliquid. Ad incidunt sint illum voluptatem hic corporis obcaecati ducimus, labore quidem doloribus blanditiis fugiat
excepturi. Veritatis placeat corrupti dolores odio amet itaque voluptatum aliquid maiores nulla, recusandae dolore
doloremque impedit deleniti totam! Illum vel sequi nisi minus quae culpa, ipsum vitae quos error eos beatae mollitia
accusantium aut dolor et odio molestiae facilis voluptate.</p>',
        ]);
        Post::create([
            'category_id'   => 2,
            'user_id'       => 1,
            'title'         => 'Post ketiga',
            'slug'          => 'post-ketiga',
            'short'         => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis,    quod. Voluptas saepe sed aperiam placeat officia vitae excepturi rerum dignissimos?',
            'body'          => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam dolores tempore minus quas! Quasi culpa iste veniam
repellat similique molestias, quas obcaecati itaque illum dolore. Sapiente necessitatibus voluptatum recusandae nemo
temporibus asperiores in vero illum cum. Reiciendis eius neque rerum provident odit quibusdam quidem enim itaque sed
nemo, architecto velit doloribus at accusantium voluptate mollitia ab fugit aut illum distinctio eum laborum modi.</p><p>Deserunt saepe ex a quis debitis neque tempore commodi fuga corrupti accusantium dignissimos sed enim, repudiandae
beatae nemo, labore magnam dolores, doloribus id totam quas et. Mollitia, soluta eaque. Aut, consequatur. Deleniti,
aliquid. Ad incidunt sint illum voluptatem hic corporis obcaecati ducimus, labore quidem doloribus blanditiis fugiat
excepturi. Veritatis placeat corrupti dolores odio amet itaque voluptatum aliquid maiores nulla, recusandae dolore
doloremque impedit deleniti totam! Illum vel sequi nisi minus quae culpa, ipsum vitae quos error eos beatae mollitia
accusantium aut dolor et odio molestiae facilis voluptate.</p>',
        ]);
    }
}
