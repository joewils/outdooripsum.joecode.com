<?php
class LoremIpsumGenerator {
	/**
	*	Copyright (c) 2009, Mathew Tinsley (tinsley@tinsology.net)
	*	All rights reserved.
	*
	*	Redistribution and use in source and binary forms, with or without
	*	modification, are permitted provided that the following conditions are met:
	*		* Redistributions of source code must retain the above copyright
	*		  notice, this list of conditions and the following disclaimer.
	*		* Redistributions in binary form must reproduce the above copyright
	*		  notice, this list of conditions and the following disclaimer in the
	*		  documentation and/or other materials provided with the distribution.
	*		* Neither the name of the organization nor the
	*		  names of its contributors may be used to endorse or promote products
	*		  derived from this software without specific prior written permission.
	*
	*	THIS SOFTWARE IS PROVIDED BY MATHEW TINSLEY ''AS IS'' AND ANY
	*	EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
	*	WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
	*	DISCLAIMED. IN NO EVENT SHALL <copyright holder> BE LIABLE FOR ANY
	*	DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
	*	(INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
	*	LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
	*	ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
	*	(INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
	*	SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
	*/
	
	private $words, $wordsPerParagraph, $wordsPerSentence;
	
	function __construct($wordsPer = 100)
	{
		$this->wordsPerParagraph = $wordsPer;
		$this->wordsPerSentence = 24.460;
		$this->words = array(	"3m", 
    	"4m", 
    	"686", 
    	"acorn", 
    	"acr", 
    	"electronics", 
    	"active", 
    	"people", 
    	"adidas", 
    	"adrenaline", 
    	"promotions", 
    	"advanced", 
    	"elements", 
    	"advantage", 
    	"adventure", 
    	"imports", 
    	"maps", 
    	"medical", 
    	"kits", 
    	"technology", 
    	"adventurous", 
    	"joe", 
    	"aerobie", 
    	"afterbite", 
    	"ahnu", 
    	"airdrives", 
    	"aire", 
    	"alite", 
    	"all", 
    	"terrain", 
    	"aloe", 
    	"gator", 
    	"alpen", 
    	"alpina", 
    	"alpineaire", 
    	"alps", 
    	"mountaineering", 
    	"amphipod", 
    	"anon", 
    	"apisphere", 
    	"appalachian", 
    	"mountain", 
    	"club", 
    	"aqua", 
    	"sphere", 
    	"aqua-bound", 
    	"aquapac", 
    	"arbor", 
    	"arc'teryx", 
    	"asics", 
    	"asolo", 
    	"astral", 
    	"buoyancy", 
    	"atlas", 
    	"atomic", 
    	"avani", 
    	"aventura", 
    	"avid", 
    	"baby", 
    	"jogger", 
    	"backcountry", 
    	"access", 
    	"backpacker's", 
    	"pantry", 
    	"badger", 
    	"baffin", 
    	"bags", 
    	"on", 
    	"board", 
    	"baladeo", 
    	"balega", 
    	"banana", 
    	"boat", 
    	"bananagrams", 
    	"basic", 
    	"essentials", 
    	"bdi", 
    	"beal", 
    	"bearvault", 
    	"bell", 
    	"bella", 
    	"four", 
    	"belle", 
    	"hop", 
    	"belly", 
    	"timber", 
    	"ben's", 
    	"benchmade", 
    	"benchmark", 
    	"bending", 
    	"branches", 
    	"bern", 
    	"bertucci", 
    	"bic", 
    	"sport", 
    	"big", 
    	"agnes", 
    	"earth", 
    	"publishing/johnson", 
    	"books", 
    	"bike", 
    	"peddler", 
    	"bikeglow", 
    	"biologic", 
    	"bison", 
    	"designs", 
    	"black", 
    	"diamond", 
    	"blackburn", 
    	"blizzard", 
    	"survival", 
    	"bluewater", 
    	"blundstone", 
    	"bob", 
    	"bodyglide", 
    	"boeshield", 
    	"bogs", 
    	"bolle", 
    	"bonk", 
    	"breaker", 
    	"boreal", 
    	"boreas", 
    	"bracketron", 
    	"x", 
    	"bridgedale", 
    	"brooks", 
    	"england", 
    	"brunton", 
    	"buck", 
    	"bucky", 
    	"buff", 
    	"bugband", 
    	"built", 
    	"burley", 
    	"burt's", 
    	"bees", 
    	"burton", 
    	"byer", 
    	"c", 
    	"crane", 
    	"c.a.m.p.", 
    	"usa", 
    	"caddis", 
    	"cage", 
    	"rocket", 
    	"camelbak", 
    	"camp", 
    	"chef", 
    	"time", 
    	"camper's", 
    	"dream", 
    	"campsuds", 
    	"canari", 
    	"cane", 
    	"creek", 
    	"cannondale", 
    	"carlisle", 
    	"carolina", 
    	"mfg.", 
    	"carson", 
    	"carve", 
    	"cary's", 
    	"casio", 
    	"castelli", 
    	"cateye", 
    	"celestron", 
    	"celtek", 
    	"century", 
    	"cgear", 
    	"multimats", 
    	"chaco", 
    	"channel", 
    	"craft", 
    	"chariot", 
    	"carriers", 
    	"cherry", 
    	"tree", 
    	"chicobag", 
    	"chili's", 
    	"chooze", 
    	"chuckit!", 
    	"chums", 
    	"clean", 
    	"bottle", 
    	"cleanwaste", 
    	"clif", 
    	"clik", 
    	"elite", 
    	"ride", 
    	"coast", 
    	"cocohydro", 
    	"cocoon", 
    	"coghlan's", 
    	"for", 
    	"kids", 
    	"coleman", 
    	"columbia", 
    	"river", 
    	"continental", 
    	"contour", 
    	"coop", 
    	"cotton", 
    	"buds", 
    	"counter", 
    	"assault", 
    	"crankbrothers", 
    	"crazy", 
    	"croakies", 
    	"crocs", 
    	"croozer", 
    	"crown", 
    	"fuel", 
    	"crud", 
    	"currie", 
    	"cushe", 
    	"custom", 
    	"correct", 
    	"cycleaware", 
    	"cyclelogical", 
    	"cycleops", 
    	"cygolite", 
    	"cytosport", 
    	"d-fa", 
    	"dajo", 
    	"dakine", 
    	"dalbello", 
    	"danskin", 
    	"dansko", 
    	"darn", 
    	"tough", 
    	"dc", 
    	"defeet", 
    	"delkin", 
    	"devices", 
    	"delorme", 
    	"delta", 
    	"cycle", 
    	"kayaks", 
    	"demon", 
    	"demos", 
    	"watch", 
    	"dermatone", 
    	"detours", 
    	"deuter", 
    	"head", 
    	"delights", 
    	"diggin", 
    	"dimension", 
    	"discovery", 
    	"trekking", 
    	"outfitters", 
    	"dohm", 
    	"dorfman", 
    	"pacific", 
    	"dr.", 
    	"bronners", 
    	"scholl's", 
    	"dry", 
    	"dryguy", 
    	"dumonde", 
    	"tech", 
    	"dynafit", 
    	"dynaflex", 
    	"eagle", 
    	"easton", 
    	"ecco", 
    	"eddyline", 
    	"edelrid", 
    	"edelweiss", 
    	"education", 
    	"outdoors", 
    	"effetto", 
    	"mariposa", 
    	"efx", 
    	"egear", 
    	"ek", 
    	"ekcessories", 
    	"electra", 
    	"electric", 
    	"elie", 
    	"emotion", 
    	"energizer", 
    	"eno", 
    	"ergobaby", 
    	"ergon", 
    	"esbit", 
    	"eton", 
    	"eureka", 
    	"eurosled", 
    	"everest", 
    	"evolv", 
    	"exofficio", 
    	"exped", 
    	"experia", 
    	"extrasport", 
    	"falcon", 
    	"publishing", 
    	"family", 
    	"games", 
    	"fcs", 
    	"feedback", 
    	"sports", 
    	"fenix", 
    	"finish", 
    	"line", 
    	"first", 
    	"endurance", 
    	"need", 
    	"fischer", 
    	"fisher", 
    	"space", 
    	"pen", 
    	"fitbit", 
    	"five", 
    	"star", 
    	"beef", 
    	"ten", 
    	"fizik", 
    	"flow", 
    	"flux", 
    	"fogtech", 
    	"fox", 
    	"40", 
    	"franko's", 
    	"free", 
    	"spirit", 
    	"freeplay", 
    	"friday", 
    	"harbor", 
    	"fritschi", 
    	"diamir", 
    	"frs", 
    	"fsa", 
    	"fuji", 
    	"fulcrum", 
    	"fur", 
    	"gaia", 
    	"garcia", 
    	"garmin", 
    	"garmont", 
    	"garneau", 
    	"gci", 
    	"outdoor", 
    	"gear", 
    	"aid", 
    	"geax", 
    	"geigerrig", 
    	"general", 
    	"genuine", 
    	"innovations", 
    	"geopalz", 
    	"gerber", 
    	"gerrit's", 
    	"gheek", 
    	"gibbon", 
    	"giro", 
    	"giustaforza", 
    	"glowspek", 
    	"gnu", 
    	"goal", 
    	"zero", 
    	"gofit", 
    	"gogglemate", 
    	"goldcoast", 
    	"gopro", 
    	"gordini", 
    	"gore", 
    	"wear", 
    	"rideon", 
    	"grabber", 
    	"grace", 
    	"digital", 
    	"audio", 
    	"grand", 
    	"trunk", 
    	"grandoe", 
    	"granger's", 
    	"granite", 
    	"green", 
    	"guru", 
    	"label", 
    	"organic", 
    	"greenfield", 
    	"gregory", 
    	"gripmaster", 
    	"grivel", 
    	"groundspeak", 
    	"grundig", 
    	"gsi", 
    	"gt", 
    	"gu", 
    	"guava", 
    	"guillow's", 
    	"gulpy", 
    	"guyot", 
    	"h2o", 
    	"haiku", 
    	"halo", 
    	"hammer", 
    	"nutrition", 
    	"hard", 
    	"tail", 
    	"haribo", 
    	"harmony", 
    	"headsup", 
    	"systems", 
    	"headsweats", 
    	"helly", 
    	"hansen", 
    	"hennessy", 
    	"hammock", 
    	"hi", 
    	"tex", 
    	"corp", 
    	"hi-tec", 
    	"hides", 
    	"holden", 
    	"honey", 
    	"stinger", 
    	"horny", 
    	"toad", 
    	"hot", 
    	"hotronic", 
    	"hugger", 
    	"mugger", 
    	"humangear", 
    	"hurricane", 
    	"ibert", 
    	"ibex", 
    	"icebreaker", 
    	"icelandic", 
    	"design", 
    	"icelantic", 
    	"skis", 
    	"imaingo", 
    	"injinji", 
    	"innova", 
    	"disc", 
    	"golf", 
    	"inova", 
    	"isis", 
    	"jade", 
    	"jagwire", 
    	"jambu", 
    	"jansport", 
    	"java", 
    	"juice", 
    	"jax", 
    	"jelly", 
    	"jetboil", 
    	"joby", 
    	"jogalite", 
    	"jones", 
    	"julbo", 
    	"just", 
    	"tomatoes,", 
    	"etc.!", 
    	"justin's", 
    	"k-pump", 
    	"k2", 
    	"kabletek", 
    	"kafka's", 
    	"kahtoola", 
    	"kalloy", 
    	"kamik", 
    	"kannad", 
    	"kappa", 
    	"katadyn", 
    	"kavu", 
    	"keen", 
    	"kelty", 
    	"kenda", 
    	"kenyon", 
    	"kershaw", 
    	"kialoa", 
    	"kind", 
    	"kinesys", 
    	"kinetic", 
    	"kiss", 
    	"my", 
    	"face", 
    	"klean", 
    	"kanteen", 
    	"knog", 
    	"kokatat", 
    	"koki", 
    	"komforte", 
    	"chockolates", 
    	"kryptonite", 
    	"kt", 
    	"tape", 
    	"kuhl", 
    	"kurgo", 
    	"la", 
    	"crosse", 
    	"sportiva", 
    	"lafuma", 
    	"lakeshore", 
    	"paddleboard", 
    	"company", 
    	"lange", 
    	"lasso", 
    	"leatherman", 
    	"lego", 
    	"leki", 
    	"lezyne", 
    	"lib", 
    	"liberty", 
    	"bottleworks", 
    	"life", 
    	"is", 
    	"good", 
    	"lifeline", 
    	"light", 
    	"motion", 
    	"fire", 
    	"lightload", 
    	"towels", 
    	"lightnin'", 
    	"bug", 
    	"lightning", 
    	"nugget", 
    	"lightweights", 
    	"liquid", 
    	"image", 
    	"liquidlogic", 
    	"livestrong", 
    	"lizard", 
    	"skins", 
    	"lodge", 
    	"loksak", 
    	"lole", 
    	"lonely", 
    	"planet", 
    	"guides", 
    	"look", 
    	"lookin", 
    	"lord", 
    	"hodges", 
    	"lorpen", 
    	"lotus", 
    	"loucks", 
    	"lowa", 
    	"lowepro", 
    	"lucky", 
    	"bums", 
    	"mad", 
    	"rock", 
    	"madshus", 
    	"magellan", 
    	"maglite", 
    	"malone", 
    	"mammut", 
    	"manduka", 
    	"manzella", 
    	"map", 
    	"adventures", 
    	"maptech", 
    	"marin", 
    	"marker", 
    	"marmot", 
    	"maryjanesfarm", 
    	"mattel", 
    	"maui", 
    	"jim", 
    	"mavic", 
    	"maxiglide", 
    	"mcmurdo", 
    	"mcnett", 
    	"menasha", 
    	"ridge", 
    	"press", 
    	"merrell", 
    	"metolius", 
    	"michelin", 
    	"micro", 
    	"beer", 
    	"jerseys", 
    	"midland", 
    	"milkman", 
    	"millet", 
    	"minoura", 
    	"mirrycle", 
    	"mizuno", 
    	"mombasa", 
    	"momentum", 
    	"montrail", 
    	"mooloolaba", 
    	"moon", 
    	"mophie", 
    	"motorola", 
    	"hardwear", 
    	"house", 
    	"mountainsmith", 
    	"moving", 
    	"comfort", 
    	"msr", 
    	"mti", 
    	"alibi", 
    	"mysterioso", 
    	"naish", 
    	"nalgene", 
    	"nantucket", 
    	"basket", 
    	"nathan", 
    	"national", 
    	"geographic", 
    	"native", 
    	"eyewear", 
    	"watercraft", 
    	"natrapel", 
    	"natural", 
    	"high", 
    	"nau", 
    	"nemo", 
    	"neve", 
    	"new", 
    	"balance", 
    	"nike", 
    	"nike+", 
    	"nikon", 
    	"nikwax", 
    	"nite", 
    	"ize", 
    	"niterider", 
    	"no", 
    	"rinse", 
    	"nokian", 
    	"nonin", 
    	"nordica", 
    	"north", 
    	"water", 
    	"northwest", 
    	"novara", 
    	"nrs", 
    	"nutcase", 
    	"nuun", 
    	"o'neill", 
    	"oakley", 
    	"obermeyer", 
    	"oberto", 
    	"oboz", 
    	"ocean", 
    	"kayak", 
    	"old", 
    	"town", 
    	"ollydog", 
    	"olukai", 
    	"olympus", 
    	"omega", 
    	"omron", 
    	"one", 
    	"ball", 
    	"jay", 
    	"way", 
    	"onguard", 
    	"open", 
    	"country", 
    	"ortlieb", 
    	"ortovox", 
    	"osprey", 
    	"otterbox", 
    	"products", 
    	"research", 
    	"outside", 
    	"inside", 
    	"overland", 
    	"equipment", 
    	"pace", 
    	"paceline", 
    	"pacifichealth", 
    	"labs", 
    	"packtowl", 
    	"pacsafe", 
    	"paddlers", 
    	"supply", 
    	"panaracer", 
    	"park", 
    	"patagonia", 
    	"pearl", 
    	"izumi", 
    	"pedco", 
    	"pedro's", 
    	"pelican", 
    	"pendleton", 
    	"penguin", 
    	"pepper's", 
    	"perception", 
    	"peter", 
    	"rabbit", 
    	"organics", 
    	"peterboro", 
    	"petzl", 
    	"charlet", 
    	"photon", 
    	"picnic", 
    	"at", 
    	"ascot", 
    	"pieps", 
    	"pistil", 
    	"platypus", 
    	"play", 
    	"visions", 
    	"pmi", 
    	"po", 
    	"campo", 
    	"pockettoolx", 
    	"polar", 
    	"portablepet", 
    	"potable", 
    	"power", 
    	"grips", 
    	"putty", 
    	"powerbar", 
    	"powertraveller", 
    	"prana", 
    	"premier", 
    	"primal", 
    	"primus", 
    	"princeton", 
    	"tec", 
    	"prior", 
    	"prism", 
    	"pro", 
    	"stor", 
    	"pro-tec", 
    	"athletics", 
    	"probar", 
    	"profile", 
    	"progold", 
    	"promax", 
    	"protect-a-bub", 
    	"prowash", 
    	"psi", 
    	"bands", 
    	"purl", 
    	"wax", 
    	"quantum", 
    	"engineering", 
    	"quick", 
    	"blade", 
    	"quiksilver", 
    	"quixote", 
    	"racor", 
    	"rainbow", 
    	"of", 
    	"california", 
    	"rainy", 
    	"day", 
    	"biking", 
    	"raleigh", 
    	"raskullz", 
    	"red", 
    	"by", 
    	"ledge", 
    	"reef", 
    	"rei", 
    	"reign", 
    	"vermont", 
    	"reliance", 
    	"repel", 
    	"respiro", 
    	"retro", 
    	"apparel", 
    	"revivex", 
    	"rio", 
    	"rite", 
    	"in", 
    	"the", 
    	"rain", 
    	"riverside", 
    	"rj's", 
    	"rks", 
    	"rockshox", 
    	"rocky", 
    	"mounts", 
    	"rossignol", 
    	"rottefella", 
    	"roxy", 
    	"royal", 
    	"robbins", 
    	"rubbermaid", 
    	"ruff", 
    	"rumbatime", 
    	"runner's", 
    	"world", 
    	"rusty", 
    	"sahale", 
    	"snacks", 
    	"salomon", 
    	"saltstick", 
    	"sangean", 
    	"sani-fem", 
    	"sanuk", 
    	"sanyo", 
    	"saris", 
    	"saucony", 
    	"save", 
    	"our", 
    	"soles", 
    	"sawyer", 
    	"scalex", 
    	"scape", 
    	"scarpa", 
    	"scotchgard", 
    	"sea", 
    	"fare", 
    	"squirts", 
    	"to", 
    	"summit", 
    	"seabear", 
    	"sealline", 
    	"seals", 
    	"sealskinz", 
    	"seattle", 
    	"chocolates", 
    	"seirus", 
    	"selle", 
    	"italia", 
    	"serfas", 
    	"sharkies", 
    	"shaversport", 
    	"shebeest", 
    	"sherpa", 
    	"sherpak", 
    	"sherpani", 
    	"shimano", 
    	"showers", 
    	"pass", 
    	"shred", 
    	"alert", 
    	"sierra", 
    	"lace", 
    	"sigma", 
    	"silverfoot", 
    	"singing", 
    	"ski", 
    	"bones", 
    	"skijor", 
    	"now", 
    	"skirtsports", 
    	"skout", 
    	"sks", 
    	"skullcandy", 
    	"skuut", 
    	"skwoosh", 
    	"slime", 
    	"smartwool", 
    	"smc", 
    	"smith", 
    	"smith's", 
    	"smithsonian", 
    	"snow", 
    	"dragons", 
    	"peak", 
    	"softswipe", 
    	"sog", 
    	"sol", 
    	"sole", 
    	"solio", 
    	"solo", 
    	"sorel", 
    	"soto", 
    	"spacecraft", 
    	"spark", 
    	"r&d", 
    	"spenco", 
    	"sperry", 
    	"top-sider", 
    	"spokerz", 
    	"sporthill", 
    	"sportlegs", 
    	"sportline", 
    	"sportrack", 
    	"sportsdry", 
    	"sportube", 
    	"spot", 
    	"sprigs", 
    	"spyder", 
    	"squiggle", 
    	"sram", 
    	"stabilicers", 
    	"stanley", 
    	"starbucks", 
    	"steripen", 
    	"steripod", 
    	"sting", 
    	"eze", 
    	"stm", 
    	"stoats", 
    	"stohlquist", 
    	"stop", 
    	"flats2", 
    	"sugoi", 
    	"sun", 
    	"suncloud", 
    	"sunday", 
    	"afternoons", 
    	"superfeet", 
    	"surefire", 
    	"surefoot", 
    	"surftech", 
    	"surly", 
    	"suunto", 
    	"sven", 
    	"sweaty", 
    	"swiss-tech", 
    	"switch", 
    	"swix", 
    	"takeya", 
    	"tamer", 
    	"tanita", 
    	"tanka", 
    	"bar", 
    	"teatulia", 
    	"tecnica", 
    	"tecnu", 
    	"tectron", 
    	"tern", 
    	"terry", 
    	"teva", 
    	"lagoon", 
    	"group", 
    	"stick", 
    	"theo", 
    	"therm-a-rest", 
    	"therm-ic", 
    	"thirtytwo", 
    	"thomson", 
    	"thorlo", 
    	"three", 
    	"rivers", 
    	"thule", 
    	"tifosi", 
    	"tilley", 
    	"timberland", 
    	"timbuk2", 
    	"timex", 
    	"titec", 
    	"to-go", 
    	"ware", 
    	"tool", 
    	"logic", 
    	"topeak", 
    	"toysmith", 
    	"trails", 
    	"illustrated", 
    	"trangia", 
    	"travelchair", 
    	"tretorn", 
    	"tri-flow", 
    	"trico", 
    	"trigger", 
    	"point", 
    	"performance", 
    	"truvativ", 
    	"tubbs", 
    	"tune", 
    	"belt", 
    	"turbine", 
    	"turtle", 
    	"twentytwo", 
    	"twin", 
    	"six", 
    	"tyr", 
    	"u-dig-it", 
    	"uclear", 
    	"uco", 
    	"ultimate", 
    	"direction", 
    	"technologies", 
    	"uncle", 
    	"milton", 
    	"union", 
    	"university", 
    	"urbanears", 
    	"vanguard", 
    	"vans", 
    	"vasque", 
    	"velox", 
    	"vibram", 
    	"victorinox", 
    	"vitalyte", 
    	"vittoria", 
    	"vivobarefoot", 
    	"voile", 
    	"volkl", 
    	"von", 
    	"zipper", 
    	"wallaroo", 
    	"warmers", 
    	"weehoo", 
    	"wellgo", 
    	"wenger", 
    	"wenonah", 
    	"werner", 
    	"west", 
    	"paw", 
    	"western", 
    	"chief", 
    	"wheeleez", 
    	"wheels", 
    	"manufacturing", 
    	"whispbar", 
    	"yakima", 
    	"white", 
    	"wigwam", 
    	"wild", 
    	"republic", 
    	"wilderness", 
    	"winning", 
    	"moves", 
    	"wintersteiger", 
    	"witz", 
    	"woolrich", 
    	"wrightsock", 
    	"wtb", 
    	"xcel", 
    	"xob", 
    	"xshot", 
    	"yaktrax", 
    	"yankz!", 
    	"yepp", 
    	"yurbuds", 
    	"z-medica", 
    	"zamberlan", 
    	"zeal", 
    	"zensah", 
    	"zerogoo", 
    	"zing", 
    	"toys", 
    	"zoic", 
    	"zojirushi", 
    	"zoot", 
    	"zuke's", 
    	"joecode"
    );
		
	}
		
