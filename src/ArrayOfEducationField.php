<?php

namespace ArbetsformedlingenWsTaxonomi;

class ArrayOfEducationField implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var EducationField[] $EducationField
     */
    protected $EducationField = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return EducationField[]
     */
    public function getEducationField()
    {
      return $this->EducationField;
    }

    /**
     * @param EducationField[] $EducationField
     * @return \ArbetsformedlingenWsTaxonomi\ArrayOfEducationField
     */
    public function setEducationField(array $EducationField = null)
    {
      $this->EducationField = $EducationField;
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
      return isset($this->EducationField[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return EducationField
     */
    public function offsetGet($offset)
    {
      return $this->EducationField[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param EducationField $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->EducationField[] = $value;
      } else {
        $this->EducationField[$offset] = $value;
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
      unset($this->EducationField[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return EducationField Return the current element
     */
    public function current()
    {
      return current($this->EducationField);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->EducationField);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->EducationField);
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
      reset($this->EducationField);
    }

    /**
     * Countable implementation
     *
     * @return EducationField Return count of elements
     */
    public function count()
    {
      return count($this->EducationField);
    }

}
