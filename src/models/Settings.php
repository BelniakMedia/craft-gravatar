<?php
/**
 * Gravatar plugin for Craft CMS 4.x
 *
 * Adds gravatar support
 *
 * @link      https://github.com/BelniakMedia
 * @copyright Copyright (c) 2022 Belniak Media, Inc.
 */

namespace belniakmedia\gravatar\models;

use craft\base\Model;

/**
 * @author    Belniak Media, Inc.
 * @package   belniakmedia/craft-gravatar
 * @since     1.0.0
 */
class Settings extends Model
{

    public string $url = '//www.gravatar.com/avatar/';
    public string $size = '80';
    public string $rating = 'g';
    public string $default = 'mp';


    /**
     * @inheritdoc
     */
    public function rules(): array
    {
        return [
            ['url', 'string'],
            ['size', 'string'],
            ['rating', 'string'],
            ['default', 'string'],
        ];
    }
}