	function getContent($count, $format = 'html', $loremipsum = true)
	{
		$format = strtolower($format);
		
		if($count <= 0)
			return '';

		switch($format)
		{
			case 'txt':
				return $this->getText($count, $loremipsum);
			case 'plain':
				return $this->getPlain($count, $loremipsum);
			default:
				return $this->getHTML($count, $loremipsum);
		}
	}
	
	private function getWords(&$arr, $count, $loremipsum)
	{
		$i = 0;
		if($loremipsum)
		{
			$i = 2;
			$arr[0] = 'lorem';
			$arr[1] = 'ipsum';
		}
		
		for($i; $i < $count; $i++)
		{
			$index = array_rand($this->words);
			$word = $this->words[$index];
			//echo $index . '=>' . $word . '<br />';
			
			if($i > 0 && $arr[$i - 1] == $word)
				$i--;
			else
				$arr[$i] = $word;
		}
	}
	
	private function getPlain($count, $loremipsum, $returnStr = true)
	{
		$words = array();
		$this->getWords($words, $count, $loremipsum);
		//print_r($words);
		
		$delta = $count;
		$curr = 0;
		$sentences = array();
		while($delta > 0)
		{
			$senSize = $this->gaussianSentence();
			//echo $curr . '<br />';
			if(($delta - $senSize) < 4)
				$senSize = $delta;

			$delta -= $senSize;
			
			$sentence = array();
			for($i = $curr; $i < ($curr + $senSize); $i++)
				$sentence[] = $words[$i];

			$this->punctuate($sentence);
			$curr = $curr + $senSize;
			$sentences[] = $sentence;
		}
		
		if($returnStr)
		{
			$output = '';
			foreach($sentences as $s)
				foreach($s as $w)
					$output .= $w . ' ';
					
			return $output;
		}
		else
			return $sentences;
	}
	
