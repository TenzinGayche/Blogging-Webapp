<?php

namespace Database\Seeders;
use App\Models\Category;
use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Category::truncate();
        Post::truncate();
        
        Post::factory(5)->create();
//        $personal= Category::create([
//             'name' => 'Personal',
//             'slug' => 'personal',
//         ]);
//         $family=Category::create([
//             'name' => 'Family',
//             'slug' => 'family',
//         ]);
//         $work=Category::create([
//             'name' => 'Work',
//             'slug' => 'work',
//         ]);
//         Post::create([
//             'user_id'=>$user->id,
//             'category_id'=>$personal->id,
            
//             'title' => 'Personal blog',
//             'slug' => 'personal_blog',
//             'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis veniam obcaecati harum. In, id eaque fuga deserunt tempora voluptatibus iste inventore velit itaque dignissimos. Nesciunt cumque id alias obcaecati consectetur! Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio itaque ratione ad quae, ut velit repellendus cupiditate repudiandae autem sit quia amet neque dolorem, a aliquam corrupti eius dolor?',
//             'body'=>'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pain</p>\n       <p\n',
//         ]);
    
//     Post::create([
//         'user_id'=>$user->id,
//         'category_id'=>$work->id,
        
//         'title' => 'Work blog',
//         'slug' => 'work_blog',
//         'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis veniam obcaecati harum. In, id eaque fuga deserunt tempora voluptatibus iste inventore velit itaque dignissimos. Nesciunt cumque id alias obcaecati consectetur! Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio itaque ratione ad quae, ut velit repellendus cupiditate repudiandae autem sit quia amet neque dolorem, a aliquam corrupti eius dolor?',
//         'body'=>'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pain</p>\n       <p\n',
//     ]);
//     Post::create([
//         'user_id'=>$user->id,
//         'category_id'=>$family->id,
        
//         'title' => 'Family blog',
//         'slug' => 'family_blog',
//         'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis veniam obcaecati harum. In, id eaque fuga deserunt tempora voluptatibus iste inventore velit itaque dignissimos. Nesciunt cumque id alias obcaecati consectetur! Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate odio itaque ratione ad quae, ut velit repellendus cupiditate repudiandae autem sit quia amet neque dolorem, a aliquam corrupti eius dolor?',
//         'body'=>'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pain</p>\n       <p\n',
//     ]);
 }
}
