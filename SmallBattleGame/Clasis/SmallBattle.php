<?php
require_once "Player.php";

/**
 * Created by PhpStorm.
 * User: Andriqn
 * Date: 13.2.2018 г.
 * Time: 13:51
 */
class SmallBattle
{
    private $player;
    private $cpu;
    private $rounds;

    public function __construct(Player $player, Player $cpu, $rounds)
    {
        $this->player = $player;
        $this->cpu = $cpu;
        $this->rounds = $rounds;
    }


    public function startBattle(): string
    {
        $player = $this->player;
        $cpu = $this->cpu;
        if ($this->rounds != null) {
            while ($this->rounds > 0) {
                $player->attack($cpu);
                $cpu->attack($player);
                if (!$player->isAlive() && !$cpu->isAlive()) {
                    if ($player->getHealth() == $cpu->getHealth()) {
                        return "Equal Battle";
                    } elseif ($player->getHealth() > $cpu->getHealth()) {
                        return $player->getName();
                    }
                    return $cpu->getName();

                } elseif (!$player->isAlive()) {
                    return $cpu->getName();

                } elseif (!$cpu->isAlive()) {
                    return $player->getName();
                }

                $this->rounds--;
            }
            if ($player->isAlive() && $cpu->isAlive()) {
                if ($player->getHealth() > $cpu->getHealth()) {
                    return $player->getName();
                } elseif ($player->getHealth() < $cpu->getHealth()) {
                    return $cpu->getName();
                }
                return "Equal Battle";
            }
        } else {
            while (1) {
                $player->attack($cpu);
                $cpu->attack($player);
                if (!$player->isAlive() && !$cpu->isAlive()) {
                    if ($player->getHealth() == $cpu->getHealth()) {
                        return "Equal Battle";
                    } elseif ($player->getHealth() > $cpu->getHealth()) {
                        return $player->getName();
                    }
                    return $cpu->getName();

                } elseif (!$player->isAlive()) {
                    return $cpu->getName();

                } elseif (!$cpu->isAlive()) {
                    return $player->getName();
                }

            }
        }

    }
}