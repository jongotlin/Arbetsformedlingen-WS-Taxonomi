<?php

namespace ArbetsformedlingenWsTaxonomi;

class ArrayOfSUNLevel3Custom implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SUNLevel3[] $SUNLevel3
     */
    protected $SUNLevel3 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SUNLevel3[]
     */
    public function getSUNLevel3()
    {
      return $this->SUNLevel3;
    }

    /**
     * @param SUNLevel3[] $SUNLevel3
     * @return \ArbetsformedlingenWsTaxonomi\ArrayOfSUNLevel3
     */
    public function setSUNLevel3(array $SUNLevel3 = null)
    {
      $this->SUNLevel3 = $SUNLevel3;
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
      return isset($this->SUNLevel3[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SUNLevel3
     */
    public function offsetGet($offset)
    {
      return $this->SUNLevel3[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SUNLevel3 $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->SUNLevel3[] = $value;
      } else {
        $this->SUNLevel3[$offset] = $value;
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
      unset($this->SUNLevel3[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SUNLevel3 Return the current element
     */
    public function current()
    {
      return current($this->SUNLevel3);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SUNLevel3);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SUNLevel3);
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
      reset($this->SUNLevel3);
    }

    /**
     * Countable implementation
     *
     * @return SUNLevel3 Return count of elements
     */
    public function count()
    {
      return count($this->SUNLevel3);
    }

}
