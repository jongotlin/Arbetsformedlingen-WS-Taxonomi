<?php

namespace ArbetsformedlingenWsTaxonomi;

class ArrayOfSUNField1Custom implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SUNField1[] $SUNField1
     */
    protected $SUNField1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SUNField1[]
     */
    public function getSUNField1()
    {
      return $this->SUNField1;
    }

    /**
     * @param SUNField1[] $SUNField1
     * @return \ArbetsformedlingenWsTaxonomi\ArrayOfSUNField1
     */
    public function setSUNField1(array $SUNField1 = null)
    {
      $this->SUNField1 = $SUNField1;
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
      return isset($this->SUNField1[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SUNField1
     */
    public function offsetGet($offset)
    {
      return $this->SUNField1[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SUNField1 $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->SUNField1[] = $value;
      } else {
        $this->SUNField1[$offset] = $value;
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
      unset($this->SUNField1[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SUNField1 Return the current element
     */
    public function current()
    {
      return current($this->SUNField1);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SUNField1);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SUNField1);
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
      reset($this->SUNField1);
    }

    /**
     * Countable implementation
     *
     * @return SUNField1 Return count of elements
     */
    public function count()
    {
      return count($this->SUNField1);
    }

}
