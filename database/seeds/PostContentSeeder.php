<?php
use App\Tag;
use App\Post;
use App\Category;
use Illuminate\Database\Seeder;

class PostContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category1 = Category::create([
            'name' => 'Empresa'
        ]);

        $category2 = Category::create([
            'name' => 'Anuncios'
        ]);

        $post1 = Post::create([
            'title' => 'Titulo del Articulo1',
            'description' => '',
            'contenido' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'category_id' =>$category1->id,
            'image' => 'posts/1.jpg'
        ]);
        
        $post2 = Post::create([
            'title' => 'Titulo del Articulo2',
            'description' => '',
            'contenido' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'category_id' =>$category2->id,
            'image' => 'posts/2.jpg'
        ]);

        $post3 = Post::create([
            'title' => 'Titulo del Articulo3',
            'description' => '',
            'contenido' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'category_id' => $category2->id,
            'image' => 'posts/3.jpg'
        ]);
        
        $post4 = Post::create([
            'title' => 'Titulo del Articulo4',
            'description' => '',
            'contenido' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'category_id' => $category1->id,
            'image' => 'posts/4.jpg'
        ]);

        $post5 = Post::create([
            'title' => 'Titulo del Articulo5',
            'description' => '',
            'contenido' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'category_id' => $category2->id,
            'image' => 'posts/5.jpg'
        ]);

        $post6 = Post::create([
            'title' => 'Titulo del Articulo6',
            'description' => '',
            'contenido' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'category_id' => $category1->id,
            'image' => 'posts/6.jpg'
        ]);

        $post7 = Post::create([
            'title' => 'Titulo del Articulo7',
            'description' => '',
            'contenido' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'category_id' => $category2->id,
            'image' => 'posts/7.jpg'
        ]);

        $post8 = Post::create([
            'title' => 'Titulo del Articulo8',
            'description' => '',
            'contenido' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'category_id' => $category1->id,
            'image' => 'posts/8.jpg'
        ]);

        $post9 = Post::create([
            'title' => 'Titulo del Articulo9',
            'description' => '',
            'contenido' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'category_id' => $category2->id,
            'image' => 'posts/9.png'
        ]);

        $tag1 = Tag::create([
            'name' => 'DGII'
        ]);
        $tag2 = Tag::create([
            'name' => 'Trabajo'
        ]);
        $tag3 = Tag::create([
            'name' => 'Experiencias'
        ]);

        $post1->tags()->attach([$tag1->id, $tag2->id]);
        $post2->tags()->attach([$tag2->id, $tag3->id]);
        $post3->tags()->attach([$tag2->id, $tag1->id]);
        $post4->tags()->attach([$tag1->id, $tag2->id]);
        $post5->tags()->attach([$tag2->id, $tag3->id]);
        $post6->tags()->attach([$tag3->id, $tag1->id]);
        $post7->tags()->attach([$tag1->id, $tag2->id]);
        $post8->tags()->attach([$tag2->id, $tag3->id]);
        $post9->tags()->attach([$tag3->id, $tag1->id]);
    }
}
