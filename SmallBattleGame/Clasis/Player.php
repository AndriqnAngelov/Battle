<?php

class Player
{
    private $name;
    private $health;
    private $attack;
    private $pic;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->health = rand(50, 100);
        $this->attack = rand(6, 30);
        $this->setPic($name);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getHealth(): int
    {
        return $this->health;
    }

    /**
     * @return int
     */
    public function getAttack(): int
    {
        return $this->attack;
    }

    /**
     * @return mixed
     */
    public function getPic()
    {
        return $this->pic;
    }


    private function setPic($name)
    {
        $this->pic = "pics/" . $name . ".png";
    }

    public function checkCpu(Player $player)
    {
        $allPlayers = [0 => "Arture", 1 => "Nasimoro", 2 => "Riana", 3 => "Rubi"];
        while (1) {
            if ($player->getName() != $this->getName()) {
                break;
            }
            $this->name = $allPlayers[rand(0, 3)];
            $this->setPic($this->name);
        }
    }

    public function reduceHealth(int $reduce)
    {
        $this->health -= $reduce;
    }

    public function attack($player)
    {
        $player->reduceHealth($this->getAttack());

    }

    public function isAlive(): bool
    {
        return $this->health > 0;
    }

}