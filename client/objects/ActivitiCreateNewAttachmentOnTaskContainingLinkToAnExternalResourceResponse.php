<?php

require_once(__DIR__ . '/../ActivitiResponseObject.php');

	

class ActivitiCreateNewAttachmentOnTaskContainingLinkToAnExternalResourceResponse extends ActivitiResponseObject
{
	/* (non-PHPdoc)
	 * @see ActivitiResponseObject::getAttributes()
	 */
	protected function getAttributes()
	{
		return array_merge(parent::getAttributes(), array(
			'id' => 'string',
			'url' => 'string',
			'name' => 'string',
			'description' => 'string',
			'type' => 'string',
			'taskUrl' => 'string',
			'processInstanceUrl' => '',
			'externalUrl' => 'string',
			'contentUrl' => '',
		));
	}
	
	/**
	 * @var string
	 */
	protected $id;

	/**
	 * @var string
	 */
	protected $url;

	/**
	 * @var string
	 */
	protected $name;

	/**
	 * @var string
	 */
	protected $description;

	/**
	 * @var string
	 */
	protected $type;

	/**
	 * @var string
	 */
	protected $taskUrl;

	/**
	 * @var 
	 */
	protected $processInstanceUrl;

	/**
	 * @var string
	 */
	protected $externalUrl;

	/**
	 * @var 
	 */
	protected $contentUrl;

	/**
	 * @return string
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @return string
	 */
	public function getUrl()
	{
		return $this->url;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
	}

	/**
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
	}

	/**
	 * @return string
	 */
	public function getTaskurl()
	{
		return $this->taskUrl;
	}

	/**
	 * @return 
	 */
	public function getProcessinstanceurl()
	{
		return $this->processInstanceUrl;
	}

	/**
	 * @return string
	 */
	public function getExternalurl()
	{
		return $this->externalUrl;
	}

	/**
	 * @return 
	 */
	public function getContenturl()
	{
		return $this->contentUrl;
	}

}

