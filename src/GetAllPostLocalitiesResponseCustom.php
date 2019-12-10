<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetAllPostLocalitiesResponseCustom
{

    /**
     * @var ArrayOfPostLocality $GetAllPostLocalitiesResult
     */
    protected $GetAllPostLocalitiesResult = null;

    /**
     * @param ArrayOfPostLocality $GetAllPostLocalitiesResult
     */
    public function __construct($GetAllPostLocalitiesResult)
    {
      $this->GetAllPostLocalitiesResult = $GetAllPostLocalitiesResult;
    }

    /**
     * @return ArrayOfPostLocality
     */
    public function getGetAllPostLocalitiesResult()
    {
      return $this->GetAllPostLocalitiesResult;
    }

    /**
     * @param ArrayOfPostLocality $GetAllPostLocalitiesResult
     * @return \ArbetsformedlingenWsTaxonomi\GetAllPostLocalitiesResponse
     */
    public function setGetAllPostLocalitiesResult($GetAllPostLocalitiesResult)
    {
      $this->GetAllPostLocalitiesResult = $GetAllPostLocalitiesResult;
      return $this;
    }

}
