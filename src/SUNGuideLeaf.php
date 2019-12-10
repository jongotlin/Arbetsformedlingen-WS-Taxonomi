<?php

namespace ArbetsformedlingenWsTaxonomi;

class SUNGuideLeaf
{

    /**
     * @var SUNField2 $SUNField2
     */
    protected $SUNField2 = null;

    /**
     * @var ArrayOfSUNField3 $SUNField3List
     */
    protected $SUNField3List = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SUNField2
     */
    public function getSUNField2()
    {
      return $this->SUNField2;
    }

    /**
     * @param SUNField2 $SUNField2
     * @return \ArbetsformedlingenWsTaxonomi\SUNGuideLeaf
     */
    public function setSUNField2($SUNField2)
    {
      $this->SUNField2 = $SUNField2;
      return $this;
    }

    /**
     * @return ArrayOfSUNField3
     */
    public function getSUNField3List()
    {
      return $this->SUNField3List;
    }

    /**
     * @param ArrayOfSUNField3 $SUNField3List
     * @return \ArbetsformedlingenWsTaxonomi\SUNGuideLeaf
     */
    public function setSUNField3List($SUNField3List)
    {
      $this->SUNField3List = $SUNField3List;
      return $this;
    }

}
