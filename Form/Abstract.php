<?php

class Dm_Form_Abstract extends Zend_Form
{
    /**
     * @var Dm_Model_Interface
     */
    protected $_model;

    /**
     * Model setter
     * 
     * @param Dm_Model_Interface $model 
     */
    public function setModel(Dm_Model_Interface $model)
    {
        $this->_model = $model;
    }

    /**
     * Model Getter
     * 
     * @return Dm_Model_Interface 
     */
    public function getModel()
    {
        return $this->_model;
    }
}