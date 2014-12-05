import java.lang.String;

class Trello {

	final static int BASE_HASH = 7;
	final static int HASH = 37;
	final static String letters = "acdegilmnoprstuw";

	public static void main(String[] args) {
		try {
			Trello t = new Trello();
			t.display();
		}
		catch (Exception e) {
			e.printStackTrace ();
		}
	}

	private void display() {
		String str = "test";
		String deHashed = "";
		long i = Trello.hash(str);
		System.out.println("String to hash: " + str);
		System.out.println("Hash value: " + i);

		deHashed = Trello.deHash(i, deHashed);
		System.out.println("DeHashed value: " + deHashed);

		deHashed = "";
		deHashed = Trello.deHash(25180466553932L, deHashed);

		System.out.println("\nThe secret answer is: " + deHashed);
	}

	private static long hash (String s) {
		long h = Trello.BASE_HASH;
		for(int i = 0; i < s.length(); i++) {
			h = (h * Trello.HASH + Trello.letters.indexOf(s.charAt(i)));
		}
		return h;
	}

	private static String deHash(long hash, String stack) {
		int len = Trello.letters.length();

		for(int i = 0; i < len; i++) {
			if ((hash - i) % 37 == 0) {
				hash = (hash - i) / 37;
				if(hash == 0) {
					return stack;
				}
				stack = Trello.letters.charAt(i) + stack;
				return Trello.deHash(hash, stack);
			}
		}
		return stack;
	}

}
