<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            [
                'name' => 'Sant Cugat - Vallter 2000 Experience',
                'description' => 'El sábado 7 de Abril tendrá lugar la Carrera Cicloturista Sant Cugat-Valter en la que los participantes revivirán una de las etapas de al Vuelta a Cataluña 2018. Es una prueba no competitiva en la que lo importante no es el tiempo de recorrido sino la experiencia y el disfrute. Contará con un recorrido de 180 km y un desnivel de 3700 metros. ',
                'slope' => 3400,
                'map_image' => '',
                'maxim_participants' => 25,
                'km' => 180,
                'start_date' => '2023-05-25',
                'start_point' => '41.473782,2.084934999999973',
                'promotion_banner' => 'bannersImg/santcugatvallter2000.png',
                'sponsoring_money' => 500,
                'price' => 49.99,
            ],
            [
                'name' => 'Desafío 132 - Cicloturista',
                'description' => 'Prueba «libre» que cuenta con un sistema de cronometrado por chip. Lejos de ser una barrera se convierte en la mejor forma de satisfacer a todos los corredores. Cada uno marca su ritmo y termina dentro de sus posibilidades pero con la satisfacción de haber disfrutado.',
                'slope' => 1500,
                'map_image' => '',
                'maxim_participants' => 50,
                'km' => 132,
                'start_date' => '2023-05-26',
                'start_point' => '42.03039,-1.653715',
                'promotion_banner' => 'bannersImg/desafio132.png',
                'sponsoring_money' => 1000,
                'price' => 19.99,
            ],
            [
                'name' => 'Brevet 400 km. Linares - LAGUNAS DE RUIDERA',
                'description' => 'Ciclomaratón- Brevet Randonneur de 200 km.
                Homologada para poder inscribirse en la Super Brevet Marid Gijon Madrid
                Homologada para la obtención del diploma Randonneur 5000 y 10000
                Homologada para el campeonato nacional de Randonneur Españoles. Se trata de una Excursión personal, donde el organizador al final si se realiza según el reglamento certifica con una homologación haber realizado la prueba.
                Si se quiere tener un recuerdo de esta participación se debe solicitar y abonar una medalla que se dará o enviará a final de año',
                'slope' => 2936,
                'map_image' => '',
                'maxim_participants' => 50,
                'km' => 400,
                'start_date' => '2023-05-21',
                'start_point' => '38.09362,-3.635844',
                'promotion_banner' => 'bannersImg/brevet400km.png',
                'sponsoring_money' => 2500,
                'price' => 24.99,
            ],
            [
                'name' => 'Mallorca Cycling Xperience Pirenaica',
                'description' => 'Quieres Verlo?... Quieres Sentirlo? QUIERES VIVIRLO?

                ¿Por qué la gran mayoría de los equipos profesionales hacen su pretemporada en Mallorca? ¿Qué tiene esta isla que la hace tan interesante para el ciclismo, especialmente en primavera? La respuesta es sencilla: TODO
                
                Buenas carreteras con poco tráfico en esta época del año, infinidad de rutas, orografía muy diversa con la posibilidad de diseñar etapas absolutamente llanas para rodar, etapas rompe-piernas llenas de emboscadas y etapas de montaña. Y si esto está en un lugar precioso, con un clima buenísimo, y con estupendas instalaciones hoteleras, ¡¡lo tenemos todo!!
                
                Playa de Muro será nuestro campamento base. Estaremos instalados en el fantástico Hotel Iberostar Playa Muro**** y Hotel Iberostar Alcudia Park**** durante toda la semana (7 noches a media pensión). Por las mañanas a pedalear, y por las tardes a disfruta de la playa, de las instalaciones del hotel (piscinas, sauna, spa?), de un paseo junto al mar, o visitando las zonas comerciales. Una semana de bicicleta y relax en Mallorca.
                Como los profesionales!!
                
                Y puedes venir acompañado! ',
                'slope' => 7250,
                'map_image' => '',
                'maxim_participants' => 50,
                'km' => 740,
                'start_date' => '2023-05-19',
                'start_point' => '39.808032,3.116647',
                'promotion_banner' => 'bannersImg/xperiencePirenaica.png',
                'sponsoring_money' => 3500,
                'price' => 34.99,
            ],
            [
                'name' => 'Marcha Ciclodeportiva La Gamba',
                'description' => 'La prueba cicloturista se celebrará en la localidad de Dénia (Alicante) y las carreteras que recorren las poblaciones de Ondara, Benidoleig, Orba, Campell, Fleix, Benimaurell, Benigembla, Murla, Tormos, Sagra, Vall d’Ebo, Castells de Castells, Tarbena y Parcent, con salida y llegada en Dénia.

                La salida y meta estará situada en el aparcamiento Torrecremada en Dénia.
                
                Todos los corredores que quieran participar en la IV Marcha Ciclodeportiva La Gamba tienen que cumplir y aceptar el REGLAMENTO.',
                'slope' => 2630,
                'map_image' => '',
                'maxim_participants' => 500,
                'km' => 139,
                'start_date' => '2023-04-23',
                'start_point' => '38.8397598,0.0977513',
                'promotion_banner' => 'bannersImg/laGamba.png',
                'sponsoring_money' => 750,
                'price' => 39.99,
            ]
        ]);
    }
}
