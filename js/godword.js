function getWord() {
	var godArray = [
	"12:15 Notwithstanding thou mayest kill and eat flesh in all thy gates, whatsoever thy soul lusteth after, according to the blessing of the LORD thy God which he hath given thee: the unclean and the clean may eat thereof, as of the roebuck, and as of the hart.",
	"6:21 So Solomon overlaid the house within with pure gold: and he made a partition by the chains of gold before the oracle; and he overlaid it with gold.",
	"I hate when that happens",
	"LOL",
	"I'll think about it",
	"I'm God who the hell are you?",
	"I'm tired of this",
	"I made it that way",
	"Is that your final answer?",
	"NeilDeGrasseTyson",
	"adjusted for inflation",
	"You get what you pray for",
	"Zzzzzzzz",
	"heads I win tails you lose",
	"a white man uses an ISO file.",
	"go ahead make my day",
	"quit it",
	"there's no place like home",
	"African",
	"VGA 640x480, 16-color is a covenant like circumcision.",
	"an Irishman is forced to talk to God",
	"failure is not an option",
	"God is not mocked",
	"27:15-16 A quarrelsome wife is as annoying as constant dripping on a rainy day. Stopping her complaints is like trying to stop the wind or trying to hold something with greased hands.",
	"31:6 As a dog returns to its vomit, so a fool repeats his folly.",
	"36:12 But Rabshakeh said, Hath my master sent me to thy master and to thee to speak these words? hath he not sent me to the men that sit upon the wall, that they may eat their own dung, and drink their own piss with you?",
	"31:6 Give beer to those who are perishing, wine to those who are in anguish.",
	"25:30 He said to Jacob, Let me eat some of that red stuff, because I'm exhausted.",
	"20:15 If a man has sex with an animal, he must be put to death, and the animal must be killed.",
	"27:14 If a man loudly blesses his neighbor early in the morning, it will be taken as a curse.",
	"21:19 It is better to live alone in the desert than with a crabby, complaining wife.",
	"29:20 There is more hope for a fool than for someone who speaks without thinking.",
	"23:19 Thou shalt not boil a kid in its mother's milk.",
	"8:1 When he opened the seventh seal, there was silence in heaven for about half an hour.",
	"14:21 You shall not eat anything which dies of itself. You may give it to the alien who is in your town, so that he may eat it, or you may sell it to a foreigner, for you are a holy people to the LORD your God."
	]

	var godString = godArray[Math.floor(Math.random() * godArray.length)];
	document.getElementById('godWord').innerHTML=godString;
}

getWord();