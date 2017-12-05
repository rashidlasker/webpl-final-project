package examples;

import java.util.*;

// Java Bean.
// Professional Java Server Programming
// pg 133

public class Textbook
{
	private String book;
	private String owner;
	private String typer;
public Textbook ()
{
	book = "";
	owner = "";
	typer = "";
}

public String getBook() {
	return book;
}

public String getOwner() {
	return owner;
}

public String getTyper() {
	return typer;
}

public void setBook(String s) {
	book = s;
}

public void setOwner(String s) {
	owner = s;
}

public void setTyper(String s) {
	typer = s;
}


} // end class AlphabetCode