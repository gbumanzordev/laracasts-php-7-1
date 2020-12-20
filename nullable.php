<?php

class User {

    protected $age;

    public function __construct($age)
    {
        $this->age = $age;
        var_dump($this->age());
    }

    public function age(): ?int
    {
        return $this->age;
    }

    public function subscribe(?callable $callback = null): void
    {
        var_dump('subscribing here');
        if ($callback)
        {
            $callback();
        }
    }
}

(new User(23))->subscribe(function () {
    var_dump('executing here');
});