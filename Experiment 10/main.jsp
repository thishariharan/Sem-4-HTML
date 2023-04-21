<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
    <%@page import="java.util.*"%>
   <%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c" %>
<%@ taglib uri="http://java.sun.com/jsp/jstl/fmt" prefix="fmt" %>
<%@ page import="array_maker.array_maker" %>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Sort my Array</title>
</head>
<body>
	<%
	array_maker l1 = new array_maker("Theri Baby","John Doe",1234567890,10.99);
	array_maker l2 = new array_maker("Kaavalan","Jane Smith",1357908644,5.99);
	array_maker l3 = new array_maker("Pokkiri","Bob Johnson",1357908642,20.50);
	ArrayList<array_maker> obj = new ArrayList<array_maker>();
	obj.add(l1);
	obj.add(l2);
	obj.add(l3);
	Collections.sort(obj, new Comparator<array_maker>() {
		  public int compare(array_maker a, array_maker b) {
		    return Double.compare(a.price, b.price);
		  }
		});
	pageContext.setAttribute("obj",obj);	
	%>
	<div style="margin:5%;">
	<h2>Thalapathy Veriyan Books</h2>
	<table border=1>
  <thead>
    <tr>
      <th>Title</th><th>Author</th><th>ISBN</th><th>Price</th>
    </tr>
  </thead>
  <tbody>
    <c:forEach items="${pageScope.obj}" var="i">
      <tr>
        <td><c:out value="${i.gettt()}"></c:out></td>
        <td><c:out value="${i.getat()}"></c:out></td>
        <td><c:out value="${i.getbn()}"></c:out></td>
        <td><fmt:formatNumber value="${i.getprc()}" type="currency"></fmt:formatNumber></td>
      </tr>
    </c:forEach>
  </tbody>
</table>
</div>
</body>
</html>
