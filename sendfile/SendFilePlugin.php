<?php
namespace Craft;

class SendFilePlugin extends BasePlugin
{

	/* --------------------------------------------------------------
	 * PLUGIN INFO
	 * ------------------------------------------------------------ */

	public function getName()
	{
		return Craft::t('SendFile');
	}

	public function getVersion()
	{
		return '0.1';
	}

	public function getDeveloper()
	{
		return 'Mason Nugent';
	}

	public function getDeveloperUrl()
	{
		return 'http://nottednugent.com';
	}

	/* --------------------------------------------------------------
	 * HOOKS
	 * ------------------------------------------------------------ */

	/**
	 * Load the SendFileTwigExtension class from our ./twigextensions
	 * directory and return the extension into the template layer
	 */
	public function addTwigExtension()
	{
		Craft::import('plugins.sendfile.twigextensions.SendFileTwigExtension');
		return new SendFileTwigExtension();
	}

}
