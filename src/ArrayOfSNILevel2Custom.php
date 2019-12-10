<?php

namespace ArbetsformedlingenWsTaxonomi;

class ArrayOfSNILevel2Custom implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SNILevel2[] $SNILevel2
     */
    protected $SNILevel2 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SNILevel2[]
     */
    public function getSNILevel2()
    {
      return $this->SNILevel2;
    }

    /**
     * @param SNILevel2[] $SNILevel2
     * @return \ArbetsformedlingenWsTaxonomi\ArrayOfSNILevel2
     */
    public function setSNILevel2(array $SNILevel2 = null)
    {
      $this->SNILevel2 = $SNILevel2;
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
      return isset($this->SNILevel2[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SNILevel2
     */
    public function offsetGet($offset)
    {
      return $this->SNILevel2[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SNILevel2 $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->SNILevel2[] = $value;
      } else {
        $this->SNILevel2[$offset] = $value;
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
      unset($this->SNILevel2[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SNILevel2 Return the current element
     */
    public function current()
    {
      return current($this->SNILevel2);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SNILevel2);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SNILevel2);
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
      reset($this->SNILevel2);
    }

    /**
     * Countable implementation
     *
     * @return SNILevel2 Return count of elements
     */
    public function count()
    {
      return count($this->SNILevel2);
    }

}
