<?php

namespace ArbetsformedlingenWsTaxonomi;

class ArrayOfBSKOccupationNameCustom implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var BSKOccupationName[] $BSKOccupationName
     */
    protected $BSKOccupationName = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BSKOccupationName[]
     */
    public function getBSKOccupationName()
    {
      return $this->BSKOccupationName;
    }

    /**
     * @param BSKOccupationName[] $BSKOccupationName
     * @return \ArbetsformedlingenWsTaxonomi\ArrayOfBSKOccupationName
     */
    public function setBSKOccupationName(array $BSKOccupationName = null)
    {
      $this->BSKOccupationName = $BSKOccupationName;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->BSKOccupationName[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return BSKOccupationName
     */
    public function offsetGet($offset)
    {
      return $this->BSKOccupationName[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param BSKOccupationName $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->BSKOccupationName[] = $value;
      } else {
        $this->BSKOccupationName[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->BSKOccupationName[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return BSKOccupationName Return the current element
     */
    public function current()
    {
      return current($this->BSKOccupationName);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->BSKOccupationName);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->BSKOccupationName);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->BSKOccupationName);
    }

    /**
     * Countable implementation
     *
     * @return BSKOccupationName Return count of elements
     */
    public function count()
    {
      return count($this->BSKOccupationName);
    }

}
