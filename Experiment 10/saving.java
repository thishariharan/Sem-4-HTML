package array_maker;

public class array_maker {
	
	public String title,author;
	public int isbn;
	public double price;
	
	public array_maker(String tt,String at,int bn,double pr)
	{
		this.title = tt;
		this.author = at;
		this.isbn = bn;
		this.price = pr;
	}
	
	public String gettt()
	{
		return title;
	}
	
	public String getat()
	{
		return author;
	}
	
	public int getbn()
	{
		return isbn;
	}
	
	public double getprc()
	{
		return price;
	}
