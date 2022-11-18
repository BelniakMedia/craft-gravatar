<?php
/**
 * Gravatar plugin for Craft CMS 4.x
 *
 * Adds gravatar support
 *
 * @link      https://github.com/BelniakMedia
 * @copyright Copyright (c) 2022 Belniak Media, Inc.
 */

namespace belniakmedia\gravatar\services;

use Craft;
use craft\base\Component;
use craft\helpers\UrlHelper;
use belniakmedia\gravatar\Gravatar;

/**
 * @author    Belniak Media, Inc.
 * @package   belniakmedia/craft-gravatar
 * @since     1.0.0
 */
class Url extends Component
{
    // Public Methods
    // =========================================================================

    /**
     * Get either a Gravatar URL or complete image tag for a specified email address.
     * @param string $email
     * @param array $criteria
     * @param array $attributes
     * @return string
     */
    public function get(string $email, array $criteria = [], array $attributes = []): string
    {
        $email_hash = md5(strtolower(trim($email)));
        $url = Gravatar::$plugin->getSettings()->url . $email_hash;
        $default = ($criteria['d']) ?? Gravatar::$plugin->getSettings()->default;
        $size = ($criteria['s']) ?? Gravatar::$plugin->getSettings()->size;
        $rating = ($criteria['r']) ?? Gravatar::$plugin->getSettings()->rating;
        return UrlHelper::urlWithParams($url, ['s' => $size, 'r' => $rating, 'd' => $default]);
    }
}
