<?php

namespace ArbetsformedlingenWsTaxonomi;

class ArrayOfVersionInformation implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var VersionInformation[] $VersionInformation
     */
    protected $VersionInformation = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return VersionInformation[]
     */
    public function getVersionInformation()
    {
      return $this->VersionInformation;
    }

    /**
     * @param VersionInformation[] $VersionInformation
     * @return \ArbetsformedlingenWsTaxonomi\ArrayOfVersionInformation
     */
    public function setVersionInformation(array $VersionInformation = null)
    {
      $this->VersionInformation = $VersionInformation;
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
      return isset($this->VersionInformation[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return VersionInformation
     */
    public function offsetGet($offset)
    {
      return $this->VersionInformation[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param VersionInformation $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->VersionInformation[] = $value;
      } else {
        $this->VersionInformation[$offset] = $value;
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
      unset($this->VersionInformation[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return VersionInformation Return the current element
     */
    public function current()
    {
      return current($this->VersionInformation);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->VersionInformation);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->VersionInformation);
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
      reset($this->VersionInformation);
    }

    /**
     * Countable implementation
     *
     * @return VersionInformation Return count of elements
     */
    public function count()
    {
      return count($this->VersionInformation);
    }

}
