<?php 

return [
    'pulse' => [
        'name' => 'Pulse',
        'permission' => 'viewPulse',
        'route_segment' => 'pulse',
        'icon' => 'fas fa-wave-square',
        'entries' => [
			[
				'name'  => 'seat-pulse::settings',
				'label' => 'seat-pulse::settings.pulse',
				'icon'  => 'fas fa-wave-square',
				'route' => 'pulse',
				'permission' => 'viewPulse',
				'new-tab' => true,
			],
        ],
    ],
];

// Put under another menu - not working
return [
	[
		'name'  => 'seat-pulse::settings',
		'label' => 'seat-pulse::settings.pulse',
		'icon'  => 'fas fa-wave-square',
		'route' => 'pulse',
		'permission' => 'viewPulse',
		'new-tab' => true,
	],
];
