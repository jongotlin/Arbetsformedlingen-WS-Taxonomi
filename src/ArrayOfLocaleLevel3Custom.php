<?php

namespace ArbetsformedlingenWsTaxonomi;

class ArrayOfLocaleLevel3Custom implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var LocaleLevel3[] $LocaleLevel3
     */
    protected $LocaleLevel3 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return LocaleLevel3[]
     */
    public function getLocaleLevel3()
    {
      return $this->LocaleLevel3;
    }

    /**
     * @param LocaleLevel3[] $LocaleLevel3
     * @return \ArbetsformedlingenWsTaxonomi\ArrayOfLocaleLevel3
     */
    public function setLocaleLevel3(array $LocaleLevel3 = null)
    {
      $this->LocaleLevel3 = $LocaleLevel3;
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
      return isset($this->LocaleLevel3[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return LocaleLevel3
     */
    public function offsetGet($offset)
    {
      return $this->LocaleLevel3[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param LocaleLevel3 $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->LocaleLevel3[] = $value;
      } else {
        $this->LocaleLevel3[$offset] = $value;
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
      unset($this->LocaleLevel3[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return LocaleLevel3 Return the current element
     */
    public function current()
    {
      return current($this->LocaleLevel3);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->LocaleLevel3);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->LocaleLevel3);
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
      reset($this->LocaleLevel3);
    }

    /**
     * Countable implementation
     *
     * @return LocaleLevel3 Return count of elements
     */
    public function count()
    {
      return count($this->LocaleLevel3);
    }

}
