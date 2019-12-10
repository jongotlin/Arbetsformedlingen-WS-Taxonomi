<?php

namespace ArbetsformedlingenWsTaxonomi;

class ArrayOfEmploymentDurationCustom implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var EmploymentDuration[] $EmploymentDuration
     */
    protected $EmploymentDuration = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return EmploymentDuration[]
     */
    public function getEmploymentDuration()
    {
      return $this->EmploymentDuration;
    }

    /**
     * @param EmploymentDuration[] $EmploymentDuration
     * @return \ArbetsformedlingenWsTaxonomi\ArrayOfEmploymentDuration
     */
    public function setEmploymentDuration(array $EmploymentDuration = null)
    {
      $this->EmploymentDuration = $EmploymentDuration;
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
      return isset($this->EmploymentDuration[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return EmploymentDuration
     */
    public function offsetGet($offset)
    {
      return $this->EmploymentDuration[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param EmploymentDuration $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->EmploymentDuration[] = $value;
      } else {
        $this->EmploymentDuration[$offset] = $value;
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
      unset($this->EmploymentDuration[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return EmploymentDuration Return the current element
     */
    public function current()
    {
      return current($this->EmploymentDuration);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->EmploymentDuration);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->EmploymentDuration);
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
      reset($this->EmploymentDuration);
    }

    /**
     * Countable implementation
     *
     * @return EmploymentDuration Return count of elements
     */
    public function count()
    {
      return count($this->EmploymentDuration);
    }

}
