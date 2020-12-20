<?php

class ChargeRejected extends Exception {

}

class NotEnoughFunds extends Exception {

}

class User {

    public function subscribe()
    {
//        var_dump('subscribing');
        throw new ChargeRejected('Error');
    }
}

function flash($message)
{
    var_dump($message);
}

try
{
    (new User)->subscribe();
} catch (ChargeRejected | NotEnoughFunds $e)
{
    flash('Failed');
}