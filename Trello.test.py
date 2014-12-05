from Trello import Trello

class TrelloTest(Trello):
	def __init__(self):
		super(TrelloTest, self).__init__()


strOrg = 'test';
strNew = '';
hash = hashValue = TrelloTest.hash(strOrg);
strNew = Trello.deHash(hash, strNew);

print  "\nString to hash: ", strOrg;
print  "Hash value: ", hashValue;
print  "DeHashed value: ", strNew;

print "-----------------------------"


str = ''
hash = 25180466553932
str = Trello.deHash(hash, str);
print "\nThe secret answer is: ", str;
