<?php

namespace Ivoz\Domain\Model\Calendar;



interface CalendarInterface
{
    /**
     * Get name
     *
     * @return string
     */
    public function getName();


    /**
     * Get company
     *
     * @return \Ivoz\Domain\Model\Company\CompanyInterface
     */
    public function getCompany();



}
