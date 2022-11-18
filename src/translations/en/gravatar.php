<?php
/**
 * Gravatar plugin for Craft CMS 4.x
 *
 * Adds gravatar support
 *
 * @link      https://github.com/BelniakMedia
 * @copyright Copyright (c) 2022 Belniak Media, Inc.
 */

/**
 * @author    Belniak Media, Inc.
 * @package   belniakmedia/craft-gravatar
 * @since     1.0.0
 */
return [
    'Gravatar plugin loaded' => 'Gravatar plugin loaded',

    //labels
    'url_label' => 'Gravatar URL',
    'size_label' => 'Avatar size (in PX)',
    'rating_label' => 'Avatar Rating',
    'default_label' => 'Default Avatar',

    //instructions
    'size_instructions' => 'Define the size for the gravatar',
    'rating_instructions' => 'Define the shown avatar based on the user self-rate value',
    'default_instructions' => 'Define the fallback, if no gravatar can be found.',

    //rating options
    'rating_option_g' => 'suitable for display on all websites with any audience type',
    'rating_option_pg' => 'may contain rude gestures, provocatively dressed individuals, the lesser swear words, or mild violence',
    'rating_option_r' => 'may contain such things as harsh profanity, intense violence, nudity, or hard drug use',
    'rating_option_x' => 'may contain hardcore sexual imagery or extremely disturbing violence',

    //default options
    'default_option_404' => 'do not load any image if none is associated with the email hash, instead return an HTTP 404 response',
    'default_option_mp' => '(mystery-person) a simple, cartoon-style silhouetted outline of a person (does not vary by email hash)',
    'default_option_identicon' => 'a geometric pattern based on an email hash',
    'default_option_monsterid' => 'a generated "monster" with different colors, faces, etc',
    'default_option_wavatar' => 'generated faces with differing features and backgrounds',
    'default_option_retro' => 'awesome generated, 8-bit arcade-style pixelated faces',
    'default_option_robohash' => 'a generated robot with different colors, faces, etc',
    'default_option_blank' => 'a transparent PNG image'
];
