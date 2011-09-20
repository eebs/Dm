<?php

interface Dm_Model_Resource_Db_Interface extends Dm_Model_Resource_Interface
{
	/** ZF methods */
    public function info($key = null);
    public function createRow(array $data = array());
	
	/** Dm methods */
	public function saveRow($info, $row = null);
}