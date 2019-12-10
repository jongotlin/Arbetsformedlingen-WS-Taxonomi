<?php

namespace ArbetsformedlingenWsTaxonomi;

class ArrayOfLanguageCustom implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Language[] $Language
     */
    protected $Language = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Language[]
     */
    public function getLanguage()
    {
      return $this->Language;
    }

    /**
     * @param Language[] $Language
     * @return \ArbetsformedlingenWsTaxonomi\ArrayOfLanguage
     */
    public function setLanguage(array $Language = null)
    {
      $this->Language = $Language;
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
      return isset($this->Language[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Language
     */
    public function offsetGet($offset)
    {
      return $this->Language[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Language $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Language[] = $value;
      } else {
        $this->Language[$offset] = $value;
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
      unset($this->Language[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Language Return the current element
     */
    public function current()
    {
      return current($this->Language);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Language);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Language);
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
      reset($this->Language);
    }

    /**
     * Countable implementation
     *
     * @return Language Return count of elements
     */
    public function count()
    {
      return count($this->Language);
    }

}
