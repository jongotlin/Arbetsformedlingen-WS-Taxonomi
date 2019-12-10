<?php

namespace ArbetsformedlingenWsTaxonomi;

class ArrayOfSUNField3 implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SUNField3[] $SUNField3
     */
    protected $SUNField3 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SUNField3[]
     */
    public function getSUNField3()
    {
      return $this->SUNField3;
    }

    /**
     * @param SUNField3[] $SUNField3
     * @return \ArbetsformedlingenWsTaxonomi\ArrayOfSUNField3
     */
    public function setSUNField3(array $SUNField3 = null)
    {
      $this->SUNField3 = $SUNField3;
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
      return isset($this->SUNField3[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SUNField3
     */
    public function offsetGet($offset)
    {
      return $this->SUNField3[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SUNField3 $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->SUNField3[] = $value;
      } else {
        $this->SUNField3[$offset] = $value;
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
      unset($this->SUNField3[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SUNField3 Return the current element
     */
    public function current()
    {
      return current($this->SUNField3);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SUNField3);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SUNField3);
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
      reset($this->SUNField3);
    }

    /**
     * Countable implementation
     *
     * @return SUNField3 Return count of elements
     */
    public function count()
    {
      return count($this->SUNField3);
    }

}
