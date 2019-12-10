<?php

namespace ArbetsformedlingenWsTaxonomi;

class ArrayOfOccupationExperienceYearCustom implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var OccupationExperienceYear[] $OccupationExperienceYear
     */
    protected $OccupationExperienceYear = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return OccupationExperienceYear[]
     */
    public function getOccupationExperienceYear()
    {
      return $this->OccupationExperienceYear;
    }

    /**
     * @param OccupationExperienceYear[] $OccupationExperienceYear
     * @return \ArbetsformedlingenWsTaxonomi\ArrayOfOccupationExperienceYear
     */
    public function setOccupationExperienceYear(array $OccupationExperienceYear = null)
    {
      $this->OccupationExperienceYear = $OccupationExperienceYear;
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
      return isset($this->OccupationExperienceYear[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return OccupationExperienceYear
     */
    public function offsetGet($offset)
    {
      return $this->OccupationExperienceYear[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param OccupationExperienceYear $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->OccupationExperienceYear[] = $value;
      } else {
        $this->OccupationExperienceYear[$offset] = $value;
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
      unset($this->OccupationExperienceYear[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return OccupationExperienceYear Return the current element
     */
    public function current()
    {
      return current($this->OccupationExperienceYear);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->OccupationExperienceYear);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->OccupationExperienceYear);
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
      reset($this->OccupationExperienceYear);
    }

    /**
     * Countable implementation
     *
     * @return OccupationExperienceYear Return count of elements
     */
    public function count()
    {
      return count($this->OccupationExperienceYear);
    }

}
