<?php

/*
 * This file is part of the Stack Exchange Api Client library.
 *
 * Copyright (c) 2015 Beñat Espiña <benatespina@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BenatEspina\StackExchangeApiClient\Model;

use BenatEspina\StackExchangeApiClient\Model\Interfaces\UserInterface;
use BenatEspina\StackExchangeApiClient\Model\Traits\ReputationChangeTrait;
use BenatEspina\StackExchangeApiClient\Model\Traits\VoteCountTrait;
use BenatEspina\StackExchangeApiClient\Util\Util;

/**
 * Class User.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class User extends ShallowUser implements UserInterface
{
    use ReputationChangeTrait,
        VoteCountTrait;

    /**
     * About me.
     *
     * @var string|null
     */
    protected $aboutMe;

    /**
     * Account id.
     *
     * @var int
     */
    protected $accountId;

    /**
     * Age.
     *
     * @var int|null
     */
    protected $age;

    /**
     * Answer count.
     *
     * @var int
     */
    protected $answerCount;

    /**
     * Creation date.
     *
     * @var \DateTime
     */
    protected $creationDate;

    /**
     * Boolean that shows if user is employee or not.
     *
     * @var bool
     */
    protected $isEmployee;

    /**
     * Last access date.
     *
     * @var \DateTime
     */
    protected $lastAccessDate;

    /**
     * Last modified date.
     *
     * @var \DateTime|null
     */
    protected $lastModifiedDate;

    /**
     * Location.
     *
     * @var string|null
     */
    protected $location;

    /**
     * Number of questions.
     *
     * @var int
     */
    protected $questionCount;

    /**
     * Time penalty date.
     *
     * @var \DateTime|null
     */
    protected $timedPenaltyDate;

    /**
     * Number of visits.
     *
     * @var int
     */
    protected $viewCount;

    /**
     * Personal website url.
     *
     * @var string|null
     */
    protected $websiteUrl;

    /**
     * Constructor.
     *
     * @param null|mixed[] $json The json string being decoded
     */
    public function __construct($json = null)
    {
        parent::__construct($json);

        $this->loadReputationChange($json);
        $this->loadVoteCount($json);

        $this->aboutMe = Util::setIfStringExists($json, 'about_me');
        $this->accountId = Util::setIfIntegerExists($json, 'account_id');
        $this->age = Util::setIfIntegerExists($json, 'age');
        $this->answerCount = Util::setIfIntegerExists($json, 'answer_count');
        $this->creationDate = Util::setIfDateTimeExists($json, 'creation_date');
        $this->isEmployee = Util::setIfBoolExists($json, 'is_employee');
        $this->lastAccessDate = Util::setIfDateTimeExists($json, 'last_access_date');
        $this->lastModifiedDate = Util::setIfDateTimeExists($json, 'last_modified_date');
        $this->location = Util::setIfStringExists($json, 'location');
        $this->questionCount = Util::setIfIntegerExists($json, 'question_count');
        $this->timedPenaltyDate = Util::setIfDateTimeExists($json, 'timed_penalty_date');
        $this->viewCount = Util::setIfIntegerExists($json, 'view_count');
        $this->websiteUrl = Util::setIfStringExists($json, 'website_url');
    }

    /**
     * {@inheritdoc}
     */
    public function setAboutMe($aboutMe)
    {
        $this->aboutMe = $aboutMe;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getAboutMe()
    {
        return $this->aboutMe;
    }

    /**
     * {@inheritdoc}
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * {@inheritdoc}
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * {@inheritdoc}
     */
    public function setAnswerCount($answerCount)
    {
        $this->answerCount = $answerCount;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getAnswerCount()
    {
        return $this->answerCount;
    }

    /**
     * {@inheritdoc}
     */
    public function setCreationDate(\DateTime $creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * {@inheritdoc}
     */
    public function setEmployee($isEmployee)
    {
        $this->isEmployee = $isEmployee;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function isEmployee()
    {
        return $this->isEmployee;
    }

    /**
     * {@inheritdoc}
     */
    public function setLastAccessDate(\DateTime $lastAccessDate)
    {
        $this->lastAccessDate = $lastAccessDate;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getLastAccessDate()
    {
        return $this->lastAccessDate;
    }

    /**
     * {@inheritdoc}
     */
    public function setLastModifiedDate($lastModifiedDate)
    {
        $this->lastModifiedDate = $lastModifiedDate;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getLastModifiedDate()
    {
        return $this->lastModifiedDate;
    }

    /**
     * {@inheritdoc}
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * {@inheritdoc}
     */
    public function setQuestionCount($questionCount)
    {
        $this->questionCount = $questionCount;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getQuestionCount()
    {
        return $this->questionCount;
    }

    /**
     * {@inheritdoc}
     */
    public function setTimedPenaltyDate($timedPenaltyDate)
    {
        $this->timedPenaltyDate = $timedPenaltyDate;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getTimedPenaltyDate()
    {
        return $this->timedPenaltyDate;
    }

    /**
     * {@inheritdoc}
     */
    public function setViewCount($viewCount)
    {
        $this->viewCount = $viewCount;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getViewCount()
    {
        return $this->viewCount;
    }

    /**
     * {@inheritdoc}
     */
    public function setWebsiteUrl($websiteUrl)
    {
        $this->websiteUrl = $websiteUrl;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getWebsiteUrl()
    {
        return $this->websiteUrl;
    }
}
