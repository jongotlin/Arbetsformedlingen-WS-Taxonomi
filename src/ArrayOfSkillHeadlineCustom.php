<?php

namespace ArbetsformedlingenWsTaxonomi;

class ArrayOfSkillHeadlineCustom implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SkillHeadline[] $SkillHeadline
     */
    protected $SkillHeadline = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SkillHeadline[]
     */
    public function getSkillHeadline()
    {
      return $this->SkillHeadline;
    }

    /**
     * @param SkillHeadline[] $SkillHeadline
     * @return \ArbetsformedlingenWsTaxonomi\ArrayOfSkillHeadline
     */
    public function setSkillHeadline(array $SkillHeadline = null)
    {
      $this->SkillHeadline = $SkillHeadline;
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
      return isset($this->SkillHeadline[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SkillHeadline
     */
    public function offsetGet($offset)
    {
      return $this->SkillHeadline[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SkillHeadline $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->SkillHeadline[] = $value;
      } else {
        $this->SkillHeadline[$offset] = $value;
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
      unset($this->SkillHeadline[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SkillHeadline Return the current element
     */
    public function current()
    {
      return current($this->SkillHeadline);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SkillHeadline);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SkillHeadline);
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
      reset($this->SkillHeadline);
    }

    /**
     * Countable implementation
     *
     * @return SkillHeadline Return count of elements
     */
    public function count()
    {
      return count($this->SkillHeadline);
    }

}
