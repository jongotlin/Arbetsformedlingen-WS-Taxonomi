<?php

namespace ArbetsformedlingenWsTaxonomi;

class ArrayOfLocaleGroup implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var LocaleGroup[] $LocaleGroup
     */
    protected $LocaleGroup = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return LocaleGroup[]
     */
    public function getLocaleGroup()
    {
      return $this->LocaleGroup;
    }

    /**
     * @param LocaleGroup[] $LocaleGroup
     * @return \ArbetsformedlingenWsTaxonomi\ArrayOfLocaleGroup
     */
    public function setLocaleGroup(array $LocaleGroup = null)
    {
      $this->LocaleGroup = $LocaleGroup;
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
      return isset($this->LocaleGroup[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return LocaleGroup
     */
    public function offsetGet($offset)
    {
      return $this->LocaleGroup[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param LocaleGroup $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->LocaleGroup[] = $value;
      } else {
        $this->LocaleGroup[$offset] = $value;
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
      unset($this->LocaleGroup[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return LocaleGroup Return the current element
     */
    public function current()
    {
      return current($this->LocaleGroup);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->LocaleGroup);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->LocaleGroup);
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
      reset($this->LocaleGroup);
    }

    /**
     * Countable implementation
     *
     * @return LocaleGroup Return count of elements
     */
    public function count()
    {
      return count($this->LocaleGroup);
    }

}
