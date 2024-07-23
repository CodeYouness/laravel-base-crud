<?php

namespace Database\Seeders;

use App\Models\Animal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


    public function run(): void
    {

        $animals = [
           [
               'common_name' => 'Leone',
               'scientific_name' => 'Panthera leo',
               'habitat' => 'Savana',
               'class' => 'Mammiferi',
               'family' => 'Felidi',
               'average_life' => 14,
               'average_weight' => 190,
               'image' => 'https://upload.wikimedia.org/wikipedia/commons/7/73/Lion_waiting_in_Namibia.jpg'
           ],
           [
               'common_name' => 'Elefante Africano',
               'scientific_name' => 'Loxodonta africana',
               'habitat' => 'Savana, Foresta',
               'class' => 'Mammiferi',
               'family' => 'Elephantidae',
               'average_life' => 60,
               'average_weight' => 5000,
               'image' => 'https://upload.wikimedia.org/wikipedia/commons/3/37/African_Bush_Elephant.jpg'
           ],
           [
               'common_name' => 'Tigre del Bengala',
               'scientific_name' => 'Panthera tigris tigris',
               'habitat' => 'Foresta',
               'class' => 'Mammiferi',
               'family' => 'Felidi',
               'average_life' => 15,
               'average_weight' => 220,
               'image' => 'https://upload.wikimedia.org/wikipedia/commons/3/3b/Bengal_tiger_at_India.jpg'
           ],
           [
               'common_name' => 'Orso Polare',
               'scientific_name' => 'Ursus maritimus',
               'habitat' => 'Artico',
               'class' => 'Mammiferi',
               'family' => 'Ursidae',
               'average_life' => 25,
               'average_weight' => 450,
               'image' => 'https://upload.wikimedia.org/wikipedia/commons/e/e8/Polar_Bear_-_Alaska.jpg'
           ],
           [
               'common_name' => 'Canguro Rosso',
               'scientific_name' => 'Macropus rufus',
               'habitat' => 'Savana, Deserto',
               'class' => 'Mammiferi',
               'family' => 'Macropodidae',
               'average_life' => 22,
               'average_weight' => 85,
               'image' => 'https://upload.wikimedia.org/wikipedia/commons/f/fe/Red_kangaroo_arp.jpg'
           ],
           [
               'common_name' => 'Giraffa',
               'scientific_name' => 'Giraffa camelopardalis',
               'habitat' => 'Savana',
               'class' => 'Mammiferi',
               'family' => 'Giraffidae',
               'average_life' => 25,
               'average_weight' => 1192,
               'image' => 'https://upload.wikimedia.org/wikipedia/commons/9/9f/Giraffe_standing.jpg'
           ],
           [
               'common_name' => 'Pinguino Imperatore',
               'scientific_name' => 'Aptenodytes forsteri',
               'habitat' => 'Antartide',
               'class' => 'Uccelli',
               'family' => 'Spheniscidae',
               'average_life' => 20,
               'average_weight' => 30,
               'image' => 'https://upload.wikimedia.org/wikipedia/commons/7/7e/Emperor_Penguin_Manchot_empereur.jpg'
           ],
           [
               'common_name' => 'Koala',
               'scientific_name' => 'Phascolarctos cinereus',
               'habitat' => 'Foresta di Eucalipto',
               'class' => 'Mammiferi',
               'family' => 'Phascolarctidae',
               'average_life' => 15,
               'average_weight' => 12,
               'image' => 'https://upload.wikimedia.org/wikipedia/commons/e/e7/Koala_climbing_tree.jpg'
           ],
           [
               'common_name' => 'Coccodrillo del Nilo',
               'scientific_name' => 'Crocodylus niloticus',
               'habitat' => 'Fiumi, Laghi',
               'class' => 'Rettili',
               'family' => 'Crocodylidae',
               'average_life' => 70,
               'average_weight' => 500,
               'image' => 'https://upload.wikimedia.org/wikipedia/commons/4/4b/NileCrocodile.JPG'
           ],
           [
               'common_name' => 'Ippopotamo',
               'scientific_name' => 'Hippopotamus amphibius',
               'habitat' => 'Fiumi, Laghi',
               'class' => 'Mammiferi',
               'family' => 'Hippopotamidae',
               'average_life' => 50,
               'average_weight' => 1500,
               'image' => 'https://upload.wikimedia.org/wikipedia/commons/0/0c/Hippopotamus_amphibius_in_South_Luangwa_National_Park.jpg'
           ],
           [
               'common_name' => 'Ghepardo',
               'scientific_name' => 'Acinonyx jubatus',
               'habitat' => 'Savana',
               'class' => 'Mammiferi',
               'family' => 'Felidi',
               'average_life' => 12,
               'average_weight' => 72,
               'image' => 'https://upload.wikimedia.org/wikipedia/commons/1/1f/Cheetah_Kruger.jpg'
           ],
           [
               'common_name' => 'Panda Gigante',
               'scientific_name' => 'Ailuropoda melanoleuca',
               'habitat' => 'Foresta di Bambù',
               'class' => 'Mammiferi',
               'family' => 'Ursidae',
               'average_life' => 20,
               'average_weight' => 100,
               'image' => 'https://upload.wikimedia.org/wikipedia/commons/0/0f/Grosser_Panda.JPG'
           ],
           [
               'common_name' => 'Orangutan',
               'scientific_name' => 'Pongo pygmaeus',
               'habitat' => 'Foresta Pluviale',
               'class' => 'Mammiferi',
               'family' => 'Hominidae',
               'average_life' => 35,
               'average_weight' => 70,
               'image' => 'https://upload.wikimedia.org/wikipedia/commons/b/b6/Orang_Utan%2C_Male.jpg'
           ],
           [
               'common_name' => 'Cammello',
               'scientific_name' => 'Camelus dromedarius',
               'habitat' => 'Deserto',
               'class' => 'Mammiferi',
               'family' => 'Camelidae',
               'average_life' => 40,
               'average_weight' => 600,
               'image' => 'https://upload.wikimedia.org/wikipedia/commons/7/7f/Camel_in_dubai.jpg'
           ],
           [
               'common_name' => 'Zebra di Grant',
               'scientific_name' => 'Equus quagga boehmi',
               'habitat' => 'Savana',
               'class' => 'Mammiferi',
               'family' => 'Equidae',
               'average_life' => 25,
               'average_weight' => 320,
               'image' => 'https://upload.wikimedia.org/wikipedia/commons/5/5a/Grant%27s_Zebra.jpg'
           ],
           [
               'common_name' => 'Lemure Catta',
               'scientific_name' => 'Lemur catta',
               'habitat' => 'Foresta',
               'class' => 'Mammiferi',
               'family' => 'Lemuridae',
               'average_life' => 18,
               'average_weight' => 3,
               'image' => 'https://upload.wikimedia.org/wikipedia/commons/f/fd/MakiCatta1.jpg'
           ],
           [
               'common_name' => 'Cobra Reale',
               'scientific_name' => 'Ophiophagus hannah',
               'habitat' => 'Foresta',
               'class' => 'Rettili',
               'family' => 'Elapidae',
               'average_life' => 20,
               'average_weight' => 6,
               'image' => 'https://upload.wikimedia.org/wikipedia/commons/4/41/King_Cobra.jpg'
           ],
           [
               'common_name' => 'Aquila Reale',
               'scientific_name' => 'Aquila chrysaetos',
               'habitat' => 'Montagna',
               'class' => 'Uccelli',
               'family' => 'Accipitridae',
               'average_life' => 30,
               'average_weight' => 6,
               'image' => 'https://upload.wikimedia.org/wikipedia/commons/2/27/Aquila_chrysaetos_-_01.jpg'
           ],
           [
               'common_name' => 'Lupo Grigio',
               'scientific_name' => 'Canis lupus',
               'habitat' => 'Foresta, Tundra',
               'class' => 'Mammiferi',
               'family' => 'Canidae',
               'average_life' => 16,
               'average_weight' => 40,
               'image' => 'https://upload.wikimedia.org/wikipedia/commons/e/e2/Canis_lupus_laying_in_grass.jpg'
           ],
           [
               'common_name' => 'Rinoceronte Bianco',
               'scientific_name' => 'Ceratotherium simum',
               'habitat' => 'Savana',
               'class' => 'Mammiferi',
               'family' => 'Rhinocerotidae',
               'average_life' => 40,
               'average_weight' => 2300,
               'image' => 'https://upload.wikimedia.org/wikipedia/commons/3/3c/White_Rhinoceros.jpg'
           ],
           [
               'common_name' => 'Giaguaro',
               'scientific_name' => 'Panthera onca',
               'habitat' => 'Foresta Pluviale',
               'class' => 'Mammiferi',
               'family' => 'Felidi',
               'average_life' => 12,
               'average_weight' => 95,
               'image' => 'https://upload.wikimedia.org/wikipedia/commons/3/3a/Jaguar.jpg'
           ],
           [
               'common_name' => 'Scimpanzé',
               'scientific_name' => 'Pan troglodytes',
               'habitat' => 'Foresta',
               'class' => 'Mammiferi',
               'family' => 'Hominidae',
               'average_life' => 40,
               'average_weight' => 50,
               'image' => 'https://upload.wikimedia.org/wikipedia/commons/1/10/Chimpanzee-Head.jpg'
           ],
           [
               'common_name' => 'Tartaruga Marina',
               'scientific_name' => 'Chelonia mydas',
               'habitat' => 'Oceano',
               'class' => 'Rettili',
               'family' => 'Cheloniidae',
               'average_life' => 80,
               'average_weight' => 150,
               'image' => 'https://upload.wikimedia.org/wikipedia/commons/7/7f/Green_turtle_swimming_over_coral_reefs_in_Kona.jpg'
           ],
           [
               'common_name' => 'Fenicottero',
               'scientific_name' => 'Phoenicopterus roseus',
               'habitat' => 'Zone Umide',
               'class' => 'Uccelli',
               'family' => 'Phoenicopteridae',
               'average_life' => 30,
               'average_weight' => 3,
               'image' => 'https://upload.wikimedia.org/wikipedia/commons/9/9e/Fenicottero_roseo_(Phoenicopterus_roseus)_Juvenile.jpg'
           ],
           [
               'common_name' => 'Puma',
               'scientific_name' => 'Puma concolor',
               'habitat' => 'Montagna, Foresta',
               'class' => 'Mammiferi',
               'family' => 'Felidi',
               'average_life' => 12,
               'average_weight' => 80,
               'image' => 'https://upload.wikimedia.org/wikipedia/commons/3/3a/Cougar_at_the_Wildlife_Images_Rehabilitation_and_Education_Center.jpg'
           ],
           [
               'common_name' => 'Lupo Rosso',
               'scientific_name' => 'Canis rufus',
               'habitat' => 'Foresta, Palude',
               'class' => 'Mammiferi',
               'family' => 'Canidae',
               'average_life' => 14,
               'average_weight' => 35,
               'image' => 'https://upload.wikimedia.org/wikipedia/commons/8/8a/Red_Wolf.jpg'
           ],
           [
               'common_name' => 'Ibis Scarlatto',
               'scientific_name' => 'Eudocimus ruber',
               'habitat' => 'Zone Umide',
               'class' => 'Uccelli',
               'family' => 'Threskiornithidae',
               'average_life' => 20,
               'average_weight' => 1,
               'image' => 'https://upload.wikimedia.org/wikipedia/commons/1/11/Eudocimus_ruber_%28aka%29.jpg'
           ],
           [
               'common_name' => 'Suricata',
               'scientific_name' => 'Suricata suricatta',
               'habitat' => 'Deserto',
               'class' => 'Mammiferi',
               'family' => 'Herpestidae',
               'average_life' => 12,
               'average_weight' => 1,
               'image' => 'https://upload.wikimedia.org/wikipedia/commons/0/0c/Suricata_suricatta_at_Helsinki_Korkeasaari_Zoo.jpg'
           ],
           [
               'common_name' => 'Delfino Comune',
               'scientific_name' => 'Delphinus delphis',
               'habitat' => 'Oceano',
               'class' => 'Mammiferi',
               'family' => 'Delphinidae',
               'average_life' => 30,
               'average_weight' => 80,
               'image' => 'https://upload.wikimedia.org/wikipedia/commons/6/68/Common_dolphin_noaa.jpg'
           ],
           [
               'common_name' => 'Lince Rossa',
               'scientific_name' => 'Lynx rufus',
               'habitat' => 'Foresta',
               'class' => 'Mammiferi',
               'family' => 'Felidi',
               'average_life' => 12,
               'average_weight' => 14,
               'image' => 'https://upload.wikimedia.org/wikipedia/commons/2/2f/Bobcat2.jpg'
           ],
           [
               'common_name' => 'Tucano Toco',
               'scientific_name' => 'Ramphastos toco',
               'habitat' => 'Foresta Pluviale',
               'class' => 'Uccelli',
               'family' => 'Ramphastidae',
               'average_life' => 18,
               'average_weight' => 0.6,
               'image' => 'https://upload.wikimedia.org/wikipedia/commons/0/0e/Ramphastos_toco_-Birdworld%2C_Farnham%2C_Surrey%2C_England-8a.jpg'
           ],
           [
               'common_name' => 'Cervone Elaphe',
               'scientific_name' => 'Elaphe quatuorlineata',
               'habitat' => 'Foresta',
               'class' => 'Rettili',
               'family' => 'Colubridae',
               'average_life' => 20,
               'average_weight' => 3,
               'image' => 'https://upload.wikimedia.org/wikipedia/commons/5/57/Elaphe_quatuorlineata.jpg'
           ],
           [
               'common_name' => 'Pavone Indiano',
               'scientific_name' => 'Pavo cristatus',
               'habitat' => 'Foresta',
               'class' => 'Uccelli',
               'family' => 'Phasianidae',
               'average_life' => 20,
               'average_weight' => 4,
               'image' => 'https://upload.wikimedia.org/wikipedia/commons/4/49/Peacock_Plumage.jpg'
           ]
       ];
        foreach ($animals as $animal) {
            Animal::create($animal);
        }

    }
}