<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c" %>
<%@ page import="java.util.List" %>
<%@ page import="com.model.Model" %>
<%@ page contentType="text/html;charset=UTF-8" language="java" %>
<!DOCTYPE html>
<html lang="en">
<title>Demo</title>
<%
List<Model> dssp = (List<Model>) request.getAttribute("ds");
int pages=0;
if(request.getParameter("page")== null){
    pages=1;
}else {
    pages=Integer.parseInt(request.getParameter("page"));
}

%>
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css"
          integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
        }

        #container {
            min-height: 100%;
            position: relative;

        }
    </style>
</head>
<body>
<div id="container">
    <h2>JSTL - forEach</h2>
    <div class="row">

        <c:forEach items="${dspage}" var="oblist">

        <div class="col-xs-6 col-md-3">
            <a href="#" class="thumbnail">
                <p> ${oblist.masp} </p>
                <p>${oblist.tensp}</p>
                <p>${oblist.gia}</p>
            </a>
        </div>
        </c:forEach>
    </div>

    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <%
            int pageNum = dssp.size()/3;
            if (dssp.size()%3 !=0){
                pageNum+=1;
            }
            %>
            <%for (int i=1;i<=pageNum; i++){%>
            <li class="page-item"><a class="page-link" href="/?page=<%=i%>"><%=i%></a></li>
            <%}%>
        </ul>
    </nav>

<c:out value="${ds.size()}"></c:out>

    <h2>JSTL - If</h2>
    <c:if test="${ds.get(2).masp % 2 != 0}">
        <b><u>${ds.get(2).tensp}</u></b>
        <p>Sinh viên có tên <strong>${ds.get(2).tensp}</strong> là sinh viên có mã số <strong>${ds.get(2).masp}</strong> là số lẻ</p>
    </c:if>



    <h2>JSTL - when , ortherwise, choose</h2>
    <c:choose>
        <c:when test="${ds.get(3).masp%2 == 0}">
            <p>Sinh viên <strong> ${ds.get(3).tensp}</strong> có mã sinh viên <strong> ${ds.get(3).masp}</strong> là số chẵn</p>
        </c:when>
        <c:otherwise>
            <p>Sinh viên <strong> ${ds.get(3).tensp}</strong> có mã sinh viên <strong> ${ds.get(3).masp}</strong> là số lẻ</p>
        </c:otherwise>
    </c:choose>


    <h2>JSTL - Set</h2>
    <c:set var="fullName" value="Lê Văn Thịnh"></c:set>
    <p>Biến có giá trị là <strong><c:out value="${fullName}"></c:out></strong></p>

    <h2>JSTL - Request , Session</h2>
    <c:out value="${requestScope.ds}"></c:out>
</div>
</body>
</html>