<?php
/**
 * Created by PhpStorm.
 * User: t3dki
 * Date: 03/11/2018
 * Time: 18:52
 */

namespace Core;


class DataBinder implements DataBinderInterface
{

    public function bind(string $className, array $formData)
    {
        $resultClass = new \ReflectionClass($className);
        $tempObj = new $className();
        $methods = $resultClass->getMethods();
        $properties = $resultClass->getProperties();

        foreach ($formData as $key=>$value) {
            foreach ($properties as $propertyArr) {
                if ($propertyArr->name === $key) {
                    foreach ($methods as $methodArr) {
                        $method = 'set'.ucfirst($key);
                        if ($methodArr->name === $method){
                            $tempObj->$method($value);
                        }
                    }
                }
            }
        }
        return $tempObj;
    }
}