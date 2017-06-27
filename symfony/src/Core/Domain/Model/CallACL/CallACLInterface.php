<?php

namespace Core\Domain\Model\CallACL;



interface CallACLInterface
{
    /**
     * Get name
     *
     * @return string
     */
    public function getName();


    /**
     * Get defaultPolicy
     *
     * @return string
     */
    public function getDefaultPolicy();


    /**
     * Get company
     *
     * @return \Core\Domain\Model\Company\CompanyInterface
     */
    public function getCompany();



}

