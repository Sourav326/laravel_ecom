<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;


class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            ['title' =>'Home','slug' => 'home','status' => 'active'],
            ['title' =>'Shop','slug' => 'shop','status' => 'active'],
            ['title' =>'About us','slug' => 'about-us','status' => 'active'],
            ['title' =>'Services','slug' => 'services','status' => 'active'],
            ['title' =>'Blog','slug' => 'blog','status' => 'active'],
            ['title' =>'Contact Us','slug' => 'contact-us','status' => 'active'],
            ['title' =>'Products','slug' => 'products','status' => 'deactive'],
        ];
        foreach($items as $item)
        Menu::create([
            'title' => $item['title'],
            'slug' => $item['slug'],
            'status' => $item['status'],
        ]);
    }
}
