-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Nov-2019 às 21:04
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `brawlstars`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `brawlers`
--

CREATE TABLE `brawlers` (
  `name` varchar(200) NOT NULL,
  `rarity` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `health` int(200) NOT NULL,
  `speed` int(200) NOT NULL,
  `image` varchar(300) NOT NULL,
  `description` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `brawlers`
--

INSERT INTO `brawlers` (`name`, `rarity`, `role`, `health`, `speed`, `image`, `description`, `id`) VALUES
('Shelly', 'Common', 'Fighter', 3600, 720, 'imgs/Shelly.jpg', 'Shelly is a Common Brawler that is unlocked upon beginning the game. She has moderate health and damage output. Her shotgun deals more damage the closer Shelly is to her target, making her excellent for short to mid-range combat. Her attacks have a wide spread as well. Her Super can clear several obstacles and will also knockback and stun enemy Brawlers. Her first Star Power, Shell Shock, can slow down enemies for 3 seconds when they are hit by her Super and her second Star Power, Band-Aid, heals herself when her health falls below 40%', 1),
('Nita', 'Common', 'Fighter', 3800, 720, 'imgs/Nita.jpg', 'Nita is a Common Brawler that is unlocked as a Trophy Road reward upon reaching 10 Trophies. She has moderate health and attacks with shockwaves that have moderate range and can hit multiple enemies. She is most notable for her Super\'s ability to summon the \"Big Baby Bear,\" it has high health and quick, dangerous melee attacks. Her first Star Power heals her bear for 500 health when she herself attacks the enemy, and the bear heals Nita for 500 when it attacks the enemy and her second Star Power increases the attack speed of her bear by 60%.', 2),
('Colt', 'Common', 'Sharpshooter', 2800, 720, 'imgs/Colt.jpg', 'Colt is a Common Brawler who is unlocked as a Trophy Road reward upon reaching 60 Trophies. He has a rather low amount of hitpoints, but high damage output. He fires a total of six shots per Attack, and those shots have a very long range. His Super is very similar to his main Attack, but it fires an extra-long volley of twelve shots that can destroy obstacles. His first Star Power, Slick Boots gives him 10% movement speed which he would run faster and his second Star Power, Magnum Special gives his normal attack\'s attack range and bullet speed an increase by 11%.', 3),
('Bull1', 'Common', 'Heavyweight', 5200, 770, 'imgs/Bull.jpg', 'Bull is a Common Brawler who is unlocked as a Trophy Road reward upon reaching 250 Trophies. Like Shelly, he wields a shotgun. Bull has a high amount of hitpoints and excels at short-range combat. These attributes make him great at ambushing and overwhelming enemy Brawlers. His Super allows him to charge forward, damaging enemies and destroying obstacles in his way. Both of his Star Powers activate when he is at below 40% health and either double his reload speed or give him a shield which reduces all damage by 30%.', 4),
('Jessie', 'Common', 'Fighter', 3200, 720, 'imgs/Jessie.jpg', 'Jessie is a Common Brawler who is unlocked as a Trophy Road reward upon reaching 500 Trophies. Her Super builds a dog-looking turret, Scrappy, with moderate health and damage. It\'s an excellent support, whether it\'s attacking, distracting, or defending. Jessie herself has medium health and damage. Her mid-range Attacks have high damage potential because they can bounce when they hit an enemy and may hit other nearby enemies. Her first star power, Energize, allows her to heal her turret for 800 health by hitting her turret, while her second star power, Shocky, allows her turret to shoot mini energy orbs that can bounce up to two targets.', 5),
('Brock', 'Common', 'Sharpshooter', 2800, 720, 'imgs/Brock.jpg', 'Brock is a Common Brawler who is unlocked as a Trophy Road reward upon reaching 1000 Trophies. He can dish out major damage if his attacks are aimed carefully. His long-range rockets deal high damage in a small area on impact, but he has a long reload time. He also has low health, so he is best at supporting other Brawlers from behind. His first Star Power, Incendiary, allows his rockets to leave a patch of fire which can do 600 damage per second to brawlers in the blast area and his second Star Power, Rocket No. Four, gives Brock 1 extra ammo in his ammo bar.', 6),
('Dynamike', 'Common', 'Thrower', 2800, 720, 'imgs/Dynamike.jpg', 'Dynamike is a Common Brawler who is unlocked as a Trophy Road reward upon reaching 2000 Trophies. He has low hitpoints and high damage output. He attacks by throwing sticks of dynamite that blow up and deal damage in a small radius. When he uses his Super, he throws a large barrel bomb that does very high damage in a large radius around it and knocks back enemy Brawlers when it detonates. The dynamite and the barrel bomb can both be thrown over walls. His first star power, Dyna-Jump enables him to use his dynamite’s explosion to jump over walls and brawlers while doing damage. His second Star Power, Demolition adds 1000 damage to his super.', 7),
('Bo', 'Common', 'Fighter', 3600, 720, 'imgs/Bo.jpg', 'Bo is a Common Brawler unlocked as a Trophy Road reward upon reaching 3000 Trophies. He has fairly high health and fires exploding arrows that deal moderate damage at long range. His Super places traps in an area that explode when an enemy Brawler gets near them. His first Star Power, Circling Eagle, allows him to see enemies in bushes by 5 tiles and his second Star Power, Snare a Bear, allows his mines to stun enemies for 2 seconds.', 8),
('Tick', 'Common', 'Thrower', 2200, 720, 'imgs/Tick.jpg', 'Tick is a Common Brawler who is unlocked as a Trophy Road reward upon reaching 4000 Trophies. He has low health and fires his cannon-like arms that spawns three mines like Bo. Unlike Bo, his mines stay visible to the opposing team. When he uses his Super, he throws his head, chasing the nearest target like a homing missile, dealing high splash damage. His first Star Power, Well Oiled, heals faster than normal when he takes no damage or doesn\'t attack and his second Star Power, Automa-Tick Reload, reloads his main attack faster by 10%.', 9),
('8-BIT', 'Common', 'Sharpshooter', 4300, 580, 'imgs/8-BIT.jpg', '8-BIT is a Common Brawler who is unlocked as a Trophy Road reward upon reaching 6000 Trophies. He has both high health and damage output, but suffers from a significantly slower movement speed compared to other Brawlers, making him unable to chase them down. He wields a laser gun that he uses to fire beams at enemies. His Super allows him and his allies to gain a 30% damage boost in the radius of his station. His first Star Power increases his station\'s range by 50% and his second Star Power allows him to instantly respawn at the same place he died once a match.', 10),
('El Primo', 'Rare', 'Heavyweight', 5800, 770, 'imgs/El_Primo.jpg', 'El Primo is a Rare Brawler who attacks with his fists, doing major damage to enemies that he is able to get close enough to. El Primo also has very high health, allowing him to withstand a lot of damage. With his Super, he can jump a long distance and crash down on opponents, dealing damage. His first Star Power can set enemy brawlers on fire, dealing 1200 damage over 4 seconds when his Super hits enemy brawlers, items, or Robots and his second Star Power gains him 25% speed boost for 4 seconds after he uses his Super.', 11),
('Barley', 'Rare', 'Thrower', 2400, 720, 'imgs/Barley.jpg', 'Barley is a Rare Brawler with low health. He has a unique type of Attack in which he throws bottles of harmful liquid that covers the ground and deals damage to enemies standing on it over time. His Super is very similar, but it can cover a much larger area. His first Star Power, Medical Use, heals himself for 400 health when he throws his bottle, but not with his Super and his second Star Power, Extra Noxious, adds 140 damage per second to his main attack. You can unlock Barley and his wizard skin for free by linking your game to your Supercell ID.', 12),
('Poco', 'Rare', 'Healer', 3800, 720, 'imgs/Poco.jpg', 'Poco is a Rare Brawler who is most notable for his Attack\'s extremely wide spread. He can deal damage to multiple enemies within his wide-spread attack range. Aside from that, his statistics are average; having moderate-high health and low damage output. His Super is unique in that it allows him to heal himself and all allies within its range. His first Star Power, Da Capo!, heals his allies with his regular attack by 800 health and his second Star Power, Screeching Solo, allows his Super to do 800 damage to enemies.', 13),
('Rosa', 'Rare', 'Heavyweight', 5400, 770, 'imgs/Rosa.jpg', 'Rosa is a Rare Brawler who attacks three times with her boxing gloves. Rosa has high health, making her able to withstand lots of damage. Her attack can pierce through enemies. Her Super gives her a shield, temporarily reducing any damage she takes by 70%. Her first Star Power, Plant Life, heals herself for 200 health per second while in bushes and her second Star Power, Thorny Gloves, adds 220 damage to her main attack while her Super is active.', 14),
('Rico', 'Super Rare', 'Sharpshooter', 2400, 720, 'imgs/Rico.jpg', 'Rosa is a Rare Brawler who attacks three times with her boxing gloves. Rosa has high health, making her able to withstand lots of damage. Her attack can pierce through enemies. Her Super gives her a shield, temporarily reducing any damage she takes by 70%. Her first Star Power, Plant Life, heals herself for 200 health per second while in bushes and her second Star Power, Thorny Gloves, adds 220 damage to her main attack while her Super is active.', 15),
('Darryl', 'Super Rare', 'Heavyweight', 4600, 770, 'imgs/Darryl.jpg', 'Darryl is a Super Rare Brawler with a high amount of health. He wields two double barrel shotguns that can deal a lot of damage the closer he is to his target. His Super allows him to quickly escape enemies or get closer to them as well as damage any enemies that he rolls into. His first Star Power, Steel Hoops, gives him a shield when he uses his Super that reduces the damage he takes by 30% for 3.5 seconds and his second Star Power, Rolling Reload, doubles his reload speed after he uses his Super for 5 seconds.', 16),
('Penny', 'Super Rare', 'Sharpshooter', 3200, 720, 'imgs/Penny.jpg', 'Penny is a Super Rare Brawler who can place a mortar when you use her Super that has medium health, very high damage output and can hit enemies behind walls. Penny herself has medium health and her long-range Attack can hit enemies behind the original target for additional damage. Her first Star Power, Last Blast, allows her cannon to shoot out 4 cannonballs which target towards items/brawlers within a huge range upon being destroyed or respawned, doing 1680 damage to enemies that are hit and her second Star Power, Balls of Fire, allows her cannonballs to set the ground on fire for 3 seconds, dealing 400 damage per second to enemies in the burning area.', 17),
('Carl', 'Super Rare', 'Sharpshooter', 4400, 720, 'imgs/Carl.jpg', 'Carl is a Super Rare Brawler that can be unlocked through Brawl Boxes. He has moderate health and a high damage output. He is notable because when he attacks, he throws his pickaxe like a boomerang, damaging any enemy that it hits while flying forward or on the way back, like a boomerang. Carl cannot attack again until his pickaxe comes back. His Super allows him to spin and move much quicker, dealing damage to anyone he hits. His first Star Power, Power Throw, allows his pickaxe to move faster, effectively decreasing his \"reload\" time, and his second Star Power, Protective Pirouette, reduces all damage he takes by 40% while his Super is active.', 18),
('Piper', 'Epic', 'Sharpshooter', 2400, 720, 'imgs/Piper.jpg', 'Piper is an Epic Brawler with low health but the potential to do very high damage to her targets. Her single-shot main attack does more damage when she is further away from an enemy, so she excels at supporting her team as a sniper. Her Super allows her to jump away from her enemies and damage them as she goes. Her first Star Power allows her to do 800 extra damage at max range when she is in a bush and her second Star Power reloads 0.3 ammo when she hits an enemy.', 19),
('Pam', 'Epic', 'Healer', 4300, 720, 'imgs/Pam.jpg', 'Pam is an Epic Brawler whose Super places a device that heals nearby teammates. Her main attack shoots a burst of scrap metal in a sweeping pattern. She has high health and can deal damage in a large area. Her first Star Power, Mama\'s Hug, allows her to heal herself and her allies by 40 health if they are close to her healing radius whenever Pam attacks and her second Star Power, Mama\'s Squeeze, allows her healing turret to do 500 damage per second to enemies, while healing her and her allies.', 20),
('Frank', 'Epic', 'Heavyweight', 5800, 770, 'imgs/Frank.jpg', 'Frank is an Epic Brawler who attacks with a large hammer, sending a wave that can hit multiple enemies. Frank also has very high health, allowing him to withstand a lot of damage. His super can stun enemies for a decent amount of time, leaving them vulnerable to attacks from him or his teammates. His first Star Power, Power Grab gives him a 50% damage increase for 12 seconds when he kills a enemy brawler and his second Star Power, Sponge increases his health by 1100 health.', 21),
('Bibi', 'Epic', 'Batter', 4400, 770, 'imgs/Bibi.jpg', 'Bibi is an Epic Brawler who attacks with a baseball bat, hitting enemies in a close range arc. She can charge her Home Run bar if she is not using any of her three ammo bars. Charging the Home Run bar will allow her next attack to knock back enemies. Bibi\'s Super sends out a long-ranged bubble that can pierce through enemies and bounce off of walls. Her first Star Power, Home Run, increases her movement speed by 12% when her Home Run bar is charged and her second Star Power, Batting Stance, gives her a shield which reduce all damage she takes by 30% when she has her Home Run filled up.', 22),
('Mortis', 'Mythic', 'Dashing Assassin', 3800, 820, 'imgs/Mortis.jpg', 'Mortis is a Mythic Brawler who is unique in that his Attack includes movement. He dashes forward and damages enemies that he hits. For his Super, Mortis summons a swarm of bats that drain the health of his enemies whilst restoring his own by that amount. Mortis has a moderate amount of health and damage output. His first Star Power, Creepy Harvest, heals himself for 1800 health when he kills an enemy brawler and his second Star Power, Coiled Snake, increases his dash range by 75% should he have all three ammo bars filled as well as his yellow bar.', 23),
('Tara', 'Mythic', 'Skirmisher', 3200, 720, 'imgs/Tara.jpg', 'Tara is a Mythic Brawler who has a moderate amount of hitpoints. She attacks by throwing tarot cards that pierce through her enemies and deal each a moderate amount of damage. For her Super, she throws a special illusory card that quickly pulls in enemies within a short range, then explodes, dealing a large amount of damage if you can pull in multiple brawlers. Both of her Star Powers summons a shadowy version of herself that can either attack enemies or heal her and her team when she uses her Super.', 24),
('Gene', 'Mythic', 'Support', 3600, 720, 'imgs/Gene.jpg', 'Gene is a Mythic Brawler who has a moderate amount of health and uses a magic lamp to cast his attacks. His attack can do high damage to a single enemy or less damage to multiple enemies. Gene\'s Super grabs an enemy and drags them to Gene\'s location. His first Star Power, Magic Puffs, heals his allies for 400 health a second if they are within 4.5 tiles of him. His second Star Power, Spirit Slap, increases the damage of his main attack by 300 when his Super is fully charged.', 25),
('Spike', 'Legendary', 'Sharpshooter', 2400, 720, 'imgs/Spike.jpg', 'Spike is a Legendary Brawler with low health who specializes in dealing with grouped-up enemies. His Attack and Super are both optimal for dealing with multiple enemies at once. He is unique because the damage he deals at close range also depends on the enemy brawler\'s hitbox (if the hitbox is larger, more thorns can touch it). His Attack explodes on impact and shoots spikes in all directions which deal damage to enemies they hit, and his Super slows down and deals damage to enemies caught in its area of effect. His first Star Power, Fertilize, heals himself for 800 health per second when he is in the radius of his Super and his second Star Power, Curveball, allows the spikes shot out from his main attack to curve.', 26),
('Crow', 'Legendary', 'Toxic Assassin', 2400, 820, 'imgs/Crow.jpg', 'Crow is a Legendary Brawler who can poison his enemies over time with his throwing daggers. Crow\'s Super allows him to jump and land while throwing rings of daggers both on take-off and on landing. He has a long range but low health. His first Star Power, Extra Toxic, decreases the damage output of a poisoned brawler by 20% when they get hit and his second Star Power, Carrion Crow, adds 120 extra damage to his main attack and Super when an enemy is below 50% health when hit.', 27),
('Leon', 'Legendary', 'Stealthy Assassin', 3200, 820, 'imgs/Leon.jpg', 'Leon is a Legendary Brawler who can turn invisible for a short time when using his Super. He has medium health and high damage output if the enemy is close. As the blades travel, their damage is reduced. Leon has the fastest movement speed as well (tied with Crow and Mortis). His first Star Power, Smoke Trails, gives him a speed increase for the duration of his Super and his second Star Power, Invisiheal, heals him 1000 health per second for the duration of his Super.', 28),
('Sandy', 'Legendary', 'Fighter', 4000, 770, 'imgs/Sandy.jpg', 'Sandy is a Legendary Brawler with moderate health and damage output who can deal damage to multiple enemies at once with his piercing attack. His Super allows his allies and him to be invisible in the radius of a sandstorm that he summons. His Star Power, Rude Sands, allows his Super to do 40 damage per second to enemies that are in the sandstorm. Sandy\'s other Star Power, Healing Winds, allows any allies within the sandstorm to heal 250 health per second.', 29),
('hdfgh', 'hdsf', 'fdshsdf', 4234, 23423, 'imgs/1574020059ws_Pop_Art_Concept_1280x1024.jpg', 'dfhdfghs', 42);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `brawlers`
--
ALTER TABLE `brawlers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `brawlers`
--
ALTER TABLE `brawlers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
