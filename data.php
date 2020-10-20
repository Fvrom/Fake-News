<?php

declare(strict_type=1);

// I need a foreach loop in index that writes out £article['content']

// Article array med publish date, like counter, author, content and title

$authors = [
    ['id' => '1', 'name' => 'Albus Dumbledore'],
    ['id' => '2', 'name' => 'Hermione Granger'],
    ['id' => '3', 'name' => 'Dean Thomas'],
    ['id' => '4', 'name' => 'Ginny Weasley'],
    ['id' => '5', 'name' => 'Draco Malfoy']

];

$articles =  [
    [
        'title' => 'Heading1',
        'content' => 'Alohamora wand elf parchment, Wingardium Leviosa hippogriff, house dementors betrayal. Holly, Snape centaur portkey ghost Hermione spell bezoar Scabbers. 
        Peruvian-Night-Powder werewolf, Dobby pear-tickle half-moon-glasses, Knight-Bus. Padfoot snargaluff seeker: Hagrid broomstick mischief managed. 
        Snitch Fluffy rock-cake, 9 ¾ dress robes I must not tell lies. Mudbloods yew pumpkin juice phials Ravenclaw’s Diadem 10 galleons Thieves Downfall. 
        Ministry-of-Magic mimubulus mimbletonia Pigwidgeon knut phoenix feather other minister Azkaban. Hedwig Daily Prophet treacle tart full-moon Ollivanders You-Know-Who cursed. 
        Fawkes maze raw-steak Voldemort Goblin Wars snitch Forbidden forest grindylows wool socks.',
        'author' => $authors[4]['name'],
        'published_date' => '2020-02-10',  // Kanske lägga datum i en ny array?
        'likes' => '15',
        'image' => '/img/image1.jpg'
    ],

    [
        'title' => 'Heading2',
        'content' => "Thestral dirigible plums, Viktor Krum hexed memory charm Animagus Invisibility Cloak three-headed Dog. 
        Half-Blood Prince Invisibility Cloak cauldron cakes, hiya Harry! Basilisk venom Umbridge swiveling blue eye Levicorpus, 
        nitwit blubber oddment tweak. Chasers Winky quills The Boy Who Lived bat spleens cupboard under the stairs flying motorcycle. 
        Sirius Black Holyhead Harpies, you’ve got dirt on your nose. Floating candles Sir Cadogan The Sight three hoops disciplinary hearing. 
        Grindlewald pig’s tail Sorcerer's Stone biting teacup. Side-along dragon-scale suits Filch 20 points, Mr. Potter.",
        'author' => $authors[3]['name'],
        'published_date' => '2020-02-09',  // Kanske lägga datum i en ny array?
        'likes' => '10',
        'image' => '/img/image2.jpg'
    ],

    [
        'title' => 'Heading3',
        'content' => "Half-giant jinxes peg-leg gillywater broken glasses large black dog Great Hall. 
        Nearly-Headless Nick now string them together, and answer me this, which creature would you be unwilling to kiss? 
        Poltergeist sticking charm, troll umbrella stand flying cars golden locket Lily Potter. Pumpkin juice Trevor wave your wand out glass orbs, 
        a Grim knitted hats. Stan Shunpike doe patronus, suck his soul Muggle-Born large order of drills the trace. Bred in captivity fell through the veil, 
        quaffle blue flame ickle diddykins Aragog. Yer a wizard, Harry Doxycide the woes of Mrs. Weasley Goblet of Fire. ",
        'author' => $authors[2]['name'],
        'published_date' => '2020-02-08',  // Kanske lägga datum i en ny array?
        'likes' => '30',
        'image' => '/img/image3.jpg'
    ],

    [
        'title' => 'Heading4',
        'content' => "Red hair crookshanks bludger Marauder’s Map Prongs sunshine daisies butter mellow Ludo Bagman. Beaters gobbledegook N.E.W.T., 
        Honeydukes eriseD inferi Wormtail. Mistletoe dungeons Parseltongue Eeylops Owl Emporium expecto patronum floo powder duel. Gillyweed portkey, 
        keeper Godric’s Hollow telescope, splinched fire-whisky silver Leprechaun O.W.L. stroke the spine. Chalice Hungarian Horntail, catherine wheels Essence of Dittany Gringotts 
        Harry Potter. Prophecies Yaxley green eyes Remembrall horcrux hand of the servant. Devil’s snare love potion Ravenclaw, Professor Sinistra time-turner steak and kidney pie. 
        Cabbage Daily Prophet letters from no one Dervish and Banges leg.

        Alohamora wand elf parchment, Wingardium Leviosa hippogriff, house dementors betrayal. Holly, Snape centaur portkey ghost Hermione spell bezoar Scabbers. 
        Peruvian-Night-Powder werewolf, Dobby pear-tickle half-moon-glasses, Knight-Bus. Padfoot snargaluff seeker: Hagrid broomstick mischief managed. Snitch Fluffy rock-cake, 
        9 ¾ dress robes I must not tell lies. Mudbloods yew pumpkin juice phials Ravenclaw’s Diadem 10 galleons Thieves Downfall. Ministry-of-Magic mimubulus mimbletonia Pigwidgeon
         knut phoenix feather other minister Azkaban. Hedwig Daily Prophet treacle tart full-moon Ollivanders You-Know-Who cursed. Fawkes maze raw-steak Voldemort Goblin Wars snitch 
         Forbidden forest grindylows wool socks.",
        'author' => $authors[1]['name'],
        'published_date' => '2020-02-07',  // Kanske lägga datum i en ny array?
        'likes' => '24',
        'image' => '/img/image4.jpg'
    ],

    [
        'title' => 'Heading5',
        'content' => "Prefect’s bathroom Trelawney veela squashy armchairs, SPEW: Gamp’s Elemental Law of Transfiguration. Magic Nagini bezoar, Hippogriffs Headless Hunt giant squid petrified.
         Beuxbatons flying half-blood revision schedule, Great Hall aurors Minerva McGonagall Polyjuice Potion. Restricted section the Burrow Wronski Feint gnomes, 
         quidditch robes detention, chocolate frogs. Errol parchment knickerbocker glory Avada Kedavra Shell Cottage beaded bag portrait vulture-hat. Twin cores, Aragog crimson gargoyles,
          Room of Requirement counter-clockwise Shrieking Shack. Snivellus second floor bathrooms vanishing cabinet Wizard Chess, are you a witch or not?",
        'author' => $authors[0]['name'],
        'published_date' => '2020-02-06',  // Kanske lägga datum i en ny array?
        'likes' => '14',
        'image' => '/img/image5.jpg'
    ],

    [
        'title' => 'Heading6',
        'content' => "Squashy armchairs dirt on your nose brass scales crush the Sopophorous bean with flat side of silver dagger, releases juice better than cutting. 
        Full moon Whomping Willow three turns should do it lemon drops. Locomotor trunks owl treats that will be 50 points, Mr. Potter. Witch Weekly, 
        he will rise again and he will come for us, headmaster Erumpent horn. Fenrir Grayback horseless carriages ‘zis is a chance many would die for!",
        'author' => $authors[0]['name'],
        'published_date' => '2020-02-05',  // Kanske lägga datum i en ny array?
        'likes' => '16',
        'image' => '/img/image6.jpg'
    ],

    [
        'title' => 'Heading7',
        'content' => "Boggarts lavender robes, Hermione Granger Fantastic Beasts and Where to Find Them. Bee in your bonnet Hand of Glory elder wand, spectacles House Cup Bertie Bott’s 
        Every Flavor Beans Impedimenta. Stunning spells tap-dancing spider Slytherin’s Heir mewing kittens Remus Lupin.
         Palominos scarlet train black robes, Metamorphimagus Niffler dead easy second bedroom. Padma and Parvati Sorting Hat Minister of Magic blue turban remember my last.",
        'author' => $authors[4]['name'],
        'published_date' => '2020-02-04',  // Kanske lägga datum i en ny array?
        'likes' => '29',
        'image' => '/img/image7.jpg'
    ],

    [
        'title' => 'Heading8',
        'content' => "Thestral dirigible plums, Viktor Krum hexed memory charm Animagus Invisibility Cloak three-headed Dog. Half-Blood Prince Invisibility Cloak cauldron cakes, 
        hiya Harry! Basilisk venom Umbridge swiveling blue eye Levicorpus, nitwit blubber oddment tweak. Chasers Winky quills The Boy Who Lived bat spleens cupboard under the stairs flying motorcycle. 
        Sirius Black Holyhead Harpies, you’ve got dirt on your nose. Floating candles Sir Cadogan The Sight three hoops disciplinary hearing. 
        Grindlewald pig’s tail Sorcerer's Stone biting teacup. Side-along dragon-scale suits Filch 20 points, Mr. Potter.        ",
        'author' => $authors[1]['name'],
        'published_date' => '2020-02-03',  // Kanske lägga datum i en ny array?
        'likes' => '34',
        'image' => '/img/image8.jpg'
    ],

    [
        'title' => 'Heading9',
        'content' => "Toad-like smile Flourish and Blotts he knew I’d come back Quidditch World Cup. Fat Lady baubles banana fritters fairy lights Petrificus Totalus. So thirsty, 
        deluminator firs’ years follow me 12 inches of parchment. Head Boy start-of-term banquet Cleansweep Seven roaring lion hat. Unicorn blood crossbow mars is bright tonight, 
        feast Norwegian Ridgeback. Come seek us where our voices sound, we cannot sing above the ground, Ginny Weasley bright red. Fanged frisbees, phoenix tears good clean match.",
        'author' => $authors[2]['name'],
        'published_date' => '2020-02-02',  // Kanske lägga datum i en ny array?
        'likes' => '21',
        'image' => '/img/image9.jpg'
    ],

    [
        'title' => 'Heading10',
        'content' => "Squashy armchairs dirt on your nose brass scales crush the Sopophorous bean with flat side of silver dagger, releases juice better than cutting. 
        Full moon Whomping Willow three turns should do it lemon drops. Locomotor trunks owl treats that will be 50 points, Mr. Potter. Witch Weekly, he will rise again and he will come for us, 
        headmaster Erumpent horn. Fenrir Grayback horseless carriages ‘zis is a chance many would die for!

        Alohamora wand elf parchment, Wingardium Leviosa hippogriff, house dementors betrayal. Holly, Snape centaur portkey ghost Hermione spell bezoar Scabbers. Peruvian-Night-Powder werewolf, Dobby pear-tickle half-moon-glasses, Knight-Bus. Padfoot snargaluff seeker: Hagrid broomstick mischief managed. Snitch Fluffy rock-cake, 9 ¾ dress robes I must not tell lies. Mudbloods yew pumpkin juice phials Ravenclaw’s Diadem 10 galleons Thieves Downfall. Ministry-of-Magic mimubulus mimbletonia Pigwidgeon knut phoenix feather other minister Azkaban. Hedwig Daily Prophet treacle tart full-moon Ollivanders You-Know-Who cursed. 
        Fawkes maze raw-steak Voldemort Goblin Wars snitch Forbidden forest grindylows wool socks.",
        'author' => $authors[3]['name'],
        'published_date' => '2020-02-01',  // Kanske lägga datum i en ny array?
        'likes' => '17',
        'image' => '/img/image10.jpg'
    ],


];
