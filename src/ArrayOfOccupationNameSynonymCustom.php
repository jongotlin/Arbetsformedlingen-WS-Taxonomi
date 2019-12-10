<?php

namespace ArbetsformedlingenWsTaxonomi;

class ArrayOfOccupationNameSynonymCustom implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var OccupationNameSynonym[] $OccupationNameSynonym
     */
    protected $OccupationNameSynonym = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return OccupationNameSynonym[]
     */
    public function getOccupationNameSynonym()
    {
      return $this->OccupationNameSynonym;
    }

    /**
     * @param OccupationNameSynonym[] $OccupationNameSynonym
     * @return \ArbetsformedlingenWsTaxonomi\ArrayOfOccupationNameSynonym
     */
    public function setOccupationNameSynonym(array $OccupationNameSynonym = null)
    {
      $this->OccupationNameSynonym = $OccupationNameSynonym;
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
      return isset($this->OccupationNameSynonym[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return OccupationNameSynonym
     */
    public function offsetGet($offset)
    {
      return $this->OccupationNameSynonym[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param OccupationNameSynonym $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->OccupationNameSynonym[] = $value;
      } else {
        $this->OccupationNameSynonym[$offset] = $value;
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
      unset($this->OccupationNameSynonym[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return OccupationNameSynonym Return the current element
     */
    public function current()
    {
      return current($this->OccupationNameSynonym);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->OccupationNameSynonym);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->OccupationNameSynonym);
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
      reset($this->OccupationNameSynonym);
    }

    /**
     * Countable implementation
     *
     * @return OccupationNameSynonym Return count of elements
     */
    public function count()
    {
      return count($this->OccupationNameSynonym);
    }

}
