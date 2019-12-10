<?php

namespace ArbetsformedlingenWsTaxonomi;

class ArrayOfOccupationNameCustom implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var OccupationName[] $OccupationName
     */
    protected $OccupationName = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return OccupationName[]
     */
    public function getOccupationName()
    {
      return $this->OccupationName;
    }

    /**
     * @param OccupationName[] $OccupationName
     * @return \ArbetsformedlingenWsTaxonomi\ArrayOfOccupationName
     */
    public function setOccupationName(array $OccupationName = null)
    {
      $this->OccupationName = $OccupationName;
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
      return isset($this->OccupationName[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return OccupationName
     */
    public function offsetGet($offset)
    {
      return $this->OccupationName[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param OccupationName $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->OccupationName[] = $value;
      } else {
        $this->OccupationName[$offset] = $value;
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
      unset($this->OccupationName[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return OccupationName Return the current element
     */
    public function current()
    {
      return current($this->OccupationName);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->OccupationName);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->OccupationName);
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
      reset($this->OccupationName);
    }

    /**
     * Countable implementation
     *
     * @return OccupationName Return count of elements
     */
    public function count()
    {
      return count($this->OccupationName);
    }

}
