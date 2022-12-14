<?php

/**
 * Generated 2019-11-17T17:00:44+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientObject;


class ListBloomFilter extends ClientObject
{
    /**
     * @return integer
     */
    public function getBloomFilterSize()
    {
        if (!$this->isPropertyAvailable("BloomFilterSize")) {
            return null;
        }
        return $this->getProperty("BloomFilterSize");
    }
    /**
     * @var integer
     */
    public function setBloomFilterSize($value)
    {
        $this->setProperty("BloomFilterSize", $value, true);
    }
    /**
     * @return double
     */
    public function getFalsePositiveRate()
    {
        if (!$this->isPropertyAvailable("FalsePositiveRate")) {
            return null;
        }
        return $this->getProperty("FalsePositiveRate");
    }
    /**
     * @var double
     */
    public function setFalsePositiveRate($value)
    {
        $this->setProperty("FalsePositiveRate", $value, true);
    }
    /**
     * @return array
     */
    public function getHashedValueSet()
    {
        if (!$this->isPropertyAvailable("HashedValueSet")) {
            return null;
        }
        return $this->getProperty("HashedValueSet");
    }
    /**
     * @var array
     */
    public function setHashedValueSet($value)
    {
        $this->setProperty("HashedValueSet", $value, true);
    }
    /**
     * @return array
     */
    public function getIndexMap()
    {
        if (!$this->isPropertyAvailable("IndexMap")) {
            return null;
        }
        return $this->getProperty("IndexMap");
    }
    /**
     * @var array
     */
    public function setIndexMap($value)
    {
        $this->setProperty("IndexMap", $value, true);
    }
    /**
     * @return integer
     */
    public function getItemProcessedCount()
    {
        if (!$this->isPropertyAvailable("ItemProcessedCount")) {
            return null;
        }
        return $this->getProperty("ItemProcessedCount");
    }
    /**
     * @var integer
     */
    public function setItemProcessedCount($value)
    {
        $this->setProperty("ItemProcessedCount", $value, true);
    }
    /**
     * @return integer
     */
    public function getK()
    {
        if (!$this->isPropertyAvailable("K")) {
            return null;
        }
        return $this->getProperty("K");
    }
    /**
     * @var integer
     */
    public function setK($value)
    {
        $this->setProperty("K", $value, true);
    }
    /**
     * @return integer
     */
    public function getLastListItemIdProcessed()
    {
        if (!$this->isPropertyAvailable("LastListItemIdProcessed")) {
            return null;
        }
        return $this->getProperty("LastListItemIdProcessed");
    }
    /**
     * @var integer
     */
    public function setLastListItemIdProcessed($value)
    {
        $this->setProperty("LastListItemIdProcessed", $value, true);
    }
    /**
     * @return integer
     */
    public function getMaxItemCount()
    {
        if (!$this->isPropertyAvailable("MaxItemCount")) {
            return null;
        }
        return $this->getProperty("MaxItemCount");
    }
    /**
     * @var integer
     */
    public function setMaxItemCount($value)
    {
        $this->setProperty("MaxItemCount", $value, true);
    }
}