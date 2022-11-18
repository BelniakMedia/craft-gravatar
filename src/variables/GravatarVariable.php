<?php
/**
 * Gravatar plugin for Craft CMS 4.x
 *
 * Adds gravatar support
 *
 * @link      https://github.com/BelniakMedia
 * @copyright Copyright (c) 2022 Belniak Media, Inc.
 */

namespace belniakmedia\gravatar\variables;

use craft\helpers\Template;
use belniakmedia\gravatar\Gravatar;

/**
 * @author    Belniak Media, Inc.
 * @package   belniakmedia/craft-gravatar
 * @since     1.0.0
 */
class GravatarVariable
{
    // Public Methods
    // =========================================================================

    /**
     * gets get gravatar as plain url
     *
     * @param string $email
     * @param array $criteria
     * @return string
     */
    public function url(string $email, array $criteria = []): string
    {
        return Template::raw(Gravatar::$plugin->url->get($email, $criteria));
    }
    
    /**
     * gets get gravatar with img tag
     *
     * @param string $email
     * @param array $criteria
     * @param array $attributes
     * @return string
     */
    public function img(string $email, array $criteria = [], array $attributes = []): string
    {
        return Template::raw(Gravatar::$plugin->img->get($email, $criteria, $attributes));
    }
}
