<?php

class Trainer
{
    private $name;
    private $badges;
    private $pokemonsArr;

    /**
     * Trainer constructor.
     * @param $name
     * @param $badges
     * @param $pokemonsArr
     */
    public function __construct($name)
    {
        $this->name = $name;
        $this->badges = 0;
        $this->pokemonsArr = [];
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getBadges()
    {
        return $this->badges;
    }

    /**
     * @return mixed
     */
    public function getPokemonsArr()
    {
        return $this->pokemonsArr;
    }

    public function plusBadge()
    {
        $this->badges++;
    }

    public function addPokemon(Pokemon $pokemon)
    {
        $this->pokemonsArr[] = $pokemon;
    }

    public function removePokemon()
    {
        foreach ($this->pokemonsArr as $key => $pokemon) {
            if ($pokemon->getHealth() <= 0) {
                unset($this->pokemonsArr[$key]);
            }
        }
    }
}

class Pokemon
{
    private $name;
    private $element;

    /**
     * @return mixed
     */
    public function getElement()
    {
        return $this->element;
    }

    private $health;

    /**
     * @return mixed
     */
    public function getHealth()
    {
        return $this->health;
    }

    /**
     * Pokemon constructor.
     * @param $name
     * @param $element
     * @param $health
     */
    public function __construct($name, $element, $health)
    {
        $this->name = $name;
        $this->element = $element;
        $this->health = $health;
    }

    public function minusHealth()
    {
        $this->health -= 10;
        if ($this->health <= 0) {
            return false;
        }
        return true;
    }
}

$input = readline();
$trainers = [];
while ($input !== 'Tournament') {
    [$name, $pokemonName, $element, $health] = explode(' ', $input);

    if (!array_key_exists($name, $trainers)) {
        $trainers[$name] = new Trainer($name);
    }
    $trainers[$name]->addPokemon(new Pokemon($pokemonName, $element, $health));
    $input = readline();
}

$isIn = false;
$input = readline();
while ($input !== 'End') {
    foreach ($trainers as $trainer) {
        $pokemons = $trainer->getPokemonsArr();
        foreach ($pokemons as $pokemon) {
            if ($input === $pokemon->getElement()) {
                $isIn = true;
                $trainer->plusBadge();
                break;
            }

        }
        if (!$isIn) {
            foreach ($pokemons as $pokemon) {
                $isLive = $pokemon->minusHealth();
                $trainer->removePokemon();
            }
        }
        $isIn = false;
    }
    $input = readline();
}

usort($trainers, function (Trainer $one, Trainer $two) {
    return $two->getBadges() <=> $one->getBadges();
});

foreach ($trainers as $trainer) {
    echo $trainer->getName() . ' ' . $trainer->getBadges() . ' ' . count($trainer->getPokemonsArr()) . PHP_EOL;
}
