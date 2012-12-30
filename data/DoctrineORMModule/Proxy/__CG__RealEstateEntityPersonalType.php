<?php

namespace DoctrineORMModule\Proxy\__CG__\RealEstate\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class PersonalType extends \RealEstate\Entity\PersonalType implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setPid($pid)
    {
        $this->__load();
        return parent::setPid($pid);
    }

    public function getPid()
    {
        $this->__load();
        return parent::getPid();
    }

    public function setHidden($hidden)
    {
        $this->__load();
        return parent::setHidden($hidden);
    }

    public function getHidden()
    {
        $this->__load();
        return parent::getHidden();
    }

    public function setDisabled($disabled)
    {
        $this->__load();
        return parent::setDisabled($disabled);
    }

    public function getDisabled()
    {
        $this->__load();
        return parent::getDisabled();
    }

    public function setDeleted($deleted)
    {
        $this->__load();
        return parent::setDeleted($deleted);
    }

    public function getDeleted()
    {
        $this->__load();
        return parent::getDeleted();
    }

    public function setCreatedtime($createdtime)
    {
        $this->__load();
        return parent::setCreatedtime($createdtime);
    }

    public function getCreatedtime()
    {
        $this->__load();
        return parent::getCreatedtime();
    }

    public function setCreateduseruid($createduseruid)
    {
        $this->__load();
        return parent::setCreateduseruid($createduseruid);
    }

    public function getCreateduseruid()
    {
        $this->__load();
        return parent::getCreateduseruid();
    }

    public function setLastmodifiedtime($lastmodifiedtime)
    {
        $this->__load();
        return parent::setLastmodifiedtime($lastmodifiedtime);
    }

    public function getLastmodifiedtime()
    {
        $this->__load();
        return parent::getLastmodifiedtime();
    }

    public function setLastmodifieduseruid($lastmodifieduseruid)
    {
        $this->__load();
        return parent::setLastmodifieduseruid($lastmodifieduseruid);
    }

    public function getLastmodifieduseruid()
    {
        $this->__load();
        return parent::getLastmodifieduseruid();
    }

    public function setValidtimestart($validtimestart)
    {
        $this->__load();
        return parent::setValidtimestart($validtimestart);
    }

    public function getValidtimestart()
    {
        $this->__load();
        return parent::getValidtimestart();
    }

    public function setValidtimeend($validtimeend)
    {
        $this->__load();
        return parent::setValidtimeend($validtimeend);
    }

    public function getValidtimeend()
    {
        $this->__load();
        return parent::getValidtimeend();
    }

    public function setTitle($title)
    {
        $this->__load();
        return parent::setTitle($title);
    }

    public function getTitle()
    {
        $this->__load();
        return parent::getTitle();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'pid', 'hidden', 'disabled', 'deleted', 'createdtime', 'createduseruid', 'lastmodifiedtime', 'lastmodifieduseruid', 'validtimestart', 'validtimeend', 'title');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}