<?php

namspace 2b2trespawn;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\Player;
//add more later

class Main extends PluginBase implements Listener{

  public function onEnable(){
     $this->getServer()->getPluginManager()->registerEvents($this,$this);
     $this->getLogger()->info("2b2tMCPE - Respawn ENABLED");
     }
 //TODO: Do respawn event in a 1000x1000 radius. Private or Public function?
