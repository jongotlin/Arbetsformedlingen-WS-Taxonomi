<?php

namespace ArbetsformedlingenWsTaxonomi;

class ArrayOfOccupationExperienceLast implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var OccupationExperienceLast[] $OccupationExperienceLast
     */
    protected $OccupationExperienceLast = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return OccupationExperienceLast[]
     */
    public function getOccupationExperienceLast()
    {
      return $this->OccupationExperienceLast;
    }

    /**
     * @param OccupationExperienceLast[] $OccupationExperienceLast
     * @return \ArbetsformedlingenWsTaxonomi\ArrayOfOccupationExperienceLast
     */
    public function setOccupationExperienceLast(array $OccupationExperienceLast = null)
    {
      $this->OccupationExperienceLast = $OccupationExperienceLast;
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
      return isset($this->OccupationExperienceLast[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return OccupationExperienceLast
     */
    public function offsetGet($offset)
    {
      return $this->OccupationExperienceLast[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param OccupationExperienceLast $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->OccupationExperienceLast[] = $value;
      } else {
        $this->OccupationExperienceLast[$offset] = $value;
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
      unset($this->OccupationExperienceLast[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return OccupationExperienceLast Return the current element
     */
    public function current()
    {
      return current($this->OccupationExperienceLast);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->OccupationExperienceLast);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->OccupationExperienceLast);
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
      reset($this->OccupationExperienceLast);
    }

    /**
     * Countable implementation
     *
     * @return OccupationExperienceLast Return count of elements
     */
    public function count()
    {
      return count($this->OccupationExperienceLast);
    }

}
