<?php

namespace Ivoz\Domain\Model\InvoiceTemplate;



interface InvoiceTemplateInterface
{
    /**
     * Get name
     *
     * @return string
     */
    public function getName();


    /**
     * Get description
     *
     * @return string
     */
    public function getDescription();


    /**
     * Get template
     *
     * @return string
     */
    public function getTemplate();


    /**
     * Get templateHeader
     *
     * @return string
     */
    public function getTemplateHeader();


    /**
     * Get templateFooter
     *
     * @return string
     */
    public function getTemplateFooter();


    /**
     * Get brand
     *
     * @return \Ivoz\Domain\Model\Brand\BrandInterface
     */
    public function getBrand();



}
