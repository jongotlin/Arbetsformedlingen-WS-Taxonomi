<?php

namespace ArbetsformedlingenWsTaxonomi;

class ArrayOfEducationLevel implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var EducationLevel[] $EducationLevel
     */
    protected $EducationLevel = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return EducationLevel[]
     */
    public function getEducationLevel()
    {
      return $this->EducationLevel;
    }

    /**
     * @param EducationLevel[] $EducationLevel
     * @return \ArbetsformedlingenWsTaxonomi\ArrayOfEducationLevel
     */
    public function setEducationLevel(array $EducationLevel = null)
    {
      $this->EducationLevel = $EducationLevel;
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
      return isset($this->EducationLevel[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return EducationLevel
     */
    public function offsetGet($offset)
    {
      return $this->EducationLevel[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param EducationLevel $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->EducationLevel[] = $value;
      } else {
        $this->EducationLevel[$offset] = $value;
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
      unset($this->EducationLevel[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return EducationLevel Return the current element
     */
    public function current()
    {
      return current($this->EducationLevel);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->EducationLevel);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->EducationLevel);
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
      reset($this->EducationLevel);
    }

    /**
     * Countable implementation
     *
     * @return EducationLevel Return count of elements
     */
    public function count()
    {
      return count($this->EducationLevel);
    }

}
