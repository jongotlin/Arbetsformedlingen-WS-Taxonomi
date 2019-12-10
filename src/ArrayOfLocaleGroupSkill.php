<?php

namespace ArbetsformedlingenWsTaxonomi;

class ArrayOfLocaleGroupSkill implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var LocaleGroupSkill[] $LocaleGroupSkill
     */
    protected $LocaleGroupSkill = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return LocaleGroupSkill[]
     */
    public function getLocaleGroupSkill()
    {
      return $this->LocaleGroupSkill;
    }

    /**
     * @param LocaleGroupSkill[] $LocaleGroupSkill
     * @return \ArbetsformedlingenWsTaxonomi\ArrayOfLocaleGroupSkill
     */
    public function setLocaleGroupSkill(array $LocaleGroupSkill = null)
    {
      $this->LocaleGroupSkill = $LocaleGroupSkill;
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
      return isset($this->LocaleGroupSkill[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return LocaleGroupSkill
     */
    public function offsetGet($offset)
    {
      return $this->LocaleGroupSkill[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param LocaleGroupSkill $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->LocaleGroupSkill[] = $value;
      } else {
        $this->LocaleGroupSkill[$offset] = $value;
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
      unset($this->LocaleGroupSkill[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return LocaleGroupSkill Return the current element
     */
    public function current()
    {
      return current($this->LocaleGroupSkill);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->LocaleGroupSkill);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->LocaleGroupSkill);
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
      reset($this->LocaleGroupSkill);
    }

    /**
     * Countable implementation
     *
     * @return LocaleGroupSkill Return count of elements
     */
    public function count()
    {
      return count($this->LocaleGroupSkill);
    }

}
