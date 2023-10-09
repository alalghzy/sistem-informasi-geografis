<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $postsData = [
            [
                'nama'      => 'Terumbu Karang A',
                'deskripsi' => 'Terumbu karang yang cantik nan keren',
                'latitude'  => '-3.83809251762342',
                'longitude' => '102.17922667477939',
            ],
            [
                'nama'      => 'Terumbu Karang B',
                'deskripsi' => 'Terumbu karang yang cantik nan keren',
                'latitude'  => '-3.837767360073512',
                'longitude' => '102.17917437170449',
            ],
            [
                'nama'      => 'Terumbu Karang C',
                'deskripsi' => 'Terumbu karang yang cantik nan keren',
                'latitude'  => '-3.83782484547381',
                'longitude' => '102.17984505764733',
            ],
            [
                'nama'      => 'Terumbu Karang D',
                'deskripsi' => 'Terumbu karang yang cantik nan keren',
                'latitude'  => '-3.8385688271250022',
                'longitude' => '102.1790028440104',
            ],
            [
                'nama'      => 'Terumbu Karang E',
                'deskripsi' => 'Terumbu karang yang cantik nan keren',
                'latitude'  => '-3.838690593840628',
                'longitude' => '102.18042441482778',
            ],
            [
                'nama'      => 'Terumbu Karang F',
                'deskripsi' => 'Terumbu karang yang cantik nan keren',
                'latitude'  => '-3.837495635962222',
                'longitude' => '102.18104332744043',
            ],
            [
                'nama'      => 'Terumbu Karang G',
                'deskripsi' => 'Terumbu karang yang cantik nan keren',
                'latitude'  => '-3.838542072668704',
                'longitude' => '102.18102979468024',
            ],
            [
                'nama'      => 'Terumbu Karang H',
                'deskripsi' => 'Terumbu karang yang cantik nan keren',
                'latitude'  => '-3.83791646120046',
                'longitude' => '102.18106362658075',
            ],
            [
                'nama'      => 'Terumbu Karang I',
                'deskripsi' => 'Terumbu karang yang cantik nan keren',
                'latitude'  => '-3.8377791866803026',
                'longitude' => '102.1798795100627',
            ],
            [
                'nama'      => 'Terumbu Karang J',
                'deskripsi' => 'Terumbu karang yang cantik nan keren',
                'latitude'  => '-3.8374686311270234',
                'longitude' => '102.18132751540477',
            ],
            [
                'nama'      => 'Terumbu Karang K',
                'deskripsi' => 'Terumbu karang yang cantik nan keren',
                'latitude'  => '-3.8387468590569482',
                'longitude' => '102.17826234521806',
            ],
            [
                'nama'      => 'Terumbu Karang L',
                'deskripsi' => 'Terumbu karang yang cantik nan keren',
                'latitude'  => '-3.837536143213424',
                'longitude' => '102.17808641933537',
            ],
            [
                'nama'      => 'Terumbu Karang M',
                'deskripsi' => 'Terumbu karang yang cantik nan keren',
                'latitude'  => '-3.8392126916472673',
                'longitude' => '102.1814019455859',
            ],
            [
                'nama'      => 'Terumbu Karang N',
                'deskripsi' => 'Terumbu karang yang cantik nan keren',
                'latitude'  => '-3.8373156037114238',
                'longitude' => '102.18157561600856',
            ],
            [
                'nama'      => 'Terumbu Karang O',
                'deskripsi' => 'Terumbu karang yang cantik nan keren',
                'latitude'  => '-3.83919468846009',
                'longitude' => '102.17864802888394',
            ]
        ];
        foreach($postsData as $postData ){
            Post::create($postData);
        }
    }
}
