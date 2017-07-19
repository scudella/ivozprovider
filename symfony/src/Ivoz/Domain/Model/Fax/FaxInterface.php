<?php

namespace Ivoz\Domain\Model\Fax;



interface FaxInterface
{
    /**
     * Get name
     *
     * @return string
     */
    public function getName();


    /**
     * Get email
     *
     * @return string
     */
    public function getEmail();


    /**
     * Get sendByEmail
     *
     * @return boolean
     */
    public function getSendByEmail();


    /**
     * Get company
     *
     * @return \Ivoz\Domain\Model\Company\CompanyInterface
     */
    public function getCompany();


    /**
     * Get outgoingDDI
     *
     * @return \Ivoz\Domain\Model\DDI\DDIInterface
     */
    public function getOutgoingDDI();



}
