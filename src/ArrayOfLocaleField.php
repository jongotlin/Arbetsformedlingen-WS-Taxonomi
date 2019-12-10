<?php

namespace ArbetsformedlingenWsTaxonomi;

class ArrayOfLocaleField implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var LocaleField[] $LocaleField
     */
    protected $LocaleField = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return LocaleField[]
     */
    public function getLocaleField()
    {
      return $this->LocaleField;
    }

    /**
     * @param LocaleField[] $LocaleField
     * @return \ArbetsformedlingenWsTaxonomi\ArrayOfLocaleField
     */
    public function setLocaleField(array $LocaleField = null)
    {
      $this->LocaleField = $LocaleField;
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
      return isset($this->LocaleField[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return LocaleField
     */
    public function offsetGet($offset)
    {
      return $this->LocaleField[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param LocaleField $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->LocaleField[] = $value;
      } else {
        $this->LocaleField[$offset] = $value;
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
      unset($this->LocaleField[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return LocaleField Return the current element
     */
    public function current()
    {
      return current($this->LocaleField);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->LocaleField);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->LocaleField);
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
      reset($this->LocaleField);
    }

    /**
     * Countable implementation
     *
     * @return LocaleField Return count of elements
     */
    public function count()
    {
      return count($this->LocaleField);
    }

}
