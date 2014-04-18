<?php
namespace Craft;

class SendFileTwigExtension extends \Twig_Extension
{

	public function getName()
	{
		return Craft::t('SendFile');
	}

	public function getFilters()
	{
		return array(
			'sendfile' => new \Twig_Filter_Method($this, 'sendFileFilter')
		);
	}

	public function sendFileFilter($asset)
	{
		return craft()->request->sendFile( $asset['filename'], @file_get_contents( $asset->getSource()->settings['path'] . $asset['filename'] ) );
	}

}
