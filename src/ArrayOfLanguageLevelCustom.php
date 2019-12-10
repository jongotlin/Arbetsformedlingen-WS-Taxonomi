<?php

namespace ArbetsformedlingenWsTaxonomi;

class ArrayOfLanguageLevelCustom implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var LanguageLevel[] $LanguageLevel
     */
    protected $LanguageLevel = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return LanguageLevel[]
     */
    public function getLanguageLevel()
    {
      return $this->LanguageLevel;
    }

    /**
     * @param LanguageLevel[] $LanguageLevel
     * @return \ArbetsformedlingenWsTaxonomi\ArrayOfLanguageLevel
     */
    public function setLanguageLevel(array $LanguageLevel = null)
    {
      $this->LanguageLevel = $LanguageLevel;
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
      return isset($this->LanguageLevel[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return LanguageLevel
     */
    public function offsetGet($offset)
    {
      return $this->LanguageLevel[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param LanguageLevel $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->LanguageLevel[] = $value;
      } else {
        $this->LanguageLevel[$offset] = $value;
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
      unset($this->LanguageLevel[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return LanguageLevel Return the current element
     */
    public function current()
    {
      return current($this->LanguageLevel);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->LanguageLevel);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->LanguageLevel);
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
      reset($this->LanguageLevel);
    }

    /**
     * Countable implementation
     *
     * @return LanguageLevel Return count of elements
     */
    public function count()
    {
      return count($this->LanguageLevel);
    }

}
