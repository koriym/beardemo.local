<?php


/**
 * Before test resource
 */
class App_Ro_Test_Aop_Before extends App_Ro_Test_Aop
{
    /**
     * Read
     *
     * @return array
     *
     * @aspect before App_Aspect_Test_Before
     */
    public function onRead($values)
    {
        return parent::onRead($values);
    }
}
