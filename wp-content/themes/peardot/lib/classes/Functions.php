<?php


class Functions
{

    public static function createHref()
    {
        if (get_sub_field('url')) {
            the_sub_field('url');
        } elseif (get_sub_field('page')) {
            the_sub_field('page');
        } else {
            echo '';
        }
    }

}