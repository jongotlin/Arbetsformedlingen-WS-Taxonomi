<?php

namespace ArbetsformedlingenWsTaxonomi;

class ArrayOfSkillMainHeadlineCustom implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SkillMainHeadline[] $SkillMainHeadline
     */
    protected $SkillMainHeadline = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SkillMainHeadline[]
     */
    public function getSkillMainHeadline()
    {
      return $this->SkillMainHeadline;
    }

    /**
     * @param SkillMainHeadline[] $SkillMainHeadline
     * @return \ArbetsformedlingenWsTaxonomi\ArrayOfSkillMainHeadline
     */
    public function setSkillMainHeadline(array $SkillMainHeadline = null)
    {
      $this->SkillMainHeadline = $SkillMainHeadline;
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
      return isset($this->SkillMainHeadline[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SkillMainHeadline
     */
    public function offsetGet($offset)
    {
      return $this->SkillMainHeadline[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SkillMainHeadline $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->SkillMainHeadline[] = $value;
      } else {
        $this->SkillMainHeadline[$offset] = $value;
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
      unset($this->SkillMainHeadline[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SkillMainHeadline Return the current element
     */
    public function current()
    {
      return current($this->SkillMainHeadline);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SkillMainHeadline);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SkillMainHeadline);
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
      reset($this->SkillMainHeadline);
    }

    /**
     * Countable implementation
     *
     * @return SkillMainHeadline Return count of elements
     */
    public function count()
    {
      return count($this->SkillMainHeadline);
    }

}
