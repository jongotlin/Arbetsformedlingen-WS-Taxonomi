<?php

namespace ArbetsformedlingenWsTaxonomi;

class ArrayOfSUNLevel2Custom implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SUNLevel2[] $SUNLevel2
     */
    protected $SUNLevel2 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SUNLevel2[]
     */
    public function getSUNLevel2()
    {
      return $this->SUNLevel2;
    }

    /**
     * @param SUNLevel2[] $SUNLevel2
     * @return \ArbetsformedlingenWsTaxonomi\ArrayOfSUNLevel2
     */
    public function setSUNLevel2(array $SUNLevel2 = null)
    {
      $this->SUNLevel2 = $SUNLevel2;
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
      return isset($this->SUNLevel2[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SUNLevel2
     */
    public function offsetGet($offset)
    {
      return $this->SUNLevel2[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SUNLevel2 $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->SUNLevel2[] = $value;
      } else {
        $this->SUNLevel2[$offset] = $value;
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
      unset($this->SUNLevel2[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SUNLevel2 Return the current element
     */
    public function current()
    {
      return current($this->SUNLevel2);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SUNLevel2);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SUNLevel2);
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
      reset($this->SUNLevel2);
    }

    /**
     * Countable implementation
     *
     * @return SUNLevel2 Return count of elements
     */
    public function count()
    {
      return count($this->SUNLevel2);
    }

}
