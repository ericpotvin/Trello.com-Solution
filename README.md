# Trello.com Developer Challenge Solution

I attended the Android Developer Conference and I overheard people talking about the Trello.com developer question. I was curious and I decided to take the challenge.

## Here is (was) the challenge.

Find an 8 letter string of characters that contains only letters from

	acdegilmnoprstuw

such that the hash(the_string) is

	25180466553932

if hash is defined by the following pseudo-code:

	Int64 hash (String s) {
    	Int64 h = 7
	    String letters = "acdegilmnoprstuw"
    	for(Int32 i = 0; i < s.length; i++) {
	        h = (h * 37 + letters.indexOf(s[i]))
    	}
	    return h
	}

For example, if we were trying to find the 7 letter string where hash(the_string) was 680131659347, the answer would be "leepadg".)
