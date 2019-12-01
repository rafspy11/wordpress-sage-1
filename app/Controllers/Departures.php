<?php

namespace App\Controllers;

use Sober\Controller\Controller;

use WP_Query;

class Departures extends Controller
{
    public function getDepartures()
    {
        // $args = array(
        //     'post_type' => array( 'departures' ),
        //     'posts_per_page' => -1
        // );
        // $query = new WP_Query( $args );

        $items = get_posts([
            'post_type' => array( 'departures' ),
            'posts_per_page' => -1
        ]);

        // return array_map(function ($post) {
        //     return apply_filters('the_content', $post->post_content);
        // }, $items);

        return $items;

        // return $query;
    }

    public function test()
    {
        $resp = 'Hello World';

        return $resp;
    }
}
