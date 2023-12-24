<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $languages = array(
            [
                'name' => 'HTML',
                'icon' => '',
                'f_icon' => 'fab fa-html5',
                'shortname' => 'HTML',
            ],
            [
                'name' => 'CSS',
                'icon' => '',
                'f_icon' => 'fab fa-css3-alt',
                'shortname' => 'CSS',
            ],
            [
                'name' => 'JAVASCRIPT',
                'icon' => '',
                'f_icon' => 'fab fa-js',
                'shortname' => 'JAVASCRIPT',
            ],
            [
                'name' => 'JAVA',
                'icon' => '',
                'f_icon' => 'fab fa-java',
                'shortname' => 'JAVA',
            ],
            [
                'name' => 'PYTHON',
                'icon' => '',
                'f_icon' => 'fab fa-python',
                'shortname' => 'PYTHON',
            ],
            [
                'name' => 'PHP',
                'icon' => '',
                'f_icon' => 'fab fa-php',
                'shortname' => 'PHP',
            ],
            [
                'name' => '.NET',
                'icon' => '',
                'f_icon' => 'fab fa-battle-net',
                'shortname' => '.NET',
            ],
            [
                'name' => 'REACT',
                'icon' => '',
                'f_icon' => 'fab fa-html5',
                'shortname' => 'REACT',
            ],
            [
                'name' => 'VUE',
                'icon' => '',
                'f_icon' => 'fab fa-vuejs',
                'shortname' => 'VUE',
            ],
            [
                'name' => 'ANGULAR',
                'icon' => '',
                'f_icon' => 'fab fa-angular',
                'shortname' => 'ANGULAR',
            ],
            [
                'name' => 'LARAVEL',
                'icon' => '',
                'f_icon' => 'fab fa-laravel',
                'shortname' => 'LARAVEL',
            ],
        );

        foreach ($languages as $l) {
            $l['created_by']=1;
            Category::create($l);
        }
    }
}