	private function getText($count, $loremipsum)
	{
		$sentences = $this->getPlain($count, $loremipsum, false);
		$paragraphs = $this->getParagraphArr($sentences);
		
		$paragraphStr = array();
		foreach($paragraphs as $p)
		{
			$paragraphStr[] = $this->paragraphToString($p);
		}
		
		$paragraphStr[0] = "\t" . $paragraphStr[0];
		return implode("\n\n\t", $paragraphStr);
	}
	
	private function getParagraphArr($sentences)
	{
		$wordsPer = $this->wordsPerParagraph;
		$sentenceAvg = $this->wordsPerSentence;
		$total = count($sentences);
		
		$paragraphs = array();
		$pCount = 0;
		$currCount = 0;
		$curr = array();
		
		for($i = 0; $i < $total; $i++)
		{
			$s = $sentences[$i];
			$currCount += count($s);
			$curr[] = $s;
			if($currCount >= ($wordsPer - round($sentenceAvg / 2.00)) || $i == $total - 1)
			{
				$currCount = 0;
				$paragraphs[] = $curr;
				$curr = array();
				//print_r($paragraphs);
			}
			//print_r($paragraphs);
		}
		
		return $paragraphs;
	}
	
	private function getHTML($count, $loremipsum)
	{
		$sentences = $this->getPlain($count, $loremipsum, false);
		$paragraphs = $this->getParagraphArr($sentences);
		//print_r($paragraphs);
		
		$paragraphStr = array();
		foreach($paragraphs as $p)
		{
			$paragraphStr[] = "<p>\n" . $this->paragraphToString($p, true) . '</p>';
		}
		
		//add new lines for the sake of clean code
		return implode("\n", $paragraphStr);
	}
	
