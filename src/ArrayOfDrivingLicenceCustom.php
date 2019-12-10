<?php

namespace ArbetsformedlingenWsTaxonomi;

class ArrayOfDrivingLicenceCustom implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DrivingLicence[] $DrivingLicence
     */
    protected $DrivingLicence = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DrivingLicence[]
     */
    public function getDrivingLicence()
    {
      return $this->DrivingLicence;
    }

    /**
     * @param DrivingLicence[] $DrivingLicence
     * @return \ArbetsformedlingenWsTaxonomi\ArrayOfDrivingLicence
     */
    public function setDrivingLicence(array $DrivingLicence = null)
    {
      $this->DrivingLicence = $DrivingLicence;
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
      return isset($this->DrivingLicence[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DrivingLicence
     */
    public function offsetGet($offset)
    {
      return $this->DrivingLicence[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DrivingLicence $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DrivingLicence[] = $value;
      } else {
        $this->DrivingLicence[$offset] = $value;
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
      unset($this->DrivingLicence[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DrivingLicence Return the current element
     */
    public function current()
    {
      return current($this->DrivingLicence);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DrivingLicence);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DrivingLicence);
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
      reset($this->DrivingLicence);
    }

    /**
     * Countable implementation
     *
     * @return DrivingLicence Return count of elements
     */
    public function count()
    {
      return count($this->DrivingLicence);
    }

}
