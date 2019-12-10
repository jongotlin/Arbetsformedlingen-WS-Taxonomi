<?php

namespace ArbetsformedlingenWsTaxonomi;

class ArrayOfAFOfficeCustom implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AFOffice[] $AFOffice
     */
    protected $AFOffice = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AFOffice[]
     */
    public function getAFOffice()
    {
      return $this->AFOffice;
    }

    /**
     * @param AFOffice[] $AFOffice
     * @return \ArbetsformedlingenWsTaxonomi\ArrayOfAFOffice
     */
    public function setAFOffice(array $AFOffice = null)
    {
      $this->AFOffice = $AFOffice;
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
      return isset($this->AFOffice[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AFOffice
     */
    public function offsetGet($offset)
    {
      return $this->AFOffice[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AFOffice $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AFOffice[] = $value;
      } else {
        $this->AFOffice[$offset] = $value;
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
      unset($this->AFOffice[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AFOffice Return the current element
     */
    public function current()
    {
      return current($this->AFOffice);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AFOffice);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AFOffice);
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
      reset($this->AFOffice);
    }

    /**
     * Countable implementation
     *
     * @return AFOffice Return count of elements
     */
    public function count()
    {
      return count($this->AFOffice);
    }

}
