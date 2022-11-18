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
 * Gravatar config.php
 *
 * This file exists only as a template for the Gravatar settings.
 * It does nothing on its own.
 *
 * Don't edit this file, instead copy it to 'craft/config' as 'gravatar.php'
 * and make your changes there to override default settings.
 *
 * Once copied to 'craft/config', this file will be multi-environment aware as
 * well, so you can have different settings groups for each environment, just as
 * you do for 'general.php'
 */

return [

    "url" => "//www.gravatar.com/avatar/",

    /**
     * minimum: 1
     * maximum: 2048
     */
    "size" => "80",

    /**
     * g: suitable for display on all websites with any audience type.
     * pg: may contain rude gestures, provocatively dressed individuals, the lesser swear words, or mild violence.
     * r: may contain such things as harsh profanity, intense violence, nudity, or hard drug use.
     * x: may contain hardcore sexual imagery or extremely disturbing violence.
     */
    "rating" => "g",

    /** 
     * 404: do not load any image if none is associated with the email hash, instead return an HTTP 404 (File Not Found) response
     * mp: (mystery-person) a simple, cartoon-style silhouetted outline of a person (does not vary by email hash)
     * identicon: a geometric pattern based on an email hash
     * monsterid: a generated 'monster' with different colors, faces, etc
     * wavatar: generated faces with differing features and backgrounds
     * retro: awesome generated, 8-bit arcade-style pixelated faces
     * robohash: a generated robot with different colors, faces, etc
     * blank: a transparent PNG image (border added to HTML below for demonstration purposes)
     */
    "default" => "mp"

];
