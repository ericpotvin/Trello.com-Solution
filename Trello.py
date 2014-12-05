class Trello:

	BASE_HASH = 7
	HASH = 37

	letters = "acdegilmnoprstuw";

	def __init__(self):
		pass

	@staticmethod
	def hash(str):
		lenght = len(str)
		if len == 0:
			return false
		hash = Trello.BASE_HASH
		for i in xrange(0, lenght):
			pos = Trello.letters.find(str[i])
			hash = hash * Trello.HASH + pos
		return hash;

	@staticmethod
	def deHash(hash, stack):
		lenght = len(Trello.letters)
		for i in xrange(0, lenght):
			if (hash - i) % 37 == 0:
				hash = (hash - i) / 37
				if hash == 0:
					return stack
				stack = Trello.letters[i] + stack
				return Trello.deHash(hash, stack)
