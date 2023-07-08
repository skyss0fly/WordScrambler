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
timer();
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
  }
  if ($timer === 0) {
timer();
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
$this->getServer()->broadcastMessage(onChat()->$player ."Unscrambled the word: " . chatScramble()->$wordraw . "and won " . chatScramble()->$economy)
  chatScramble()::timer = 0
  timer();
}
}
 public function onChat(PlayerChatEvent $event) {
        $player = $event->getPlayer();
        $message = $event->getMessage();
   if ($message === chatScramble()->$word) {     
   reaction();
     economy();
}
}
public function economy(BedrockEconomy $beconomy) {
BedrockEconomyAPI::legacy()->addToPlayerBalance(
    onChat()->$player,
    chatScramble()->$economy,
    ClosureContext::create(
        function (bool $wasUpdated): void {
            var_dump($wasUpdated);
        },
    )
);
}
}
