<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if( !function_exists('get_random_name') ) {

    //ToDo: Instead of getting random names from the set we can use PHP Faker for that to get random user name
    function get_random_name() {
        $names = array(
            'Johnny Depp',
            'Al Pacino',
            'Kevin Spacey',
            'Russell Crowe',
            'Brad Pitt',
            'Angelina Jolie',
            'Leonardo DiCaprio',
            'Tom Cruise',
            'Arnold Schwarzenegger',
            'Sylvester Stallone',
            'Kate Winslet',
            'Christian Bale',
            'Morgan Freeman',
            'Keanu Reeves',
            'Hugh Jackman',
            'Bruce Willis',
            'Charlize Theron',
            'Will Smith',
            'Vin Diesel',
            'George Clooney',
            'Megan Fox'
        );
        return $names[rand ( 0 , count($names) -1)];
    }

}

?>