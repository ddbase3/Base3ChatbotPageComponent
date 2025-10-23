<?php declare(strict_types=1);

use Base3\Base3Ilias\PageComponent\AbstractPageComponentPluginGUI;

/**
 * @ilCtrl_isCalledBy ilBase3ChatbotPageComponentPluginGUI: ilPCPluggedGUI
 */
class ilBase3ChatbotPageComponentPluginGUI extends AbstractPageComponentPluginGUI {

	protected function getPageComponentName(): string {
		return 'BASE3 Chatbot';
	}

	protected function getPageComponentDesc(): string {
		return 'BASE3 Chatbot Page Component';
	}

	protected function getDefaultProps(): array {
		return ['endpoint' => ''];
	}

	protected function setFormContent(ilPropertyFormGUI $form, array $props): void {
		$pageModuleEndpointControl = new ilTextInputGUI('Endpoint', 'endpoint');
		$pageModuleEndpointControl->setValue($props['endpoint']);
		$form->addItem($pageModuleEndpointControl);
	}

	protected function getPresentationHtml(array $a_properties, string $plugin_version): string {
		$this->mainTemplate->addJavaScript('components/Base3/ClientStack/assetloader/assetloader.min.js');

		return '<div style="background:#eee;">BASE3 Chatbot []</div>';
	}
}
