<?php

namespace ArbetsformedlingenWsTaxonomi;

class ArrayOfMunicipalityCustom implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Municipality[] $Municipality
     */
    protected $Municipality = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Municipality[]
     */
    public function getMunicipality()
    {
      return $this->Municipality;
    }

    /**
     * @param Municipality[] $Municipality
     * @return \ArbetsformedlingenWsTaxonomi\ArrayOfMunicipality
     */
    public function setMunicipality(array $Municipality = null)
    {
      $this->Municipality = $Municipality;
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
      return isset($this->Municipality[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Municipality
     */
    public function offsetGet($offset)
    {
      return $this->Municipality[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Municipality $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Municipality[] = $value;
      } else {
        $this->Municipality[$offset] = $value;
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
      unset($this->Municipality[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Municipality Return the current element
     */
    public function current()
    {
      return current($this->Municipality);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Municipality);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Municipality);
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
      reset($this->Municipality);
    }

    /**
     * Countable implementation
     *
     * @return Municipality Return count of elements
     */
    public function count()
    {
      return count($this->Municipality);
    }

}
