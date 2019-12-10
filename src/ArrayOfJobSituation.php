<?php

namespace ArbetsformedlingenWsTaxonomi;

class ArrayOfJobSituation implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JobSituation[] $JobSituation
     */
    protected $JobSituation = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JobSituation[]
     */
    public function getJobSituation()
    {
      return $this->JobSituation;
    }

    /**
     * @param JobSituation[] $JobSituation
     * @return \ArbetsformedlingenWsTaxonomi\ArrayOfJobSituation
     */
    public function setJobSituation(array $JobSituation = null)
    {
      $this->JobSituation = $JobSituation;
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
      return isset($this->JobSituation[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JobSituation
     */
    public function offsetGet($offset)
    {
      return $this->JobSituation[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JobSituation $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->JobSituation[] = $value;
      } else {
        $this->JobSituation[$offset] = $value;
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
      unset($this->JobSituation[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JobSituation Return the current element
     */
    public function current()
    {
      return current($this->JobSituation);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->JobSituation);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->JobSituation);
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
      reset($this->JobSituation);
    }

    /**
     * Countable implementation
     *
     * @return JobSituation Return count of elements
     */
    public function count()
    {
      return count($this->JobSituation);
    }

}
