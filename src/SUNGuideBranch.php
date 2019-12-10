<?php

namespace ArbetsformedlingenWsTaxonomi;

class SUNGuideBranch
{

    /**
     * @var SUNLevel1 $SUNLevel1
     */
    protected $SUNLevel1 = null;

    /**
     * @var ArrayOfSUNGuideLeaf $SUNGuideLeaves
     */
    protected $SUNGuideLeaves = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SUNLevel1
     */
    public function getSUNLevel1()
    {
      return $this->SUNLevel1;
    }

    /**
     * @param SUNLevel1 $SUNLevel1
     * @return \ArbetsformedlingenWsTaxonomi\SUNGuideBranch
     */
    public function setSUNLevel1($SUNLevel1)
    {
      $this->SUNLevel1 = $SUNLevel1;
      return $this;
    }

    /**
     * @return ArrayOfSUNGuideLeaf
     */
    public function getSUNGuideLeaves()
    {
      return $this->SUNGuideLeaves;
    }

    /**
     * @param ArrayOfSUNGuideLeaf $SUNGuideLeaves
     * @return \ArbetsformedlingenWsTaxonomi\SUNGuideBranch
     */
    public function setSUNGuideLeaves($SUNGuideLeaves)
    {
      $this->SUNGuideLeaves = $SUNGuideLeaves;
      return $this;
    }

}
