<?php

namespace ArbetsformedlingenWsTaxonomi;

class ArrayOfSUNField2Custom implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SUNField2[] $SUNField2
     */
    protected $SUNField2 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SUNField2[]
     */
    public function getSUNField2()
    {
      return $this->SUNField2;
    }

    /**
     * @param SUNField2[] $SUNField2
     * @return \ArbetsformedlingenWsTaxonomi\ArrayOfSUNField2
     */
    public function setSUNField2(array $SUNField2 = null)
    {
      $this->SUNField2 = $SUNField2;
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
      return isset($this->SUNField2[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SUNField2
     */
    public function offsetGet($offset)
    {
      return $this->SUNField2[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SUNField2 $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->SUNField2[] = $value;
      } else {
        $this->SUNField2[$offset] = $value;
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
      unset($this->SUNField2[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SUNField2 Return the current element
     */
    public function current()
    {
      return current($this->SUNField2);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SUNField2);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SUNField2);
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
      reset($this->SUNField2);
    }

    /**
     * Countable implementation
     *
     * @return SUNField2 Return count of elements
     */
    public function count()
    {
      return count($this->SUNField2);
    }

}
