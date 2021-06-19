<?php

/**
 * IANA Physical Class definitions
 * Last-Updated 2015-07-16
 */

return [
	[
		'id' => 1,
		'type' => 'other',
		'description' => 'The enumeration "other" is applicable if the physical entity class is known but does not match any of the supported values.',
	],
	[
		'id' => 2,
		'type' => 'unknown',
		'description' => 'The enumeration "unknown" is applicable if the physical entity class is unknown to the agent.',
	],
	[
		'id' => 3,
		'type' => 'chassis',
		'description' => 'The enumeration "chassis" is applicable if the physical entity class is an overall container for networking equipment.  Any class of physical entity, except a stack, may be contained within a chassis; a chassis may only be contained within a stack.',
	],
	[
		'id' => 4,
		'type' => 'backplane',
		'description' => 'The enumeration "backplane" is applicable if the physical entity class is some sort of device for aggregating and forwarding networking traffic, such as a shared backplane in a modular ethernet switch.  Note that an agent may model a backplane as a single physical entity, which is actually implemented as multiple discrete physical components (within a chassis or stack).',
	],
	[
		'id' => 5,
		'type' => 'container',
		'description' => 'The enumeration "container" is applicable if the physical entity class is capable of containing one or more removable physical entities, possibly of different types. For example, each (empty or full) slot in a chassis will be modeled as a container.  Note that all removable physical entities should be modeled within a container entity, such as field-replaceable modules, fans, or power supplies.  Note that all known containers should be modeled by the agent, including empty containers.',
	],
	[
		'id' => 6,
		'type' => 'powerSupply',
		'description' => 'The enumeration "powerSupply" is applicable if the physical entity class is a power-supplying component.',
	],
	[
		'id' => 7,
		'type' => 'fan',
		'description' => 'The enumeration "fan" is applicable if the physical entity class is a fan or other heat-reduction component',
	],
	[
		'id' => 8,
		'type' => 'sensor',
		'description' => 'The enumeration "sensor" is applicable if the physical entity class is some sort of sensor, such as a temperature sensor within a router chassis.',
	],
	[
		'id' => 9,
		'type' => 'module',
		'description' => 'The enumeration "module" is applicable if the physical entity class is some sort of self-contained sub-system. If the enumeration "module" is removable, then it should be modeled within a container entity; otherwise, it should be modeled directly within another physical entity.',
	],
	[
		'id' => 10,
		'type' => 'port',
		'description' => 'The enumeration "port" is applicable if the physical entity class is some sort of networking port, capable of receiving and/or transmitting networking traffic',
	],
	[
		'id' => 11,
		'type' => 'stack',
		'description' => 'The enumeration "stack" is applicable if the physical entity class is some sort of super-container (possibly virtual) intended to group together multiple chassis entities. A stack may be realized by a "virtual" cable, a real interconnect cable attached to multiple chassis, or multiple interconnect cables.  A stack should not be modeled within any other physical entities, but a stack may be contained within another stack.  Only chassis entities should be contained within a stack.',
	],
	[
		'id' => 12,
		'type' => 'cpu',
		'description' => 'The enumeration "cpu" is applicable if the physical entity class is some sort of central processing unit',
	],
	[
		'id' => 13,
		'type' => 'energyObject',
		'description' => 'The enumeration "energyObject" is applicable if the physical entity is some sort of energy object, i.e., a piece of equipment that is part of or attached to a communications network that is monitored, controlled, or aids in the management of another device for Energy Management',
	],
	[
		'id' => 14,
		'type' => 'battery',
		'description' => 'The enumeration "battery" is applicable if the physical entity class is some sort of battery.',
	],
	[
		'id' => 15,
		'type' => 'storageDrive',
		'description' => 'The enumeration "storageDrive" is applicable if the physical entity class is some sort of entity with data storage capability as main functionality, e.g. disk drive (HDD), solid state device (SSD), hybrid (SSHD), object storage (OSD) or other.',
	],
];