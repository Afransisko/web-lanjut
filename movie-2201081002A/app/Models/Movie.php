<?php

namespace App\Models;

class Movie
{

    private static $movieData = [
        [
            'id' => 'tt1746090',
            'judul' => 'Equalizer 3',
            'sinopsis' => 'Robert McCall finds himself at home in Southern Italy but he discovers his friends are under the control of local crime bosses. As events turn deadly, McCall knows what he has to do: become his friends protector by taking on the mafia.',
            'tahun' => 20223,
            'pemain' => ['Denzel Washington', 'Dakota Fanning', 'Eugenio Mastrandrea', 'Rasis Hasibuan'],
            'foto_sampul' => 'equalizer.jpg',
            'rating' => '9,0'
        ],
        [
            'id' => 'tt2567856',
            'judul' => 'Mission: Impossible -',
            'sinopsis' => 'Ethan Hunt and his IMF team must track down a dangerous weapon before it falls into the wrong hands.',
            'tahun' => 2023,
            'pemain' => ['Tom Cruise', 'Hayley Atwell', 'Ving Rhames'],
            'foto_sampul' => 'mission-imposible.jpg',
        ],
        [
            'id' => 'tt1745564',
            'judul' => 'Openheimer',
            'sinopsis' => 'The story of American scientist, J. Robert Oppenheimer, and his role in the development of the atomic bomb.',
            'tahun' => 2023,
            'pemain' => ['	Cillian Murphy', 'Emily Blunt', 'Robert Downey Jr.'],
            'foto_sampul' => 'openheimer.jpg',
        ],
        [
            'id' => 'tt1745960',
            'judul' => 'Top Gun: Maverick',
            'sinopsis' => 'After thirty years, Maverick is still pushing the envelope as a top naval aviator, but must confront ghosts of his past when he leads TOP GUNs elite graduates on a mission that demands the ultimate sacrifice from those chosen to fly it.',
            'tahun' => 2022,
            'pemain' => ['Tom Cruise', 'Jennifer Connelly', 'Miles Teller'],
            'foto_sampul' => 'top-gun.jpg',
        ],
        [
            'id' => 'tt17458932',
            'judul' => 'Rescue Under fire',
            'sinopsis' => 'Rescue Under Fire (2017)The crew of a medical helicopter suffers an accident when division in Afghanistan. The Spanish army has only one night to organize the rescue of the crew and injured, but what seems routine turns into hell once they receive the order to rescue the helicopter as well. Things only get worse when during the night a huge a concentration of Talibans begin surround them.',
            'tahun' => 2017,
            'pemain' => ['Antoni Garrido', 'Ariadna Girl', 'Berta Hernandes'],
            'foto_sampul' => 'Rescue Under.jpg',
        ],
        [
            'id' => 'tt3794354',
            'judul' => 'Sonic the Hedgehog',
            'sinopsis' => 'The world needed a hero. It got a hedgehog. Powered with incredible speed, Sonic must stop the evil Dr. Robotnik from capturing Sonic and using his powers for world domination.',
            'tahun' => 2020,
            'pemain' => ['Jim Carrey', 'James Marsden', 'Ben Schwartz'],
            'foto_sampul' => 'sonic.jpg',
        ],
        [
            'id' => 'tt11391230',
            'judul' => 'Magikland',
            'sinopsis' => 'The story of a boy and his dream to become a great magician.',
            'tahun' => 2020,
            'pemain' => ['Seth Fedelin', 'Bea Alonzo', 'Mika Dela Cruz'],
            'foto_sampul' => 'magikland.jpg',
        ],
        [
            'id' => 'tt7126948',
            'judul' => 'Wonder Woman 1984',
            'sinopsis' => 'Diana must contend with a work colleague and businessman, whose desire for extreme wealth sends the world down a path of destruction, after an ancient artifact that grants wishes goes missing.',
            'tahun' => 2020,
            'pemain' => ['Gal Gadot', 'Chris Pine', 'Kristen Wiig'],
            'foto_sampul' => 'wonderwoman1984.jpg',
        ],
        [
            'id' => 'tt0903747',
            'judul' => 'Trangers',
            'sinopsis' => 'In a distant future, an archivist assembles a film on a long-lost year, as he looks back on the year when he had to live on 2020.',
            'tahun' => 2020,
            'pemain' => ['Raimonds Celms', 'Aleksandrs Ronis', 'Liene Znotina'],
            'foto_sampul' => 'order86.jpg',
        ],
        [
            'id' => 'tt8849880', 
            'judul' => 'The Swordsman',
            'sinopsis' => 'Three different swordsmen -- a swordsman who is going blind, the best swordsman in Joseon, and the best swordsman in China -- who come together for a single purpose.',
            'tahun' => 2020,
            'pemain' => ['Jang Hyuk', 'Man-sik Jeong', 'Hyun-Sung Jang'],
            'foto_sampul' => 'swordsman.jpg',
        ],
        [
            'id' => 'tt12459532', 
            'judul' => 'The Streetz 2',
            'sinopsis' => 'Mr. Slush is a new teacher at the streetwise Roosevelt High School, whose passions are cars, girls, and Banging music. When he discovers that the kids have their own version of street car',
            'tahun' => 2020,
            'pemain' => ['Simeon Henderson', 'Shaquita Smith', 'Khalimah Gaston'],
            'foto_sampul' => 'streetz2.jpg',
        ],
        [
            'id' => 'tt10195676', 
            'judul' => 'Torbaaz',
            'sinopsis' => 'A man rises from personal tragedy to lead a group of children from a refugee camp to victory, transforming their lives through the game of cricket.',
            'tahun' => 2020,
            'pemain' => ['Sanjay Dutt', 'Nargis Fakhri', 'Rahul Dev'],
            'foto_sampul' => 'torbaaz.jpg',
        ],
        
    ];

    public static function all(){
        // pakai method collection
        return collect(self::$movieData);
    }

    public static function find($id){
        // panggil method all()
        $movie = static::all();
        return $movie->firstWhere('id', $id);
    }
}
