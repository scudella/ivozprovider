<?php

namespace Ivoz\Domain\Model\RoutingPattern;



interface RoutingPatternInterface
{
    /**
     * Get regExp
     *
     * @return string
     */
    public function getRegExp();


    /**
     * Get brand
     *
     * @return \Ivoz\Domain\Model\Brand\BrandInterface
     */
    public function getBrand();


    /**
     * Get name
     *
     * @return Name
     */
    public function getName();


    /**
     * Get description
     *
     * @return Description
     */
    public function getDescription();

}
