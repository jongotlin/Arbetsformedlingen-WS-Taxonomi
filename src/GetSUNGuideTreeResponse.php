<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetSUNGuideTreeResponse
{

    /**
     * @var ArrayOfSUNGuideBranch $GetSUNGuideTreeResult
     */
    protected $GetSUNGuideTreeResult = null;

    /**
     * @param ArrayOfSUNGuideBranch $GetSUNGuideTreeResult
     */
    public function __construct($GetSUNGuideTreeResult)
    {
      $this->GetSUNGuideTreeResult = $GetSUNGuideTreeResult;
    }

    /**
     * @return ArrayOfSUNGuideBranch
     */
    public function getGetSUNGuideTreeResult()
    {
      return $this->GetSUNGuideTreeResult;
    }

    /**
     * @param ArrayOfSUNGuideBranch $GetSUNGuideTreeResult
     * @return \ArbetsformedlingenWsTaxonomi\GetSUNGuideTreeResponse
     */
    public function setGetSUNGuideTreeResult($GetSUNGuideTreeResult)
    {
      $this->GetSUNGuideTreeResult = $GetSUNGuideTreeResult;
      return $this;
    }

}
