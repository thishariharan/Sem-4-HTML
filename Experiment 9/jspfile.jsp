<%@ page import = "java.sql.*" %>
<%@ page language="java" contentType="text/html; charset=ISO-8859-1" pageEncoding="ISO-8859-1" %>
 <!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Solving the Problems</title>
</head>
<body>
	<h1>Answers are here</h1>
	<h2>Question - 1</h2>
	<%
	try
	{
		Class.forName("com.mysql.cj.jdbc.Driver");
		Connection c = DriverManager.getConnection("jdbc:mysql://localhost:3306/Samples","root","Passing@5q1");
		Statement s = c.createStatement();
		String s1 = "Select count(Product_id) from Products";
		String s2 = "select Price from Products";
		String s3 = "select price,quantity from products";
		//String sq = "select * from Products";
		//s.executeQuery(sq);
		//r.next();
		/*while(r.next())
		{
			System.out.print("\nThe Id:"+r.getInt(1)+"\nName:"+r.getString(2)+"\nPrice:"+r.getFloat(4)+"\n\n");
		}*/
		float tot =0,mx,t=0;

		ResultSet r1 = s.executeQuery(s1);			
		r1.next();
		out.print("\nThere are "+r1.getInt(1)+" Products in our DB.");		
		
		out.print("<br><h2>Question - 2</h2>");

		ResultSet r2 = s.executeQuery(s2);
		while(r2.next())
		{
			tot = tot + r2.getFloat(1);
		}
		out.print("\nThe Average Price of all the Products is : "+tot/5);		
		
		out.print("<br><h2>Question - 3</h2>");

		ResultSet r3 = s.executeQuery(s3);
		while(r3.next())
		{
			mx = r3.getFloat(1)*r3.getInt(2);
			if(mx>t)
			{
				t=mx;
			}
		}
		out.print("\nThe Highest Total Price is :"+t);
	}
	catch(Exception e)
	{
		out.print(e);
	}
	%>

</body>
</html>