	private function paragraphToString($paragraph, $htmlCleanCode = false)
	{
		$paragraphStr = '';
		foreach($paragraph as $sentence)
		{
			foreach($sentence as $word)
				$paragraphStr .= $word . ' ';
				
			if($htmlCleanCode)
				$paragraphStr .= "\n";
		}		
		return $paragraphStr;
	}
	
	/*
	* Inserts commas and periods in the given
	* word array.
	*/
	private function punctuate(& $sentence)
	{
		$count = count($sentence);
		$sentence[$count - 1] = $sentence[$count - 1] . '.';
		
		if($count < 4)
			return $sentence;
		
		$commas = $this->numberOfCommas($count);
		
		for($i = 1; $i <= $commas; $i++)
		{
			$index = (int) round($i * $count / ($commas + 1));
			
			if($index < ($count - 1) && $index > 0)
			{
				$sentence[$index] = $sentence[$index] . ',';
			}
		}
		$sentence[0] = ucfirst($sentence[0]); //capitalize the first word
	}
	
	/*
	* Determines the number of commas for a
	* sentence of the given length. Average and
	* standard deviation are determined superficially
	*/
	private function numberOfCommas($len)
	{
		$avg = (float) log($len, 6);
		$stdDev = (float) $avg / 6.000;
		
		return (int) round($this->gauss_ms($avg, $stdDev));
	}
	
