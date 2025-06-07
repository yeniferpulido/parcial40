<?php

namespace app\models\entities;

abstract class Entity
{
    abstract function all();
    abstract function save();
    abstract function update();
    abstract function delete();

    public function set($prop, $value)
    {
        $this->{$prop} = $value;
    }

    public function get($prop)
    {
        return $this->{$prop};
    }
}

abstract class Entidad
{
    abstract function all();
    abstract function save();

    public function set($prop, $value)
    {
        $this->{$prop} = $value;
    }

    public function get($prop)
    {
        return $this->{$prop};
    }
}