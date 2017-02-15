import re

def get_matching_words(regex):
 words = ["aimlessness",  "assassin", "baby", "beekeeper", "belladonna", "cannonball", "crybaby", "denver", "embraceable", "facetious", "flashbulb", "gaslight", "hobgoblin", "iconoclast", "issue", "kebab", "kilo", "laundered", "mattress", "millennia", "natural", "obsessive", "paranoia", "queen", "rabble", "reabsorb", "sacrilegious", "schoolroom", "tabby", "tabloid", "unbearable", "union", "videotape"]
 return [word for word in words if re.search(regex, word)]

# match = get_matching_words(r"v")
# match = get_matching_words(r"s+s")
match = get_matching_words(r"e$")
# match = get_matching_words(r"b\wb")
# match = get_matching_words(r"b\w+b")
# match = get_matching_words(r"")




print match
print len(match), "of 33 are a match"
