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

use yii\helpers\BaseHtml;

/**
 * @author    Belniak Media, Inc.
 * @package   belniakmedia/craft-gravatar
 * @since     1.0.0
 */
class Img extends Url
{
    /**
     * Get either a Gravatar URL or complete image tag for a specified email address.
     *
     * @param string $email
     * @param array $criteria
     * @param array $attributes
     * @return string
     */
    public function get(string $email, array $criteria = [], array $attributes = []): string
    {
        return BaseHtml::img(parent::get($email, $criteria, $attributes), $attributes);
    }
}
