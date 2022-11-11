<?php
    namespace App\Models;

    class listen {
        public static function all() {
            return [
                [
                    'id' => 1,
                    'naam' => 'Erkan',
                    'achternaam' => 'Aslantas',
                    'leeftijd' => '21',
                    'omschrijving' => 'Ik ben een software-developer.'
                ],
                [
                    'id' => 2,
                    'naam' => 'Eric',
                    'achternaam' => 'Kleist',
                    'leeftijd' => '22',
                    'omschrijving' => 'Ik ben een Film-maker.'
                ]
            ];
        }

        // deze methode bestaat al maar dit is voor oefening
        public static function vind($id) {
            // krijg all de informatie:
           $listen =  self::all();
            
           //loop door de gegevens
           foreach($listen as $item) {
                if($item['id'] == $id) {
                    return $item;
                }
           }
        }
    }
?>