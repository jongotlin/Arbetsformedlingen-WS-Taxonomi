<?php

namespace ArbetsformedlingenWsTaxonomi;

class ArrayOfSNILevel1Custom implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SNILevel1[] $SNILevel1
     */
    protected $SNILevel1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SNILevel1[]
     */
    public function getSNILevel1()
    {
      return $this->SNILevel1;
    }

    /**
     * @param SNILevel1[] $SNILevel1
     * @return \ArbetsformedlingenWsTaxonomi\ArrayOfSNILevel1
     */
    public function setSNILevel1(array $SNILevel1 = null)
    {
      $this->SNILevel1 = $SNILevel1;
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
      return isset($this->SNILevel1[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SNILevel1
     */
    public function offsetGet($offset)
    {
      return $this->SNILevel1[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SNILevel1 $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->SNILevel1[] = $value;
      } else {
        $this->SNILevel1[$offset] = $value;
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
      unset($this->SNILevel1[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SNILevel1 Return the current element
     */
    public function current()
    {
      return current($this->SNILevel1);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SNILevel1);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SNILevel1);
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
      reset($this->SNILevel1);
    }

    /**
     * Countable implementation
     *
     * @return SNILevel1 Return count of elements
     */
    public function count()
    {
      return count($this->SNILevel1);
    }

}
