<?php

namespace skyss0fly\WordScrambler;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\player\Player;
class main extends PluginBase {

public function onLoad(): void {
$config = $this->getConfig();
  $this->saveDefaultConfig();
}
public function chatScramble() {
  $timer = $this->getConfig()->get("Timer"); 
  // ^ time till end of scramble
  $wordraw = $this->getConfig()->get("Words");
  $word = $wordraw->str_shuffle();
  $economy =  $this->getConfig()->get("MoneyRange");
  $delay = $this->getConfig()->get("Delay");
  // ^ time till next scramble
  while($timer > 0){
$this->getServer()->broadcastMessage("New Word to Scramble: " .  $word . "winner gets " . $economy)
}
  if ($timer === 0) {
timer();
    
  }

  }
}
  public function timer() {
    while($delay > 0) {
      return false;

  }
    if ($delay === 0) {
chatScramble();
    }
  }

public function reaction(Player $player) {
while($delay === 0 && $timer != 0) {
  if (Player instanceof player){
  $this->getLogger()->warning("you cant participate you silly");
    return false;
  }
  if 
}
}
}
