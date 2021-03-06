<?php
namespace Grav\Plugin;
use \Grav\Common\Plugin;
use Grav\Common\Twig\Twig;
use RocketTheme\Toolbox\Event\Event;

class RomanPlugin extends Plugin
{
    public static function getSubscribedEvents()
    {
        return [
            'onTwigExtensions' => ['onTwigExtensions', 0],
        ];
    }
    public function onTwigExtensions()
    {
        require_once(__DIR__ . '/twig/RomanTwigExtension.php');
        $this->grav['twig']->twig->addExtension(new RomanTwigExtension());
    }
}
