<?php
namespace Tool\BaseFiles;

use Tool\Loader;
use pocketmine\event\plugin\PluginEvent;

abstract class BaseCustomEvent extends PluginEvent{
    /** @var BaseAPI */
    private $api;

    /**
     * @param BaseAPI $api
     */
    public function __construct(BaseAPI $api){
        parent::__construct($api->getToolPlugin());
        $this->api = $api;
    }

    /**
     * @return Loader
     */
    public final function getPlugin(): Loader{
        return $this->getAPI()->getToolPlugin();
    }

    /**
     * @return BaseAPI
     */
    public final function getAPI(): BaseAPI{
        return $this->api;
    }
}