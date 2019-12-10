<?php

namespace ArbetsformedlingenWsTaxonomi;

class ArrayOfLanguageISOCustom implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var LanguageISO[] $LanguageISO
     */
    protected $LanguageISO = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return LanguageISO[]
     */
    public function getLanguageISO()
    {
      return $this->LanguageISO;
    }

    /**
     * @param LanguageISO[] $LanguageISO
     * @return \ArbetsformedlingenWsTaxonomi\ArrayOfLanguageISO
     */
    public function setLanguageISO(array $LanguageISO = null)
    {
      $this->LanguageISO = $LanguageISO;
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
      return isset($this->LanguageISO[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return LanguageISO
     */
    public function offsetGet($offset)
    {
      return $this->LanguageISO[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param LanguageISO $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->LanguageISO[] = $value;
      } else {
        $this->LanguageISO[$offset] = $value;
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
      unset($this->LanguageISO[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return LanguageISO Return the current element
     */
    public function current()
    {
      return current($this->LanguageISO);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->LanguageISO);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->LanguageISO);
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
      reset($this->LanguageISO);
    }

    /**
     * Countable implementation
     *
     * @return LanguageISO Return count of elements
     */
    public function count()
    {
      return count($this->LanguageISO);
    }

}
