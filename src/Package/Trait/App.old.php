<?php
namespace Package\Difference\Fun\Account\Trait;

use Difference\Fun\App as Application;

trait App
{

    protected ?Application $object;

    public function object($object=null): ?Application
    {
        if($object!==null){
            $this->setObject($object);
        }
        return $this->getObject();
    }

    private function setObject(Application $object): void
    {
        $this->object = $object;
    }

    private function getObject(): ?Application
    {
        return $this->object;
    }
}