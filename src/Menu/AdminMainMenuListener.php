<?php

namespace App\Menu;

use Sylius\Bundle\UiBundle\Menu\Event\MenuBuilderEvent;

class AdminMainMenuListener
{
    public function addSupplierMenu(MenuBuilderEvent $event) : void
    {
        $configurationMenu = $event->getMenu()->getChild('configuration');
        $marketingMenu = $event->getMenu()->getChild('marketing');

        $configurationMenu
            ->addChild('suppliers',['route' => 'app_admin_supplier_index'])
            ->setLabel('app.ui.suppliers')
            ->setLabelAttribute('icon', 'adress card outline')
            ;

        $marketingMenu
            ->addChild('videogames',['route' => 'app_admin_videogame_index'])
            ->setLabel('app.ui.videogames')
            ->setLabelAttribute('icon', 'adress card outline')
        ;
    }
}
