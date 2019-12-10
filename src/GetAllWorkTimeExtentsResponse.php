<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetAllWorkTimeExtentsResponse
{

    /**
     * @var ArrayOfWorkTimeExtent $GetAllWorkTimeExtentsResult
     */
    protected $GetAllWorkTimeExtentsResult = null;

    /**
     * @param ArrayOfWorkTimeExtent $GetAllWorkTimeExtentsResult
     */
    public function __construct($GetAllWorkTimeExtentsResult)
    {
      $this->GetAllWorkTimeExtentsResult = $GetAllWorkTimeExtentsResult;
    }

    /**
     * @return ArrayOfWorkTimeExtent
     */
    public function getGetAllWorkTimeExtentsResult()
    {
      return $this->GetAllWorkTimeExtentsResult;
    }

    /**
     * @param ArrayOfWorkTimeExtent $GetAllWorkTimeExtentsResult
     * @return \ArbetsformedlingenWsTaxonomi\GetAllWorkTimeExtentsResponse
     */
    public function setGetAllWorkTimeExtentsResult($GetAllWorkTimeExtentsResult)
    {
      $this->GetAllWorkTimeExtentsResult = $GetAllWorkTimeExtentsResult;
      return $this;
    }

}
