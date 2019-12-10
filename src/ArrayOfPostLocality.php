<?php

namespace ArbetsformedlingenWsTaxonomi;

class ArrayOfPostLocality implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PostLocality[] $PostLocality
     */
    protected $PostLocality = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PostLocality[]
     */
    public function getPostLocality()
    {
      return $this->PostLocality;
    }

    /**
     * @param PostLocality[] $PostLocality
     * @return \ArbetsformedlingenWsTaxonomi\ArrayOfPostLocality
     */
    public function setPostLocality(array $PostLocality = null)
    {
      $this->PostLocality = $PostLocality;
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
      return isset($this->PostLocality[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PostLocality
     */
    public function offsetGet($offset)
    {
      return $this->PostLocality[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PostLocality $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PostLocality[] = $value;
      } else {
        $this->PostLocality[$offset] = $value;
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
      unset($this->PostLocality[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PostLocality Return the current element
     */
    public function current()
    {
      return current($this->PostLocality);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PostLocality);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PostLocality);
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
      reset($this->PostLocality);
    }

    /**
     * Countable implementation
     *
     * @return PostLocality Return count of elements
     */
    public function count()
    {
      return count($this->PostLocality);
    }

}
