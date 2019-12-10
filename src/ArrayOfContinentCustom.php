<?php

namespace ArbetsformedlingenWsTaxonomi;

class ArrayOfContinentCustom implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Continent[] $Continent
     */
    protected $Continent = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Continent[]
     */
    public function getContinent()
    {
      return $this->Continent;
    }

    /**
     * @param Continent[] $Continent
     * @return \ArbetsformedlingenWsTaxonomi\ArrayOfContinent
     */
    public function setContinent(array $Continent = null)
    {
      $this->Continent = $Continent;
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
      return isset($this->Continent[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Continent
     */
    public function offsetGet($offset)
    {
      return $this->Continent[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Continent $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Continent[] = $value;
      } else {
        $this->Continent[$offset] = $value;
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
      unset($this->Continent[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Continent Return the current element
     */
    public function current()
    {
      return current($this->Continent);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Continent);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Continent);
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
      reset($this->Continent);
    }

    /**
     * Countable implementation
     *
     * @return Continent Return count of elements
     */
    public function count()
    {
      return count($this->Continent);
    }

}
