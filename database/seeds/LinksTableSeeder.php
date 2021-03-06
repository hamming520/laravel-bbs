<?php

use Illuminate\Database\Seeder;
use App\Models\Link;

class LinksTableSeeder extends Seeder
{
    public function run()
    {
        $faker = app(Faker\Generator::class);

        // 图标假数据
        $icons = [
            config('app.url') . '/images/default-avatar.jpeg',
        ];

        // 生成数据集合
        $links = factory(Link::class)->times(6)->make()->each(function ($link, $index) use ($faker, $icons) {
            $link->icon = $faker->randomElement($icons);
        });

        // 将数据集合转换为数组，并插入到数据库中
        Link::insert($links->toArray());
    }
}
