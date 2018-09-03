<?php

namespace Proxies\__CG__\Entities;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class PatchPanelPortFile extends \Entities\PatchPanelPortFile implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Entities\\PatchPanelPortFile' . "\0" . 'id', '' . "\0" . 'Entities\\PatchPanelPortFile' . "\0" . 'name', '' . "\0" . 'Entities\\PatchPanelPortFile' . "\0" . 'type', '' . "\0" . 'Entities\\PatchPanelPortFile' . "\0" . 'uploaded_at', '' . "\0" . 'Entities\\PatchPanelPortFile' . "\0" . 'uploaded_by', '' . "\0" . 'Entities\\PatchPanelPortFile' . "\0" . 'size', '' . "\0" . 'Entities\\PatchPanelPortFile' . "\0" . 'storage_location', '' . "\0" . 'Entities\\PatchPanelPortFile' . "\0" . 'patchPanelPort', '' . "\0" . 'Entities\\PatchPanelPortFile' . "\0" . 'is_private'];
        }

        return ['__isInitialized__', '' . "\0" . 'Entities\\PatchPanelPortFile' . "\0" . 'id', '' . "\0" . 'Entities\\PatchPanelPortFile' . "\0" . 'name', '' . "\0" . 'Entities\\PatchPanelPortFile' . "\0" . 'type', '' . "\0" . 'Entities\\PatchPanelPortFile' . "\0" . 'uploaded_at', '' . "\0" . 'Entities\\PatchPanelPortFile' . "\0" . 'uploaded_by', '' . "\0" . 'Entities\\PatchPanelPortFile' . "\0" . 'size', '' . "\0" . 'Entities\\PatchPanelPortFile' . "\0" . 'storage_location', '' . "\0" . 'Entities\\PatchPanelPortFile' . "\0" . 'patchPanelPort', '' . "\0" . 'Entities\\PatchPanelPortFile' . "\0" . 'is_private'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (PatchPanelPortFile $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function getNameTruncate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNameTruncate', []);

        return parent::getNameTruncate();
    }

    /**
     * {@inheritDoc}
     */
    public function setType($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', [$type]);

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function getTypeAsIcon()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeAsIcon', []);

        return parent::getTypeAsIcon();
    }

    /**
     * {@inheritDoc}
     */
    public function setUploadedAt($uploadedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUploadedAt', [$uploadedAt]);

        return parent::setUploadedAt($uploadedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUploadedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUploadedAt', []);

        return parent::getUploadedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function getUploadedAtFormated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUploadedAtFormated', []);

        return parent::getUploadedAtFormated();
    }

    /**
     * {@inheritDoc}
     */
    public function setUploadedBy($uploadedBy)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUploadedBy', [$uploadedBy]);

        return parent::setUploadedBy($uploadedBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getUploadedBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUploadedBy', []);

        return parent::getUploadedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setSize($size)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSize', [$size]);

        return parent::setSize($size);
    }

    /**
     * {@inheritDoc}
     */
    public function getSize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSize', []);

        return parent::getSize();
    }

    /**
     * {@inheritDoc}
     */
    public function getSizeFormated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSizeFormated', []);

        return parent::getSizeFormated();
    }

    /**
     * {@inheritDoc}
     */
    public function setStorageLocation($storageLocation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStorageLocation', [$storageLocation]);

        return parent::setStorageLocation($storageLocation);
    }

    /**
     * {@inheritDoc}
     */
    public function getStorageLocation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStorageLocation', []);

        return parent::getStorageLocation();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setPatchPanelPort(\Entities\PatchPanelPort $patchPanelPort = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPatchPanelPort', [$patchPanelPort]);

        return parent::setPatchPanelPort($patchPanelPort);
    }

    /**
     * {@inheritDoc}
     */
    public function getPatchPanelPort()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPatchPanelPort', []);

        return parent::getPatchPanelPort();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsPrivate($isPrivate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsPrivate', [$isPrivate]);

        return parent::setIsPrivate($isPrivate);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsPrivate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsPrivate', []);

        return parent::getIsPrivate();
    }

    /**
     * {@inheritDoc}
     */
    public function getPath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPath', []);

        return parent::getPath();
    }

}
