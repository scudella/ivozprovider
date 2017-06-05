<?php

namespace Core\Model\User;



interface UserInterface
{
    /**
     * Get id
     *
     * @return integer
     */
    public function getId();


    /**
     * Get name
     *
     * @return string
     */
    public function getName();


    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname();


    /**
     * Get email
     *
     * @return string
     */
    public function getEmail();


    /**
     * Get pass
     *
     * @return string
     */
    public function getPass();


    /**
     * Get doNotDisturb
     *
     * @return boolean
     */
    public function getDoNotDisturb();


    /**
     * Get isBoss
     *
     * @return boolean
     */
    public function getIsBoss();


    /**
     * Get exceptionBoosAssistantRegExp
     *
     * @return string
     */
    public function getExceptionBoosAssistantRegExp();


    /**
     * Get active
     *
     * @return boolean
     */
    public function getActive();


    /**
     * Get maxCalls
     *
     * @return integer
     */
    public function getMaxCalls();


    /**
     * Get voicemailEnabled
     *
     * @return boolean
     */
    public function getVoicemailEnabled();


    /**
     * Get voicemailSendMail
     *
     * @return boolean
     */
    public function getVoicemailSendMail();


    /**
     * Get voicemailAttachSound
     *
     * @return boolean
     */
    public function getVoicemailAttachSound();


    /**
     * Get tokenKey
     *
     * @return string
     */
    public function getTokenKey();


    /**
     * Get areaCode
     *
     * @return string
     */
    public function getAreaCode();


    /**
     * Get company
     *
     * @return \Core\Model\Company\CompanyInterface
     */
    public function getCompany();


    /**
     * Get callACL
     *
     * @return \Core\Model\CallACL\CallACLInterface
     */
    public function getCallACL();


    /**
     * Get bossAssistant
     *
     * @return \Core\Model\User\UserInterface
     */
    public function getBossAssistant();


    /**
     * Get country
     *
     * @return \Core\Model\Country\CountryInterface
     */
    public function getCountry();


    /**
     * Get language
     *
     * @return \Core\Model\Language\LanguageInterface
     */
    public function getLanguage();


    /**
     * Get terminal
     *
     * @return \Core\Model\Terminal\TerminalInterface
     */
    public function getTerminal();


    /**
     * Get extension
     *
     * @return \Core\Model\Extension\ExtensionInterface
     */
    public function getExtension();


    /**
     * Get timezone
     *
     * @return \Core\Model\Timezone\TimezoneInterface
     */
    public function getTimezone();


    /**
     * Get outgoingDDI
     *
     * @return \Core\Model\DDI\DDIInterface
     */
    public function getOutgoingDDI();



}

