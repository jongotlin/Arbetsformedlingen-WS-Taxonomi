<?php

namespace ArbetsformedlingenWsTaxonomi;

class ArrayOfEURegionCustom implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var EURegion[] $EURegion
     */
    protected $EURegion = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return EURegion[]
     */
    public function getEURegion()
    {
      return $this->EURegion;
    }

    /**
     * @param EURegion[] $EURegion
     * @return \ArbetsformedlingenWsTaxonomi\ArrayOfEURegion
     */
    public function setEURegion(array $EURegion = null)
    {
      $this->EURegion = $EURegion;
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
      return isset($this->EURegion[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return EURegion
     */
    public function offsetGet($offset)
    {
      return $this->EURegion[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param EURegion $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->EURegion[] = $value;
      } else {
        $this->EURegion[$offset] = $value;
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
      unset($this->EURegion[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return EURegion Return the current element
     */
    public function current()
    {
      return current($this->EURegion);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->EURegion);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->EURegion);
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
      reset($this->EURegion);
    }

    /**
     * Countable implementation
     *
     * @return EURegion Return count of elements
     */
    public function count()
    {
      return count($this->EURegion);
    }

}
