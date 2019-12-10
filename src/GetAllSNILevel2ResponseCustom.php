<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetAllSNILevel2ResponseCustom
{

    /**
     * @var ArrayOfSNILevel2 $GetAllSNILevel2Result
     */
    protected $GetAllSNILevel2Result = null;

    /**
     * @param ArrayOfSNILevel2 $GetAllSNILevel2Result
     */
    public function __construct($GetAllSNILevel2Result)
    {
      $this->GetAllSNILevel2Result = $GetAllSNILevel2Result;
    }

    /**
     * @return ArrayOfSNILevel2
     */
    public function getGetAllSNILevel2Result()
    {
      return $this->GetAllSNILevel2Result;
    }

    /**
     * @param ArrayOfSNILevel2 $GetAllSNILevel2Result
     * @return \ArbetsformedlingenWsTaxonomi\GetAllSNILevel2Response
     */
    public function setGetAllSNILevel2Result($GetAllSNILevel2Result)
    {
      $this->GetAllSNILevel2Result = $GetAllSNILevel2Result;
      return $this;
    }

}
