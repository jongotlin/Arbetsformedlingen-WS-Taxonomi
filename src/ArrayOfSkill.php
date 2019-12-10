<?php

namespace ArbetsformedlingenWsTaxonomi;

class ArrayOfSkill implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Skill[] $Skill
     */
    protected $Skill = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Skill[]
     */
    public function getSkill()
    {
      return $this->Skill;
    }

    /**
     * @param Skill[] $Skill
     * @return \ArbetsformedlingenWsTaxonomi\ArrayOfSkill
     */
    public function setSkill(array $Skill = null)
    {
      $this->Skill = $Skill;
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
      return isset($this->Skill[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Skill
     */
    public function offsetGet($offset)
    {
      return $this->Skill[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Skill $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Skill[] = $value;
      } else {
        $this->Skill[$offset] = $value;
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
      unset($this->Skill[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Skill Return the current element
     */
    public function current()
    {
      return current($this->Skill);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Skill);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Skill);
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
      reset($this->Skill);
    }

    /**
     * Countable implementation
     *
     * @return Skill Return count of elements
     */
    public function count()
    {
      return count($this->Skill);
    }

}