	/*
	* Returns a number on a gaussian distribution
	* based on the average word length of an english
	* sentence.
	* Statistics Source:
	*	http://hearle.nahoo.net/Academic/Maths/Sentence.html
	*	Average: 24.46
	*	Standard Deviation: 5.08
	*/
	private function gaussianSentence()
	{
		$avg = (float) 24.460;
		$stdDev = (float) 5.080;
		
		return (int) round($this->gauss_ms($avg, $stdDev));
	}
	
	/*
	* The following three functions are used to
	* compute numbers with a guassian distrobution
	* Source:
	* 	http://us.php.net/manual/en/function.rand.php#53784
	*/
	private function gauss()
	{   // N(0,1)
		// returns random number with normal distribution:
		//   mean=0
		//   std dev=1
		
		// auxilary vars
		$x=$this->random_0_1();
		$y=$this->random_0_1();
		
		// two independent variables with normal distribution N(0,1)
		$u=sqrt(-2*log($x))*cos(2*pi()*$y);
		$v=sqrt(-2*log($x))*sin(2*pi()*$y);
		
		// i will return only one, couse only one needed
		return $u;
	}

	private function gauss_ms($m=0.0,$s=1.0)
	{
		return $this->gauss()*$s+$m;
	}

	private function random_0_1()
	{
		return (float)rand()/(float)getrandmax();
	}

}