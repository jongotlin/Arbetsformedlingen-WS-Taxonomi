<?php

namespace ArbetsformedlingenWsTaxonomi;

class ArrayOfPostCode implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PostCode[] $PostCode
     */
    protected $PostCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PostCode[]
     */
    public function getPostCode()
    {
      return $this->PostCode;
    }

    /**
     * @param PostCode[] $PostCode
     * @return \ArbetsformedlingenWsTaxonomi\ArrayOfPostCode
     */
    public function setPostCode(array $PostCode = null)
    {
      $this->PostCode = $PostCode;
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
      return isset($this->PostCode[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PostCode
     */
    public function offsetGet($offset)
    {
      return $this->PostCode[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PostCode $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PostCode[] = $value;
      } else {
        $this->PostCode[$offset] = $value;
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
      unset($this->PostCode[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PostCode Return the current element
     */
    public function current()
    {
      return current($this->PostCode);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PostCode);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PostCode);
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
      reset($this->PostCode);
    }

    /**
     * Countable implementation
     *
     * @return PostCode Return count of elements
     */
    public function count()
    {
      return count($this->PostCode);
    }

}
