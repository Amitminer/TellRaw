<?php

namespace AmitxD\TellRaw;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\player\Player;

class Main extends PluginBase implements Listener {

    public function onEnable() : void{
        $this->getLogger()->info("Tellraw enabled");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args): bool {
    if(strtolower($cmd->getName()) === "tellraw") {
        if(count($args) < 2) {
            $sender->sendMessage("§aUsage: /tellraw <player> <message>");
            return false;
        }
        $playerName = array_shift($args);
        $player = $this->getServer()->getPlayerExact($playerName);
        if($player === null) {
            $sender->sendMessage("§cPlayer not found!");
            return false;
        }
        $message = implode(" ", $args);
        if(empty($message)) {
            $sender->sendMessage("§cPlease enter the message you want to send.");
            return false;
        }
        $player->sendMessage($message);
        $sender->sendMessage("§6Message sent to " . $player->getName());
        return true;
    }
    return true;
}
}<?php

namespace AmitxD\TellRaw;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\player\Player;

class Main extends PluginBase implements Listener {

    public function onEnable() : void{
        $this->getLogger()->info("Tellraw enabled");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args): bool {
    if(strtolower($cmd->getName()) === "tellraw") {
        if(count($args) < 2) {
            $sender->sendMessage("§aUsage: /tellraw <player> <message>");
            return false;
        }
        $playerName = array_shift($args);
        $player = $this->getServer()->getPlayerExact($playerName);
        if($player === null) {
            $sender->sendMessage("§cPlayer not found!");
            return false;
        }
        $message = implode(" ", $args);
        if(empty($message)) {
            $sender->sendMessage("§cPlease enter the message you want to send.");
            return false;
        }
        $player->sendMessage($message);
        $sender->sendMessage("§6Message sent to " . $player->getName());
        return true;
    }
    return true;
}
}
