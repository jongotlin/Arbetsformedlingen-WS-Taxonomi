<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetPostCodesByNationalNUTSLAU2CodeResponse
{

    /**
     * @var ArrayOfPostCode $GetPostCodesByNationalNUTSLAU2CodeResult
     */
    protected $GetPostCodesByNationalNUTSLAU2CodeResult = null;

    /**
     * @param ArrayOfPostCode $GetPostCodesByNationalNUTSLAU2CodeResult
     */
    public function __construct($GetPostCodesByNationalNUTSLAU2CodeResult)
    {
      $this->GetPostCodesByNationalNUTSLAU2CodeResult = $GetPostCodesByNationalNUTSLAU2CodeResult;
    }

    /**
     * @return ArrayOfPostCode
     */
    public function getGetPostCodesByNationalNUTSLAU2CodeResult()
    {
      return $this->GetPostCodesByNationalNUTSLAU2CodeResult;
    }

    /**
     * @param ArrayOfPostCode $GetPostCodesByNationalNUTSLAU2CodeResult
     * @return \ArbetsformedlingenWsTaxonomi\GetPostCodesByNationalNUTSLAU2CodeResponse
     */
    public function setGetPostCodesByNationalNUTSLAU2CodeResult($GetPostCodesByNationalNUTSLAU2CodeResult)
    {
      $this->GetPostCodesByNationalNUTSLAU2CodeResult = $GetPostCodesByNationalNUTSLAU2CodeResult;
      return $this;
    }

}
