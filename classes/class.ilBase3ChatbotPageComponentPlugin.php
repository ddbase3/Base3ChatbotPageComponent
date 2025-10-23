<?php

class ilBase3ChatbotPageComponentPlugin extends ilPageComponentPlugin {

	public function getPluginName(): string {
		return 'Base3ChatbotPageComponent';
	}
	
	public function isValidParentType(string $a_type): bool {
		return true;
	}
}
