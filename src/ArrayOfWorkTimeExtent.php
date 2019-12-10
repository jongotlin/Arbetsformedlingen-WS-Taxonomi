<?php

namespace ArbetsformedlingenWsTaxonomi;

class ArrayOfWorkTimeExtent implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var WorkTimeExtent[] $WorkTimeExtent
     */
    protected $WorkTimeExtent = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return WorkTimeExtent[]
     */
    public function getWorkTimeExtent()
    {
      return $this->WorkTimeExtent;
    }

    /**
     * @param WorkTimeExtent[] $WorkTimeExtent
     * @return \ArbetsformedlingenWsTaxonomi\ArrayOfWorkTimeExtent
     */
    public function setWorkTimeExtent(array $WorkTimeExtent = null)
    {
      $this->WorkTimeExtent = $WorkTimeExtent;
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
      return isset($this->WorkTimeExtent[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return WorkTimeExtent
     */
    public function offsetGet($offset)
    {
      return $this->WorkTimeExtent[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param WorkTimeExtent $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->WorkTimeExtent[] = $value;
      } else {
        $this->WorkTimeExtent[$offset] = $value;
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
      unset($this->WorkTimeExtent[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return WorkTimeExtent Return the current element
     */
    public function current()
    {
      return current($this->WorkTimeExtent);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->WorkTimeExtent);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->WorkTimeExtent);
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
      reset($this->WorkTimeExtent);
    }

    /**
     * Countable implementation
     *
     * @return WorkTimeExtent Return count of elements
     */
    public function count()
    {
      return count($this->WorkTimeExtent);
    }

}
