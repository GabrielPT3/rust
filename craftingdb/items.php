<?php


$Items = array(


    'weapons' => array(
            '0' => array(
                'id' => 0,
                'name' => 'Weapon Flashlight',
                'img' => 'imgs/asset-1.png',
                'desc' => 'The Weapon Flashlight is a weapon modification that can be mounted onto any corresponding gun or ranged weapon. When turned on, it provides a beam of light in front of the uan be seen by anyone. One must be cautious when using the Flashlight, as it may expose them to attack from other players in the night. To mount a weapon mod, simply open the inventory, select a weapon, and drag the weapon mod onto a weapon mod slot in the item panel. Weapon mods can be demounted by dragging the mounted mod off of the item and back into the inventory/storage. The Flashlight can be toggled on or off with the "F" key.',
                'ingredients' => array(
                    '0' => array(
                        'material' => 'High Quality Metal',
                        'quantity' => 3
                    ),
                ),
                'work bench' => 'none'
            ),
            '1' => array(
                'id' => 1,
                'name' => 'Weapon Lasersight',
                'img' => 'imgs/asset-2.png',
                'desc' => 'The Weapon Lasersight modification adds a laser sight to your weapon. This allows the user to see where the point of aim is at the hip and while aiming. The laser dot is visible to everyone. The user can use the laser sight to pre-aim from the hip before aiming down the sight to facilitate faster target acquisition.',
                'ingredients' => array(
                    '0' => array(
                        'material' => 'High Quality Metal',
                        'quantity' => 3
                    ),
                    '1' => array(
                        'material' => 'Tech Trash',
                        'quantity' => 1
                    ),
                ),
                'work bench' => 'none'
            ),
    ),



    'construction' => array(
        '0' => array(
            'id' => 0,
            'name' => 'Armored Door',
            'img' => 'imgs/asset-3.png',
            'desc' => 'The Armored Door is the strongest and most damage resilient of all the doors. It can withstand heavy bullet fire, attacks from any tool, or even 2 blasts from Timed Explosive Charges. The Armored Door has 800 health and takes 2 charges to destroy. The Armored Door can be placed by crafting it and selecting the door in your hotbar, and then mousing over an empty doorway. A blue silhouette of the door will appear, and you can left-click to place it. If the silhouette of the door is red, it cannot be placed in its current location (so the same as any other door). To Repair the Armored door you will need High Quality Metal.',
            'ingredients' => array(
                '0' => array(
                    'material' => 'High Quality Metal',
                    'quantity' => 20
                ),
                '1' => array(
                    'material' => 'Gears',
                    'quantity' => 5
                ),
            ),
            'work bench' => 'none'
        ),
    ),

    'items' => array(
        '0' => array(
            'id' => 0,
            'name' => 'Bed',
            'img' => 'imgs/asset-5.png',
            'desc' => 'Beds function like Sleeping Bags, as they allow the player to set their respawn point(s) manually. Beds are considered an upgrade to Sleeping Bags as they allow the player to respawn in their set spot every 2 minutes, instead of waiting 5 minutes with a Sleeping Bag. Beds can only be placed on a solid foundation or floor tile. Beds do not offer a comfort bonus.',
            'ingredients' => array(
                '0' => array(
                    'material' => 'Cloth',
                    'quantity' => 60
                ),
                '1' => array(
                    'material' => 'Metal Fragments',
                    'quantity' => 100
                ),
                '2' => array(
                    'material' => 'Sewing Kit',
                    'quantity' => 2
                ),
            ),
            'work bench' => 'none'
        ),
    ),

    'clothing' => array(
        '0' => array(
            'id' => 0,
            'name' => 'Beenie Hat',
            'img' => 'imgs/asset-6.png',
            'desc' => 'The Beenie Hat is a cosmetic item for a player´s head which also provides low protection from damage. It is available in many skins, which can be obtained via the Steam market system or trading.',
            'ingredients' => array(
                '0' => array(
                    'material' => 'Cloth',
                    'quantity' => 15
                ),
            ),
            'work bench' => 'none'
        ),
    ),


    'tools' => array(
        '0' => array(
            'id' => 0,
            'name' => 'Binoculars',
            'img' => 'imgs/asset-7.png',
            'desc' => 'The binoculars can be used with the left and right mouse buttons, hold right click while you want to use the binoculars if you have a normal mouse. However, if you are left handed the controls are opposite.',
            'ingredients' => array(
                '0' => array(
                    'material' => 'High Quality Metal',
                    'quantity' => 5
                ),
                '1' => array(
                    'material' => 'Gears',
                    'quantity' => 1
                ),
            ),
            'work bench' => 'none'
        ),
    ),


    'medicals' => array(
        '0' => array(
            'id' => 0,
            'name' => 'Bandage',
            'img' => 'imgs/asset-8.png',
            'desc' => 'A Bandage is a medical item that when used, stops a player from Bleeding and restores 5 Health immediately. Due to their ability to stop bleeding, Bandages are recommended whenever you venture beyond the safety of your own house, though you will need to find somewhere safe when applying, since it takes time.',
            'ingredients' => array(
                '0' => array(
                    'material' => 'Cloth',
                    'quantity' => 4
                ),
            ),
            'work bench' => 'none'
        ),
    ),


    'ammo' => array(
        '0' => array(
            'id' => 0,
            'name' => '12 Gauge Buckshot',
            'img' => 'imgs/asset-9.png',
            'desc' => '12 Gauge Buckshot shells are used by the Pump Shotgun, Water Pipe Shotgun, Eoka Pistol, and Double Barrel Shotgun. When crafting the buckshot, you craft two at a time. The Buckshot is highly similar to the more expensive 12 Gauge Slug, except Buckshot is designed for close range lethality, whereas slugs are designed for long range engagements. In Devblog 180 The cost of research for this item is 75 scrap requiring level 2 workbench.',
            'ingredients' => array(
                '0' => array(
                    'material' => 'Gun Powder',
                    'quantity' => 10
                ),
                '1' => array(
                    'material' => 'Metal Fragments',
                    'quantity' => 5
                ),
            ),
            'work bench' => 'none'
        ),
    ),



    'traps' => array(
        '0' => array(
            'id' => 0,
            'name' => 'Auto Turret',
            'img' => 'imgs/asset-10.png',
            'desc' => 'The Auto Turret is a turret that automatically detects targets and engages them via bullet fire. It is intended to be used for base defense, but can be used for other purposes. The turret has two internal modes: search-mode and tracking-mode. Upon changing the mode, the turret beeps. The turret can only hit targets if there is a line of sight, and will only shoot if the target is not authorized in the Auto Turret´s safe target list. The target must also be within its range and, for the tower to see it, in the frontal 180 degrees of the turret.',
            'ingredients' => array(
                '0' => array(
                    'material' => 'High Quality Metal',
                    'quantity' => 10
                ),
                '1' => array(
                    'material' => 'CCTV Camera',
                    'quantity' => 1
                ),
                '2' => array(
                    'material' => 'Targeting Computer',
                    'quantity' => 1
                ),
            ),
            'work bench' => 'none'
        ),
    ),



    'misc' => array(
        '0' => array(
            'id' => 0,
            'name' => 'Acoustic Guitar',
            'img' => 'imgs/asset-11.png',
            'desc' => 'The Acoustic Guitar is an instrument that can be used to play music in game. While holding the guitar in your hands, press left click to play chords or right click to play single notes. The note itself is determined by looking up or down, up for highest note and down for the lowest note.',
            'ingredients' => array(
                '0' => array(
                    'material' => 'Cloth',
                    'quantity' => 10
                ),
                '1' => array(
                    'material' => 'Wood',
                    'quantity' => 50
                ),
            ),
            'work bench' => 'none'
        ),
    ),

    
);




?>