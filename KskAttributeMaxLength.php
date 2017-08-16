<?php

namespace KskAttributeMaxLength;

use Enlight_Controller_Action;
use Enlight_Event_EventArgs;
use Shopware\Components\Plugin;

/**
 * Class KskAttributeMaxLength
 * @package KskAttributeMaxLength
 */
class KskAttributeMaxLength extends Plugin
{
    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            'Enlight_Controller_Action_PostDispatchSecure_Backend' => 'addTemplateDir',
        ];
    }

    /**
     * @param Enlight_Event_EventArgs $args
     */
    public function addTemplateDir(Enlight_Event_EventArgs $args)
    {
        /** @var Enlight_Controller_Action $controller */
        $controller = $args->get('subject');
        $view = $controller->View();

        $config = $this->container->get('shopware.plugin.config_reader')->getByPluginName($this->getName());
        $view->assign('ksk_attribute_max_length', $config);

        $view->addTemplateDir(implode(DIRECTORY_SEPARATOR, [$this->getPath(), 'Resources', 'views']));
        $view->extendsTemplate(implode(DIRECTORY_SEPARATOR, ['backend', 'plugins', 'ksk_attribute_max_length', 'header.tpl']));
    }
}
