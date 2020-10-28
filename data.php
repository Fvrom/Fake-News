<?php

declare(strict_types=1);

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
        'title' => 'Hogwarts student drank mysterious potion',
        'content' => 'Alohamora wand elf parchment, Wingardium Leviosa hippogriff, house dementors betrayal. Holly, Snape centaur portkey ghost Hermione spell bezoar Scabbers. 
        Peruvian-Night-Powder werewolf, Dobby pear-tickle half-moon-glasses, Knight-Bus. Padfoot snargaluff seeker: Hagrid broomstick mischief managed. 
        Snitch Fluffy rock-cake, 9 ¾ dress robes I must not tell lies. Mudbloods yew pumpkin juice phials Ravenclaw’s Diadem 10 galleons Thieves Downfall. 
        Ministry-of-Magic mimubulus mimbletonia Pigwidgeon knut phoenix feather other minister Azkaban. Hedwig Daily Prophet treacle tart full-moon Ollivanders You-Know-Who cursed. 
        Fawkes maze raw-steak Voldemort Goblin Wars snitch Forbidden forest grindylows wool socks.',
        'author' => $authors[4]['name'],
        'subtext' => 'Hogwarts student drank mysterious potion, got tall as a tree and ran out into the woods.',
        'published_date' => '2020-02-10',  // Kanske lägga datum i en ny array?
        'likes' => '15',
        'image' => '/img/image1.jpg',
        'id' => '1'
    ],

    [
        'title' => 'Blackmarket in Diagon Alley',
        'content' => "Thestral dirigible plums, Viktor Krum hexed memory charm Animagus Invisibility Cloak three-headed Dog. 
        Half-Blood Prince Invisibility Cloak cauldron cakes, hiya Harry! Basilisk venom Umbridge swiveling blue eye Levicorpus, 
        nitwit blubber oddment tweak. Chasers Winky quills The Boy Who Lived bat spleens cupboard under the stairs flying motorcycle. 
        Sirius Black Holyhead Harpies, you’ve got dirt on your nose. Floating candles Sir Cadogan The Sight three hoops disciplinary hearing. 
        Grindlewald pig’s tail Sorcerer's Stone biting teacup. Side-along dragon-scale suits Filch 20 points, Mr. Potter.",
        'author' => $authors[3]['name'],
        'subtext' => 'Ministry busts more shops in Diagon Alley. Dragon eggs a hot topic',
        'published_date' => '2020-02-12',  // Kanske lägga datum i en ny array?
        'likes' => '10',
        'image' => '/img/image2.jpg',
        'id' => '2'
    ],

    [
        'title' => 'Harry Potter and Hogwarts',
        'content' => "Half-giant jinxes peg-leg gillywater broken glasses large black dog Great Hall. 
        Nearly-Headless Nick now string them together, and answer me this, which creature would you be unwilling to kiss? 
        Poltergeist sticking charm, troll umbrella stand flying cars golden locket Lily Potter. Pumpkin juice Trevor wave your wand out glass orbs, 
        a Grim knitted hats. Stan Shunpike doe patronus, suck his soul Muggle-Born large order of drills the trace. Bred in captivity fell through the veil, 
        quaffle blue flame ickle diddykins Aragog. Yer a wizard, Harry Doxycide the woes of Mrs. Weasley Goblet of Fire. ",
        'author' => $authors[2]['name'],
        'subtext' => 'Potter talks about getting the letter from Hogwarts.',
        'published_date' => '2020-02-08',  // Kanske lägga datum i en ny array?
        'likes' => '30',
        'image' => '/img/image3.jpg',
        'id' => '3'
    ],

    [
        'title' => 'Is Slytherin all bad?',
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
        'subtext' => 'The ranks of evil wizards seem to come from Slytherin.. but is that really all true?',
        'published_date' => '2020-02-07',  // Kanske lägga datum i en ny array?
        'likes' => '24',
        'image' => '/img/image4.jpg',
        'id' => '4'
    ],

    [
        'title' => 'History of the houses',
        'content' => "Prefect’s bathroom Trelawney veela squashy armchairs, SPEW: Gamp’s Elemental Law of Transfiguration. Magic Nagini bezoar, Hippogriffs Headless Hunt giant squid petrified.
         Beuxbatons flying half-blood revision schedule, Great Hall aurors Minerva McGonagall Polyjuice Potion. Restricted section the Burrow Wronski Feint gnomes, 
         quidditch robes detention, chocolate frogs. Errol parchment knickerbocker glory Avada Kedavra Shell Cottage beaded bag portrait vulture-hat. Twin cores, Aragog crimson gargoyles,
          Room of Requirement counter-clockwise Shrieking Shack. Snivellus second floor bathrooms vanishing cabinet Wizard Chess, are you a witch or not?",
        'author' => $authors[0]['name'],
        'subtext' => 'Album Dumbledore gives you a fun read about the different houses in Hogwarts.',
        'published_date' => '2020-02-06',  // Kanske lägga datum i en ny array?
        'likes' => '14',
        'image' => '/img/image5.jpg',
        'id' => '5'
    ],

    [
        'title' => 'Dragon seen in Diagon Alley!',
        'content' => "Squashy armchairs dirt on your nose brass scales crush the Sopophorous bean with flat side of silver dagger, releases juice better than cutting. 
        Full moon Whomping Willow three turns should do it lemon drops. Locomotor trunks owl treats that will be 50 points, Mr. Potter. Witch Weekly, 
        he will rise again and he will come for us, headmaster Erumpent horn. Fenrir Grayback horseless carriages ‘zis is a chance many would die for!",
        'author' => $authors[0]['name'],
        'subtext' => ' An unregistred Dragon escaped from owner and flew over Diagon Alley this afternoon. Ministry busts yet another... ',
        'published_date' => '2020-02-05',  // Kanske lägga datum i en ny array?
        'likes' => '16',
        'image' => '/img/image6.jpg',
        'id' => '6'
    ],

    [
        'title' => 'The express an old transport?',
        'content' => "Boggarts lavender robes, Hermione Granger Fantastic Beasts and Where to Find Them. Bee in your bonnet Hand of Glory elder wand, spectacles House Cup Bertie Bott’s 
        Every Flavor Beans Impedimenta. Stunning spells tap-dancing spider Slytherin’s Heir mewing kittens Remus Lupin.
         Palominos scarlet train black robes, Metamorphimagus Niffler dead easy second bedroom. Padma and Parvati Sorting Hat Minister of Magic blue turban remember my last.",
        'author' => $authors[4]['name'],
        'subtext' => 'Is the express really the best transport? We have talked to several wizards.',
        'published_date' => '2020-02-04',  // Kanske lägga datum i en ny array?
        'likes' => '29',
        'image' => '/img/image7.jpg',
        'id' => '7'
    ],

    [
        'title' => 'Dragons! and more dragons! ',
        'content' => "Thestral dirigible plums, Viktor Krum hexed memory charm Animagus Invisibility Cloak three-headed Dog. Half-Blood Prince Invisibility Cloak cauldron cakes, 
        hiya Harry! Basilisk venom Umbridge swiveling blue eye Levicorpus, nitwit blubber oddment tweak. Chasers Winky quills The Boy Who Lived bat spleens cupboard under the stairs flying motorcycle. 
        Sirius Black Holyhead Harpies, you’ve got dirt on your nose. Floating candles Sir Cadogan The Sight three hoops disciplinary hearing. 
        Grindlewald pig’s tail Sorcerer's Stone biting teacup. Side-along dragon-scale suits Filch 20 points, Mr. Potter.        ",
        'author' => $authors[1]['name'],
        'subtext' => 'Dragon! dragon! more dragons seen in Diagon Alley. Ministry fighting the blackmarket.',
        'published_date' => '2020-02-03',  // Kanske lägga datum i en ny array?
        'likes' => '34',
        'image' => '/img/image8.jpg',
        'id' => '8'
    ],

    [
        'title' => 'Best school for magic?',
        'content' => "Toad-like smile Flourish and Blotts he knew I’d come back Quidditch World Cup. Fat Lady baubles banana fritters fairy lights Petrificus Totalus. So thirsty, 
        deluminator firs’ years follow me 12 inches of parchment. Head Boy start-of-term banquet Cleansweep Seven roaring lion hat. Unicorn blood crossbow mars is bright tonight, 
        feast Norwegian Ridgeback. Come seek us where our voices sound, we cannot sing above the ground, Ginny Weasley bright red. Fanged frisbees, phoenix tears good clean match.",
        'author' => $authors[2]['name'],
        'subtext' => 'Is hogwarts still the best school for your kids to learn about magic? Find out!',
        'published_date' => '2020-02-02',  // Kanske lägga datum i en ny array?
        'likes' => '21',
        'image' => '/img/image9.jpg',
        'id' => '9'
    ],

    [
        'title' => 'Mandrakes found useful in medicine! ',
        'content' => "Squashy armchairs dirt on your nose brass scales crush the Sopophorous bean with flat side of silver dagger, releases juice better than cutting. 
        Full moon Whomping Willow three turns should do it lemon drops. Locomotor trunks owl treats that will be 50 points, Mr. Potter. Witch Weekly, he will rise again and he will come for us, 
        headmaster Erumpent horn. Fenrir Grayback horseless carriages ‘zis is a chance many would die for!

        Alohamora wand elf parchment, Wingardium Leviosa hippogriff, house dementors betrayal. Holly, Snape centaur portkey ghost Hermione spell bezoar Scabbers. Peruvian-Night-Powder werewolf, Dobby pear-tickle half-moon-glasses, Knight-Bus. Padfoot snargaluff seeker: Hagrid broomstick mischief managed. Snitch Fluffy rock-cake, 9 ¾ dress robes I must not tell lies. Mudbloods yew pumpkin juice phials Ravenclaw’s Diadem 10 galleons Thieves Downfall. Ministry-of-Magic mimubulus mimbletonia Pigwidgeon knut phoenix feather other minister Azkaban. Hedwig Daily Prophet treacle tart full-moon Ollivanders You-Know-Who cursed. 
        Fawkes maze raw-steak Voldemort Goblin Wars snitch Forbidden forest grindylows wool socks.",
        'author' => $authors[3]['name'],
        'subtext' => 'Medicine using Mandrakes have proven to be a lot more sufficent than orginially thought, shown with new experiments. ',
        'published_date' => '2020-02-01',  // Kanske lägga datum i en ny array?
        'likes' => '17',
        'image' => '/img/image10.jpg',
        'id' => '10'
    ],


];


$ads = [
    ['ad' => '1', 'name' => 'PotionMax'],
    ['ad' => '2', 'name' => 'Wizard for Dummies'],
    ['ad' => '3', 'name' => 'Get better at Potions'],
];

$commercial =  [
    [
        'title' => 'The wand for you!',
        'content' => 'Oliverwands got the wand for you.',
        'ad' => $ads[0]['name'],
    ],
    [
        'title' => 'Wizard for Dummmies',
        'content' => 'Find yourself useless? Dont worry! Sign up for our workshop ',
        'ad' => $ads[1]['name'],
    ],
    [
        'title' => 'Get better at Potions today!',
        'content' => 'Get down to P-Potions at Diagon Alley today! Get 20% off books.',
        'ad' => $ads[2]['name'],
    ]
];
