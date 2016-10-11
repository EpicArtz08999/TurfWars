<?php

namespace TurfWars;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\CommandExecutor;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat as TF;
use pocketmine\Player;
use pocketmine\Server;

class Main extends PluginBase implements Listener {
    
    public $blocks;
    public $commands;
    
    public function onEnable() {
        $this->getServer()->getPluginManager()->registerEvents(new EventsListener ($this), $this);
        
    }
}

