<?php

interface Dm_Model_Interface
{
    public function __construct($options = null);
    public function getResource($name);
    public function getForm($name);
    public function init();
}
