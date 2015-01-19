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
			'sendfile' => new \Twig_Filter_Method($this, 'sendFileFilter'),
			'getfile' => new \Twig_Filter_Method($this, 'getFileFilter')
		);
	}

	public function sendFileFilter($asset)
	{
		return craft()->request->sendFile( $asset['filename'], @file_get_contents( craft()->config->parseEnvironmentString( $asset->getSource()->settings['path'] ) . $asset['filename'] ) );
	}
	
	public function getFileFilter($asset)
	{
		return @file_get_contents( craft()->config->parseEnvironmentString( $asset->getSource()->settings['path'] ) . $asset['filename'] );
	}

}
