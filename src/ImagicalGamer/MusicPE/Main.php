<?php
namespace ImagicalGamer\MusicPE;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\math\Vector3;
use pocketmine\network\protocol\LevelEventPacket;
use pocketmine\level\sound\GenericSound;
class Main extends PluginBase implements Listener{
  public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }
public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
        if($cmd->getName() == "listen"){
        $sender->getLevel()->addSound(new PopSound($player));
        $sender->getLevel()->addSound(new PopSound($player));
        $sender->getLevel()->addSound(new PopSound($player));
        $sender->getLevel()->addSound(new PopSound($player));
        $sender->getLevel()->addSound(new PopSound($player));
        $sender->getLevel()->addSound(new PopSound($player));
        $sender->getLevel()->addSound(new PopSound($player));
        $sender->getLevel()->addSound(new PopSound($player));

}
}
}
