<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function Classi(){

        $class = [
            [
                'Id' => 1,
                'Name' => 'Hero',
                'Level' => 7,
                'Vigor' => 14,
                'Mind' => 9,
                'Endurance' =>12,
                'Strength' => 16,
                'Dexterity' => 9,
                'Intelligence' => 7,
                'Faith' => 8,
                'Arcane' => 1,
                'img' => '/eldenring_img/class/hero.png'
                 
            ],
            [
                'Id' => 2,
                'Name' => 'Confessor',
                'Level' => 10,
                'Vigor' => 10,
                'Mind' => 13,
                'Endurance' => 10,
                'Strength' => 12,
                'Dexterity' => 12,
                'Intelligence' => 9,
                'Faith' => 14,
                'Arcane' => 9,
                'img' => '/eldenring_img/class/confessor.webp'
            ],
            [
                'Id' => 3,
                'Name' => 'Samurai',
                'Level' => 9,
                'Vigor' => 12,
                'Mind' => 11,
                'Endurance' => 13,
                'Strength' => 12,
                'Dexterity' => 15,
                'Intelligence' => 9,
                'Faith' => 8,
                'Arcane' => 8,
                'img' => '/eldenring_img/class/samurai.png'
            ],
           [
                'Id' => 4,
                'Name' => 'Wretch',
                'Level' => 10,
                'Vigor' => 10,
                'Endurance' => 10,
                'Strength' => 10,
                'Dexterity' => 10,
                'Intelligence' => 10,
                'Faith' => 10,
                'Arcane' => 10,
                'img' => '/eldenring_img/class/wretch.png'
           ],
        ];
    
    return view('classi', ['class' => $class]);
    }

    public function Pagina1(){
        return view('Pagina1');

    }

    public function welcome() {
        return view('welcome');
    }

     public function Pagina2(){
        return view('Pagina2');
    }

    public function showClass($classId){
   
        $class = [
            [
                'Id' => 1,
                'Name' => 'Hero',
                'Level' => 7,
                'Vigor' => 14,
                'Mind' => 9,
                'Endurance' =>12,
                'Strength' => 16,
                'Dexterity' => 9,
                'Intelligence' => 7,
                'Faith' => 8,
                'Arcane' => 1,
                'img' => '/eldenring_img/class/hero.png'
                 
            ],
    
            [
                'Id' => 2,
                'Name' => 'Confessor',
                'Level' => 10,
                'Vigor' => 10,
                'Mind' => 13,
                'Endurance' => 10,
                'Strength' => 12,
                'Dexterity' => 12,
                'Intelligence' => 9,
                'Faith' => 14,
                'Arcane' => 9,
                'img' => '/eldenring_img/class/confessor.webp'
            ],
            [
                'Id' => 3,
                'Name' => 'Samurai',
                'Level' => 9,
                'Vigor' => 12,
                'Mind' => 11,
                'Endurance' => 13,
                'Strength' => 12,
                'Dexterity' => 15,
                'Intelligence' => 9,
                'Faith' => 8,
                'Arcane' => 8,
                'img' => '/eldenring_img/class/samurai.png'
            ],
    
           [
                'Id' => 4,
                'Name' => 'Wretch',
                'Level' => 10,
                'Vigor' => 10,
                'Endurance' => 10,
                'Strength' => 10,
                'Dexterity' => 10,
                'Intelligence' => 10,
                'Faith' => 10,
                'Arcane' => 10,
                'img' => '/eldenring_img/class/wretch.png'
           ],
        ];
    
        foreach($class as $classi){
    
            if($classId == $classi['Id']){
                return view('show', ['classi' => $classi]);
            }
        }
        abort(404);
    
    }
}
