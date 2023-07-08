<?php

namespace skyss0fly\WordScrambler;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\player\Player;
use cooldogepm\BedrockEconomy;
use Closure;
use ClosureContext;
class Main extends PluginBase implements Listener {

public function onLoad(): void {
$config = $this->getConfig();
  $this->saveDefaultConfig();
}
  public function onEnable(): void {
$this->timer();
$this->getLogger()->info("§0Plugin Enabled");
}
public function chatScramble(Player $player): void {
$mhigh =  $this->getConfig()->get("MoneyRangeHighest");
  $mlow =  $this->getConfig()->get("MoneyRangeLowest");
  $timer = $this->getConfig()->get("Timer"); 
  // ^ time till end of scramble
  $wordraw = $this->getConfig()->get("Words");
  $word = $wordraw->str_shuffle();
foreach (range ($mlow, $mhigh) as $economy)
  $delay = $this->getConfig()->get("Delay");
  // ^ time till next scramble
  while($timer > 0){
$this->getServer()->broadcastMessage("New Word to Scramble: " .  $word . "winner gets " . $economy);
    $this->getLogger()->info("§0new word to scramble");
  }
  if ($timer === 0) {
$this->timer();
    $this->getLogger()->info("§0times up");
  }
  }
  public function timer() {
      $delay = $this->getConfig()->get("Delay");
    while($delay > 0) {
      $this->getLogger()->info("§0there is still delay time left");
      return false;
  }
    if ($delay === 0) {
      $this->getLogger()->info("§calling event");
$this->chatScramble();
    }
  }
public function reaction(Player $player) {
    $delay = $this->getConfig()->get("Delay");
while($delay === 0 && $timer != 0) {
  if (Player instanceof player){
  $this->getLogger()->warning("you cant participate you silly");
    return false;
  }
$this->getServer()->broadcastMessage(onChat()->$player ."Unscrambled the word: " . chatScramble()->$wordraw . "and won " . chatScramble()->$economy);
  $this->getLogger()->info("§0someone called word");
  $this->chatScramble($timer = 0);
  this->timer();
}
}
 public function onChat(PlayerChatEvent $event) {
        $player = $event->getPlayer();
        $message = $event->getMessage();
   if (str_contains($this->chatScrambler($wordraw )) {  
  $this->reaction();
  $this->economy();
}
}
public function economy(BedrockEconomy $beconomy) {
BedrockEconomyAPI::legacy()->addToPlayerBalance(
    $this->onChat($player),
    $this->chatScramble($economy),
    ClosureContext::create(
        function (bool $wasUpdated): void {
            var_dump($wasUpdated);
        },
    )
);
}
}
