<?php

namespace ArbetsformedlingenWsTaxonomi;

class ArrayOfAIDOccupationNameCustom implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AIDOccupationName[] $AIDOccupationName
     */
    protected $AIDOccupationName = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AIDOccupationName[]
     */
    public function getAIDOccupationName()
    {
      return $this->AIDOccupationName;
    }

    /**
     * @param AIDOccupationName[] $AIDOccupationName
     * @return \ArbetsformedlingenWsTaxonomi\ArrayOfAIDOccupationName
     */
    public function setAIDOccupationName(array $AIDOccupationName = null)
    {
      $this->AIDOccupationName = $AIDOccupationName;
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
      return isset($this->AIDOccupationName[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AIDOccupationName
     */
    public function offsetGet($offset)
    {
      return $this->AIDOccupationName[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AIDOccupationName $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AIDOccupationName[] = $value;
      } else {
        $this->AIDOccupationName[$offset] = $value;
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
      unset($this->AIDOccupationName[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AIDOccupationName Return the current element
     */
    public function current()
    {
      return current($this->AIDOccupationName);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AIDOccupationName);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AIDOccupationName);
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
      reset($this->AIDOccupationName);
    }

    /**
     * Countable implementation
     *
     * @return AIDOccupationName Return count of elements
     */
    public function count()
    {
      return count($this->AIDOccupationName);
    }

}
