<?php
/**
 * Gravatar plugin for Craft CMS 4.x
 *
 * Adds gravatar support
 *
 * @link      https://github.com/BelniakMedia
 * @copyright Copyright (c) 2022 Belniak Media, Inc.
 */

namespace belniakmedia\gravatar;

use belniakmedia\gravatar\services\Url as UrlService;
use belniakmedia\gravatar\services\Img as ImgService;
use belniakmedia\gravatar\variables\GravatarVariable;
use belniakmedia\gravatar\models\Settings;

use Craft;
use craft\base\Model;
use craft\base\Plugin;
use craft\web\twig\variables\CraftVariable;

use yii\base\Event;

/**
 * Class Gravatar
 *
 * @author    Belniak Media, Inc.
 * @package   belniakmedia/craft-gravatar
 * @since     1.0.0
 *
 * @property  UrlService $url
 * @property  ImgService $img
 */
class Gravatar extends Plugin
{

    public static Gravatar $plugin;
    public string $schemaVersion = '1.0.0';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        self::$plugin = $this;

        Event::on(
            CraftVariable::class,
            CraftVariable::EVENT_INIT,
            function (Event $event) {
                /** @var CraftVariable $variable */
                $variable = $event->sender;
                $variable->set('gravatar', GravatarVariable::class);
            }
        );

        Craft::info(
            Craft::t(
                'gravatar-twig',
                '{name} plugin loaded',
                ['name' => $this->name]
            ),
            __METHOD__
        );
    }

    /**
     * @inheritdoc
     */
    protected function createSettingsModel(): ?Model
    {
        return new Settings();
    }

    /**
     * @inheritdoc
     */
    protected function settingsHtml(): string
    {
        return Craft::$app->view->renderTemplate(
            'gravatar/settings',
            [
                'settings' => $this->getSettings()
            ]
        );
    }
}
