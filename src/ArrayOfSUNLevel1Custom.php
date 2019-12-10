<?php

namespace ArbetsformedlingenWsTaxonomi;

class ArrayOfSUNLevel1Custom implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SUNLevel1[] $SUNLevel1
     */
    protected $SUNLevel1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SUNLevel1[]
     */
    public function getSUNLevel1()
    {
      return $this->SUNLevel1;
    }

    /**
     * @param SUNLevel1[] $SUNLevel1
     * @return \ArbetsformedlingenWsTaxonomi\ArrayOfSUNLevel1
     */
    public function setSUNLevel1(array $SUNLevel1 = null)
    {
      $this->SUNLevel1 = $SUNLevel1;
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
      return isset($this->SUNLevel1[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SUNLevel1
     */
    public function offsetGet($offset)
    {
      return $this->SUNLevel1[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SUNLevel1 $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->SUNLevel1[] = $value;
      } else {
        $this->SUNLevel1[$offset] = $value;
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
      unset($this->SUNLevel1[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SUNLevel1 Return the current element
     */
    public function current()
    {
      return current($this->SUNLevel1);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SUNLevel1);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SUNLevel1);
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
      reset($this->SUNLevel1);
    }

    /**
     * Countable implementation
     *
     * @return SUNLevel1 Return count of elements
     */
    public function count()
    {
      return count($this->SUNLevel1);
    }

}
