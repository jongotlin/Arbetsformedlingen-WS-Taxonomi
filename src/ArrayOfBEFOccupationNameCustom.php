<?php

namespace ArbetsformedlingenWsTaxonomi;

class ArrayOfBEFOccupationNameCustom implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var BEFOccupationName[] $BEFOccupationName
     */
    protected $BEFOccupationName = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BEFOccupationName[]
     */
    public function getBEFOccupationName()
    {
      return $this->BEFOccupationName;
    }

    /**
     * @param BEFOccupationName[] $BEFOccupationName
     * @return \ArbetsformedlingenWsTaxonomi\ArrayOfBEFOccupationName
     */
    public function setBEFOccupationName(array $BEFOccupationName = null)
    {
      $this->BEFOccupationName = $BEFOccupationName;
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
      return isset($this->BEFOccupationName[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return BEFOccupationName
     */
    public function offsetGet($offset)
    {
      return $this->BEFOccupationName[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param BEFOccupationName $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->BEFOccupationName[] = $value;
      } else {
        $this->BEFOccupationName[$offset] = $value;
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
      unset($this->BEFOccupationName[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return BEFOccupationName Return the current element
     */
    public function current()
    {
      return current($this->BEFOccupationName);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->BEFOccupationName);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->BEFOccupationName);
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
      reset($this->BEFOccupationName);
    }

    /**
     * Countable implementation
     *
     * @return BEFOccupationName Return count of elements
     */
    public function count()
    {
      return count($this->BEFOccupationName);
    }

}
