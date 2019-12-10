<?php

namespace ArbetsformedlingenWsTaxonomi;

class ArrayOfUnemploymentBenefitSociety implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var UnemploymentBenefitSociety[] $UnemploymentBenefitSociety
     */
    protected $UnemploymentBenefitSociety = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return UnemploymentBenefitSociety[]
     */
    public function getUnemploymentBenefitSociety()
    {
      return $this->UnemploymentBenefitSociety;
    }

    /**
     * @param UnemploymentBenefitSociety[] $UnemploymentBenefitSociety
     * @return \ArbetsformedlingenWsTaxonomi\ArrayOfUnemploymentBenefitSociety
     */
    public function setUnemploymentBenefitSociety(array $UnemploymentBenefitSociety = null)
    {
      $this->UnemploymentBenefitSociety = $UnemploymentBenefitSociety;
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
      return isset($this->UnemploymentBenefitSociety[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return UnemploymentBenefitSociety
     */
    public function offsetGet($offset)
    {
      return $this->UnemploymentBenefitSociety[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param UnemploymentBenefitSociety $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->UnemploymentBenefitSociety[] = $value;
      } else {
        $this->UnemploymentBenefitSociety[$offset] = $value;
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
      unset($this->UnemploymentBenefitSociety[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return UnemploymentBenefitSociety Return the current element
     */
    public function current()
    {
      return current($this->UnemploymentBenefitSociety);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->UnemploymentBenefitSociety);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->UnemploymentBenefitSociety);
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
      reset($this->UnemploymentBenefitSociety);
    }

    /**
     * Countable implementation
     *
     * @return UnemploymentBenefitSociety Return count of elements
     */
    public function count()
    {
      return count($this->UnemploymentBenefitSociety);
    }

}
