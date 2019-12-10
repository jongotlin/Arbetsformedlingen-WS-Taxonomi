<?php

namespace ArbetsformedlingenWsTaxonomi;

class ArrayOfSUNGuideBranch implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SUNGuideBranch[] $SUNGuideBranch
     */
    protected $SUNGuideBranch = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SUNGuideBranch[]
     */
    public function getSUNGuideBranch()
    {
      return $this->SUNGuideBranch;
    }

    /**
     * @param SUNGuideBranch[] $SUNGuideBranch
     * @return \ArbetsformedlingenWsTaxonomi\ArrayOfSUNGuideBranch
     */
    public function setSUNGuideBranch(array $SUNGuideBranch = null)
    {
      $this->SUNGuideBranch = $SUNGuideBranch;
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
      return isset($this->SUNGuideBranch[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SUNGuideBranch
     */
    public function offsetGet($offset)
    {
      return $this->SUNGuideBranch[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SUNGuideBranch $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->SUNGuideBranch[] = $value;
      } else {
        $this->SUNGuideBranch[$offset] = $value;
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
      unset($this->SUNGuideBranch[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SUNGuideBranch Return the current element
     */
    public function current()
    {
      return current($this->SUNGuideBranch);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SUNGuideBranch);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SUNGuideBranch);
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
      reset($this->SUNGuideBranch);
    }

    /**
     * Countable implementation
     *
     * @return SUNGuideBranch Return count of elements
     */
    public function count()
    {
      return count($this->SUNGuideBranch);
    }

}
